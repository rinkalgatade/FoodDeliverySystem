<?php
// echo "<pre>";
// print_r($_POST);

// Create connection
include "conn.php";
if(isset($_POST['registerbtn'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
//Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$sql = "INSERT INTO student VALUES (NULL, '$name', '$email', '$password', '$mobile')";

if (mysqli_query($conn, $sql)) {
  //header ("location:view.php");
  echo "<script>alert('data saved succesfully');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);




}
?>