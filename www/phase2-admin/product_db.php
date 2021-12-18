<?php
    require_once("db.php");
    function add_employee($fullName, $userName, $department, $role) {
        $sql = "insert into employeeinfo(UserName,Password,FullName,Department,Role ) values(?,?,?,?,?)";
        $conn = get_connection();
        $pass = password_hash($userName, PASSWORD_BCRYPT);

        $stm = $conn->prepare($sql);
        $stm->bind_param("sssss",$userName,$pass,$fullName,$department,$role);
        $stm->execute();

        if ($stm->affected_rows == 1) {
            return $stm->insert_id;
        }

        return -1;
    }

    function add_department($name, $desc, $quantity) {
        $sql = "insert into departmentinfo(name,quantity,description) values(?,?,?)";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param("sis",$name,$quantity,$desc);
        $stm->execute();

        if ($stm->affected_rows == 1) {
            return $stm->insert_id;
        }

        return -1;
    }

    function get_employees() {
        $sql = "select * from employeeinfo";
        $conn = get_connection();
        $result = $conn->query($sql);

        $output = array();
        while ($row = $result->fetch_assoc()) {
            $output[] = $row;
        }

        return $output;
    }

    function get_employee($id) {
        $sql = "select * from employeeinfo where EmpID = $id";
        $conn = get_connection();

        $result = $conn->query($sql);
        $output = null;
        while ($row = $result->fetch_assoc()) {
            $output = $row;
        }
        
        return $output;
    }

    function update_password($id,$username) {
        $hash = password_hash($username, PASSWORD_BCRYPT);
        $sql = "UPDATE employeeinfo SET Password = ? where EmpID = ?";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param("si",$hash, $id);
        $stm->execute();

        return $stm->affected_rows === 1;
    }

    function update_department($id, $name, $desc, $quantity) {
        
        $sql = "UPDATE departmentinfo SET name = ?, quantity = ?, description = ? where ID = ?";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param("sisi",$name, $quantity, $desc, $id);
        $stm->execute();

        return $stm->affected_rows === 1;
    }

    function get_faculties() {
        $sql = "select * from departmentinfo";
        $conn = get_connection();
        $result = $conn->query($sql);

        $output = array();
        while ($row = $result->fetch_assoc()) {
            $output[] = $row;
        }

        return $output;
    }
?>