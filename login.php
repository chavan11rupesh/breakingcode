<?php
if ($_POST['action1'] == 'Logout') {
    header('location:logout.php');
	echo"tejas";
	}                                      
	
	else{
$db='breakingcode';

$username=$_POST['loginusername'];
$password=$_POST['loginpassword'];
echo "$username $password";
$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
$query="SELECT * FROM `users` WHERE `username`='$username' AND `password`= '$password' ";
$result=mysqli_query($conn,$query);
if($row=mysqli_fetch_assoc($result)){
	session_start();
	$_SESSION['username']=$username;
}	header("location:vid.php");
	}


?>
