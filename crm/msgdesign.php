<?php
  session_start();
  if(isset($_SESSION['emp_login'])){
    if(isset($_GET['cardid']) && isset($_GET['userid'])){    
      $cardid = $_GET['cardid'];
      $userid = $_GET['userid'];
    }
    else{
      header('Location: index.php');
    }
  }
  else{
    $_SESSION['error'] = 'You Must Login First';
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Msg...</title>
  </head>

  <body>
    <div style="text-align: center;">
      <form action="msg.php" method="post">
        <input type="text" hidden value="<?=$cardid?>" name='cardid'>
        <input type="text" hidden value="<?=$userid?>" name='userid'>
        <h3><label>Enter Your Msg</label></h3>
        <textarea
          name="emp_msg"
          rows="8"
          cols="80"
          placeholder="msg..."
        ></textarea>
        <hr width="500"/>
        <input type="text" name="emp_name" placeholder="Your Name..." />
        <input type="email" name="email" placeholder="Your Email..." />
        <hr width="500"/>
        <input type="submit" />
      </form>
    </div>
  </body>
</html>
