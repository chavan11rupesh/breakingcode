<?php
session_start();
@$username=$_SESSION['username'];
$db='breakingcode';
$table='questions';
$id=$_GET['id'];
$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
$query1="SELECT * from answers where q_id =$id";
$query="SELECT * from questions where q_id =$id";
$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);

echo"	<div align=\"center\">
		<div style=\"width:1000px; align:center;\">
		<h1>$row[q_topic]</h1>
		<p bgcolor=\"blue\">$row[question]<p>
		<div style=\"float:right;\">~$row[q_user_name]</div>
		<br><br><br><br>
		";
echo"<table border='1' cellspacing='2' cellpadding='5'><tr><th>Author</th><th>Answer</th></tr>";
while($row2=mysqli_fetch_assoc($result1))
echo"	<tr><td width='100px'align='center'>$row2[ans_user_name]</td>	
			<td width='500px'align='center'>$row2[answer]</td>
		</tr>
";
echo"</table>";


echo"	<br><br><br><br>
		<form action=\"putanswer.php?id=$id\" method='POST'>
		
		<textarea name='answer' rows=\"6\" cols=\"100\"type=\"text\" placeholder=\"Your Answer\"></textarea><br>
		<input type=\"submit\" value=\"Submit Answer\">
		<form>
		</div>
		</div>"
;

?>