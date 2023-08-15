<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    if ($username == 'admin' && $password == 'admin') {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['admin_login'] = true;
      header("Location: crm.php"); 
    }
    else{
      //go to db and search for user if there go to profile else give error
      include('conn.php');
      $dec_password = md5($password);
      $query = "SELECT * FROM employees WHERE username = '$username' AND password = '$dec_password'";
      $employee_data = $conn->query($query);
      if($employee_data -> num_rows == 1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $dec_password;
        $_SESSION['emp_login'] = true;
        foreach($employee_data as $col){
          $_SESSION['userid'] = $col['id'];
        }
        header("Location: employeecard.php?id=".$_SESSION['userid']);
      }
      else { 
        $_SESSION['error'] = "Username/Password doesn't match";
        header("Location: index.php");
      }
    }
  }
  else{
    header("Location: index.php");
  }
?>