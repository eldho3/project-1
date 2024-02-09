<?php
require_once('connect.php');
$user=$_POST['username'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

 if($cpass==$pass){
    $stmt = $conn->prepare("insert into userdata(username,password) values(?,?)");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    echo "SUCCESSFULL REGISTRATION";
    $stmt->close();
    $conn->close();
 }
 else{
    echo "password not matching";
 }

?>


