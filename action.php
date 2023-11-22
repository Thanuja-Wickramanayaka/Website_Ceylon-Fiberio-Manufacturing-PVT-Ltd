<?php
include 'database.php';



$username=$_POST['username'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO  user_messages(Username, Email, Subject,  Message) VALUES ('$username','$email','$subject','$message')";

$result=mysqli_query($conn, $sql);

if($result){
       
    header('Location: ./contact_us.php');
}

?>