<?php
include 'database.php';



$recept=$_POST['recept'];


$sql="INSERT INTO  payment(recept) VALUES ('$recept')";

$result=mysqli_query($conn, $sql);

if($result){
       
    header('Location: ./buynow.php');
}

?>