<?php
    session_start();
    if(isset($_SESSION['admin_login'])){
        include "conn.php";
        $id = $_POST['id'];
        $old_data = $conn->query("SELECT * FROM employees WHERE id=$id");

        if($_FILES['employeeimage']['error']>0){
            foreach($old_data as $old_img)
                $image_loc = $old_img['Image'];
        }
        else{
            $image_name = $_FILES['employeeimage']['name'];
            $image_tmp_loc = $_FILES['employeeimage']['tmp_name'];
            $image_loc = "images/" . time() . rand() . "$image_name";
            move_uploaded_file($image_tmp_loc, $image_loc);
        }


        $username = $_POST['username'];
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

        $update = "UPDATE employees SET 
        username='$username',
        Name='$Name',
        Address='$Address',
        Country='$Country',
        Phone='$Phone',
        Email='$Email',
        Image='$image_loc',
        Birthdate='$Birthdate',
        Gender='$Gender',
        Status='$Status',
        Salary='$Salary',
        Department='$Department',
        JobTitle='$JobTitle',
        PostalCode='$PostalCode',
        date=Now() 
        WHERE id=$id";

        $updated = $conn -> query($update);
        if($updated){
            header("Location: crm.php");
        }
    }
    else{
        header("Location: index.php");
    }
?>