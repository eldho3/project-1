<?php
require_once("connect.php");
$user=$_POST['username'];
$pass=$_POST['password'];

$query = "SELECT * FROM `userdata` ";
$result=mysqli_query($conn,$query);

  while($row=mysqli_fetch_assoc($result)){ 
    if($user==$row['username'] && $pass==$row['password']){

    echo "success";
    header("Location:/rdbms_project/home.php?uname=$user");
    }
  }
   $conn->close();
?>