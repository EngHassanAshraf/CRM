<?php
    session_start();
    if(!isset($_SESSION['emp_login'])){
        $_SESSION['error'] = 'You Must Login First';
        header('Location: index.php');
    }else{
        if(!($_SERVER['REQUEST_METHOD']=='POST')){
            header('Location: index.php');
        }
        else{
            $msg = $_POST['emp_msg'];
            $empid = $_POST['userid'];
            $cardid = $_POST['cardid'];
            include('conn.php');
            $inserted = $conn->query("INSERT INTO messages(msgtext,empid,date) VALUES ('$msg', '$empid', Now())");
            if($inserted){
                $_SESSION['msg_done'] = 'Thanks';
                header('Location: index.php');
            }
        }
    }
?>