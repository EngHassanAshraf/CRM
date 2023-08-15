<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = "You must Login first";
    header("Location: index.php");
} else {
    include "conn.php";
    $query = "SELECT name FROM countries";
    $countries = $conn->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/body.jpeg');
            background-size: cover;
            background-position: center;
        }

        .helloform {
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);

        }
    </style>
</head>

<body>



    <div class="container w-50 mt-5 helloform">
        <h1 class="mb-5 text-center">Add Employee Form</h1>

        <div class="text-center">
            <a href="crm.php" class="btn btn-primary mb-5 ">Show All Employees</a>
        </div>

        <form class="  mx-auto " action="addemployee.php" method="post" enctype="multipart/form-data">

            <!-- basic info -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Employee Image</label>
                <input type="file" class="form-control" name="employeeimage">
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="birthdate">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="male">🙎🏻‍♂️ </option>
                    <option value="female">🧕🏻</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option>Single</option>
                    <option>Married</option>
                </select>
            </div>

            <!-- System Info  -->
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>

            <!-- Address and postal code -->
            <div class="form-group">
                <label>Country</label>
                <select id="country" name="country" class="form-control">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?= $country['name'] ?>"><?= $country['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div class="form-group">
                <label>Postal Code</label>
                <input type="text" class="form-control" name="postalcode">
            </div>
            <!-- in-company info -->
            <div class="form-group">
                <label>Department</label>
                <select name="department" class="form-control">
                    <option>HR</option>
                    <option>SALES</option>
                    <option>MARKETING</option>
                    <option>IT</option>
                    <option>PR</option>
                </select>
            </div>

            <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control" name="jobtitle">
            </div>

            <div class="form-group">
                <label>Salary</label>
                <input type="number" class="form-control" name="salary">
            </div>

            <button type="submit" class=" w-100 btn btn-success">+ Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>