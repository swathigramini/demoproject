<?php
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw-repeat = $_POST['psw-repeat'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect->error){
    die('connectionfailed': .$conn->connect->error);
}else{
$stmt = $conn->prepare("insert into regiter(email,psw,psw-repeat) values(?,?,?)"));
$stmt ->bind_param("sss",$email,$psw,$psw-repeat);
$stmt->execute();
$stmt->close();
$conn->close();
}
?>