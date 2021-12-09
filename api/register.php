<?php

include("connection.php");

$name = $_POST['name'];
$mobile = $_POST['mob'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$add = $_POST['add'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$role = $_POST['role'];


    if($pass!=$cpass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
        }
        else{
            move_uploaded_file($tmp_name,"../uploads/$image");
            $sql= "INSERT INTO user (name, mobile, password, address, photo, status, votes, role) VALUES ('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role') ";
            if(mysqli_query($connect,$sql)){
                echo '<script>
                alert("Registration successfull!");
                window.location = "../";
            </script>';
            }else{
                echo '<script>
                alert("Registration failed!");
            </script>';
            }
            
        }




?>