<?php
  session_start();
  if (isset($_SESSION['userid']) ||( isset($_SESSION['username']) && $_SESSION['username']=='admin')) {  
    if(isset($_SESSION['admin_login'])){
      header("Location: crm.php");
    }
    else if(isset($_SESSION['emp_login'])){
      $id = $_SESSION['userid'];
      header("Location: employeecard.php?id=$id");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <?php if(isset($_SESSION['error'])){ ?>
    <div class="alert alert-danger" role="alert">
      <?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
    </div>
  <?php } ?>

  <form 
    class= "mx-5 my-5" 
    method= "post" 
    action= "login.php"
  >   
    <div class="form-group">
      <label>User Name</label>
      <input type="text" class="form-control" name='username'>
    </div>
    
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name='password'>
    </div>

    <button type="submit" class="btn btn-primary" >Login</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>