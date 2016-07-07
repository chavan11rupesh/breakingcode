<?php
session_start();
@$username=$_SESSION['username'];
$db='breakingcode';
$table='questions';
$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
$question=$_POST['Question'];
$topic=$_POST['Topic'];

$query="INSERT into $table (question,q_user_name,q_topic) VALUES (\"$question\",\"$username\",\"$topic\")";
$result=mysqli_query($conn,$query) or die("fucking die");
header("location:create_table.php");
?>