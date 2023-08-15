<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = "You must Login first";
    header("Location: index.php");
} else {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include "conn.php";
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $Name = $_POST['name'];
        $Address = $_POST['address'];
        $Country = $_POST['country'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $Birthdate = $_POST['birthdate'];
        $Gender = $_POST['gender'];
        $Status = $_POST['status'];
        $Salary = $_POST['salary'];
        $Department = $_POST['department'];
        $JobTitle = $_POST['jobtitle'];
        $PostalCode = $_POST['postalcode'];

        $image_name = $_FILES['employeeimage']['name'];
        $image_tmp_loc = $_FILES['employeeimage']['tmp_name'];
        $image_loc = "images/" . time() . rand() . "$image_name";

        move_uploaded_file($image_tmp_loc, $image_loc);

        $query = "INSERT INTO `employees`
    (`username`, `password`, `Name`, `Address`, `Country`, `Phone`, `Email`, `Birthdate`, `Gender`, `Status`, `Salary`, `Department`, `JobTitle`, `PostalCode`, `Image`, `date`) VALUES (
        '$username',
        '$password',
        '$Name',
        '$Address',
        '$Country',
        '$Phone',
        '$Email',
        '$Birthdate',
        '$Gender',
        '$Status',
        '$Salary',
        '$Department',
        '$JobTitle',
        '$PostalCode',
        '$image_loc',
        Now()
    )";

        $inserted = $conn->query($query);

        if ($inserted) {
            header("Location: crm.php");
        }
    }
    else{
        header("Location: insertemployee.php");
    }
}
