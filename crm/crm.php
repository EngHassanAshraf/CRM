<?php
    session_start();
    if(!isset($_SESSION['admin_login'])){
        $_SESSION['error'] = "You must Login first";
        header("Location: index.php");
    }
    else{
    include "conn.php";
    $query = "SELECT * FROM employees";
    $employees = $conn -> query($query);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-brand bg-light text-center w-100">
        <h4 class="navbar-brand">All Employees Data</h4>
        <br>
        <a class="btn btn-outline-success my-2 my-sm-0" href="insertemployee.php">Add Employee</a>
        <a class="btn btn-outline-success my-2 my-sm-0" href="employeesmsgs.php">Employees Msgs</a>
        <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Log Out</a>
    </nav>

    <table class="table text-center">
        <thead class="thead-dark text-capitalize">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Salary</th>
                <th scope="col">Job Title</th>
                <th scope="col">Department</th>
                <th scope="col">username</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee) { ?>
                <tr>
                    <th scope="row"><?= $employee['id'] ?></th>
                    <td><img src="<?= $employee['Image'] ?>" alt="empImage" width="50"></td>
                    <td><?= $employee['Name'] ?></td>
                    <td><?= $employee['Email'] ?></td>
                    <td><?= $employee['Phone'] ?></td>
                    <td><?= $employee['Gender'] ?></td>
                    <td><?= $employee['Salary'] ?></td>
                    <td><?= $employee['JobTitle'] ?></td>
                    <td><?= $employee['Department'] ?></td>
                    <td><?= $employee['username'] ?></td>
                    <td><?= $employee['date'] ?></td>
                    <td>
                        <a href="employeecard.php?id=<?= $employee['id'] ?>" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="editemployee.php?id=<?= $employee['id'] ?>" class="btn btn-success">
                            <i  class="fas fa-edit"></i>
                        </a>
                        <a href="delete.php?id=<?= $employee['id'] ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>