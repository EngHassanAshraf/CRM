<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = "You must Login First";
    header("Location: index.php");
} else {
    include "conn.php";
    $query = "SELECT * FROM messages";
    $messages = $conn->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-brand bg-light text-center w-100">
        <h4 class="navbar-brand">Employees Messages</h4>
        <br>
        <a class="btn btn-outline-success my-2 my-sm-0" href="crm.php">View Employees</a>
        <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Log Out</a>
    </nav>
    <table class="table text-center">
        <thead class="thead-dark text-capitalize">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Message</th>
                <th scope="col">Employee id</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message) { ?>
                <tr>
                    <th scope="row"><?= $message['id'] ?></th>
                    <td><?= $message['msgtext'] ?></td>
                    <td> <a href="employeecard.php?id=<?= $message['empid'] ?>"><?= $message['empid'] ?></a></td>
                    <td><?= $message['date'] ?></td>
                    <td>
                        <a href="delete.php?msgid=<?= $message['id'] ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>