<?php
    session_start();
    include "conn.php";
    $id = $_GET['id'];
    $employee = $conn->query("SELECT * FROM employees WHERE id='$id'");
    if (isset($_SESSION['emp_login']) || isset($_SESSION['admin_login'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
    }
    if ($employee->num_rows == 0) {
        $_SESSION['error'] = 'No User Found';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .helloform {
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger m-5 text-center text-uppercase" role="alert" style="font-size: 25px;">
            <?php
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
            ?>
        </div>
    <?php } ?>

    <div class="alert alert-success p-0 text-center">
        <?php if ($employee->num_rows != 0) { ?>
            <?php foreach ($employee as $c) { ?>
                <?php if (isset($_SESSION['emp_login']) && $_SESSION['userid'] == $c['id']) { ?>
                    <h3>Your Card</h3>
                <?php } ?>
                <?php if (!isset($_SESSION['emp_login']) || $_SESSION['userid'] != $c['id']) { ?>
                    <h3>Employee Card</h3>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
    
    <nav class="navbar navbar-brand bg-light text-center w-100">
        <?php if (isset($_SESSION['admin_login'])) { ?>
            <a class="btn btn-outline-success my-2 my-sm-0" href="crm.php">All Employees</a>
        <?php } ?>
        <?php if ($employee->num_rows != 0 && isset($_SESSION['admin_login'])) { ?>
            <a class="btn btn-outline-success my-2 my-sm-0" href="editemployee.php?id=<?=$id?>">Edit</a>
        <?php } ?>
        <?php if (isset($_SESSION['emp_login']) || isset($_SESSION['admin_login'])) { ?>
            <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Log Out</a>
        <?php } ?>
        <?php if (!isset($_SESSION['emp_login']) && !isset($_SESSION['admin_login'])) { ?>
            <a class="btn btn-primary my-2 my-sm-0" href="index.php">Log In</a>
        <?php } ?>
        <?php if (isset($_SESSION['emp_login'])) { ?>
            <a class="btn btn-success my-2 my-sm-0" href="msgdesign.php?cardid=<?=$id?>&&userid=<?=$_SESSION['userid']?>">Contact Admin</a>
        <?php } ?>
    </nav>

    <div class="container">
        <?php
        foreach ($employee as $c) { ?>
            <div class="card w-50 mx-auto">
                <img src="<?= $c['Image'] ?>" height="400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name:
                        <?= $c['Name'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Country:
                        <?= $c['Country'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Phone:
                        <?= $c['Phone'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Email:
                        <?= $c['Email'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">BirthDate:
                        <?= $c['Birthdate'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Gender:
                        <?= $c['Gender'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Status:
                        <?= $c['Status'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Salary:
                        <?= $c['Salary'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Department:
                        <?= $c['Department'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Job Title:
                        <?= $c['JobTitle'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Postal Code:
                        <?= $c['PostalCode'] ?>
                    </h5>
                    <hr>
                    <h5 class="card-title">Date:
                        <?= $c['date'] ?>
                    </h5>
                </div>
            </div>
        <?php } ?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>