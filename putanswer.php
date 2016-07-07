<?php
session_start();
@$username=$_SESSION['username'];
$db='breakingcode';
$table='answers';
$id=$_GET['id'];
$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
$answer=$_POST['answer'];
$query="INSERT into $table (answer,ans_user_name,q_id) VALUES ('$answer','$username','$id')";
$result=mysqli_query($conn,$query) or die("fucking die");
header("location:view_ques.php?id=".$id."");
?>