<?php 
    require_once('db.php');

    function load_assigned_task($userName){
        $sql = "select * from taskmanagement where AssignTo = ?";

        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$userName);
        $stm->execute();

        $result = $stm->get_result();

        $output = array();

        while($row = $result->fetch_assoc()){
            $output[] = $row;
        }

        return $output;
    }

    function submit_task($taskId,$file,$text){
        $sql = "update taskmanagement 
                set Status = 'Waiting', AttachedFile = ?, Content = ?
                where TaskID = ?";

        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param('ssi',$file,$text,$taskId);
        $stm->execute();

        if($stm->affected_rows == 1)
            return $taskId;
        
        return -1;
    }

    function start_task($taskId){
        $sql = "update taskmanagement 
                set Status = 'In Progress'
                where TaskID = ?";

        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param('i',$taskId);
        $stm->execute();

        if($stm->affected_rows == 1)
            return $taskId;
        
        return -1;
    }

    function load_absent($userName){
        $sql = "select * from absentmanagement where UserName = ?";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$userName);
        $stm->execute();

        $result = $stm->get_result();
        $output = array();
        while($row = $result->fetch_assoc()){
            $output[] = $row;
        }

        return $output;
    }

    function submit_absent($userName,$absentDay,$fullName,$department,$reason,$attachFile){
        $submitDate = date('Y-m-d',time());
        
        $sql = "insert into absentmanagement 
                (FullName,UserName,Department,AbsentDays,Reason,SubmitDate,AttachedFile)
                values (?,?,?,?,?,?,?)";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm -> bind_param('sssisss',$fullName,$userName,$department,$absentDay,$reason,$submitDate,$attachFile);
        $stm -> execute();

        if($stm->affected_rows == 1) return 1; //thanh cong
        return -1;
    }
?>