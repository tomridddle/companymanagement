<?php 
    require_once('../../db.php');

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
?>