<?php
    session_start();
    if(isset($_SESSION['admin_login'])){
        include "conn.php";
        if(isset($_GET['msgid']))
        {
            $msgid = $_GET['msgid'];
            $deleted = $conn->query("DELETE FROM messages WHERE id=$msgid");
            if($deleted){
                header("Location: employeesmsgs.php");
            }
        }else{
        $id = $_GET['id'];
        $deleted = $conn->query("DELETE FROM employees WHERE id=$id");
        if($deleted){
            header("Location: crm.php");
        }
    }
    }
    else{
        header("Location: index.php");
    }
?>