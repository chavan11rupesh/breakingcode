<?php
session_start();
@$username=$_SESSION['username'];
if($username=="")
{
	
	$db='breakingcode';
     $table='var';
if(!mysql_connect('localhost','root','')||!mysql_select_db('breakingcode')){
   die('Could not connect to the database');
} 

	$query1="UPDATE `var` SET see='1' WHERE name='final'";
	$result=mysql_query($query1);
	
	header('location:vid.php');
	
		
		 
}

?>

<html>
<head>
	<title></title>
	<style>
		#ht{
	background-color:#C0C0C0;
	height:20%;
	width:35%;
	}
	</style>
</head>
<body>
<header >
	<div  height="50px" style=" ">
			<div style="float:left;  border-left:3px solid black; border-top:3px solid black; border-bottom:3px solid black;">
			<img  src="s.png"  height="19.5%">                                   
			</div>
					<div id="ht" style="float:left; border-right:3px solid black; border-top:3px solid black; border-bottom:3px solid black;">
				<form action="login.php" method="POST">
					<b id="display"style="margin-left:10px;margin-top:30px; height:20px; font-size:14pt; ">Hello <?php echo"$username";?></b>
					<input id="logout" name="action1" style="margin-left:10px;margin-top:30px;" type="Submit" value="Logout">
									</form></div>

		</div>

</header>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>

<form action="insert_question.php" method="POST"> 
<input name="Question" placeholder="Question" type="text">
<input name="Topic" placeholder="Topic" type="text">
<input type="Submit">
</form>
<table width="90%" border="" align="center" cellpadding="4" cellspacing="3" bgcolor="#E6E6E6">
<tr><th>Topic</th><th>Author</th></tr>
<?php
$db='breakingcode';
$table='questions';
$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
$query="SELECT * from questions";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
echo"
<tr>
	<td align=\"center\">
		<a href=\"view_ques.php?id=$row[q_id]\">$row[q_topic]
	</td>
	<td align=\"center\">
		$row[q_user_name]
	</td>
</tr>";
}
?>
</table>
</body>
</html>
