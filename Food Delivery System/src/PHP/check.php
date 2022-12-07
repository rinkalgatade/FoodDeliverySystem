<?php
// echo "<pre>";
// print_r($_POST);

include "conn.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

$row=mysqli_num_rows($result);
$data= mysqli_fetch_assoc($result);

 if($row==1){
    echo "<script>alert('Loged in succesfully');</script>";
 }else{
    if(empty($email)){
        echo "<script>alert('Fill Email First');</script>";
    } elseif(empty($password)){
        echo "<script>alert('Fill password First');</script>";
    } 
    else{
        echo "Invalid Credential";
    }
 }