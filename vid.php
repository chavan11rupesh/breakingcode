<?php
session_start();
@$username=$_SESSION['username'];
    $db='breakingcode';
	$h=0;
     $table='var';
	$conn=mysqli_connect("localhost",'root','',$db) or die("cant connect");
	$query1="select * from `var`";
	$result=mysqli_query($conn,$query1);
	while($row = $result->fetch_assoc())
	{

	$h=$row['see'];
	}
	if($h=='1')
	{
		echo"
		
	<script type= text/javascript>

    alert(\"You must login to view this page\");

</script>
		";
	}

   $query2="update `var` set see='0' where name='final'";
	$result=mysqli_query($conn,$query2);

?>

<html>
<head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<title>Login Page</title>
	<style type="text/css">
		.container{
			height:50px;
			background-color:#e9e9e9; 
			top:0px;
			left:0px;
			
			width:100%;
		}
#loginusername{
	height:20px; font-size:14pt; 
	
}
#login{
	height:30px; font-size:14pt; 
	
}
#logout{
	height:30px; font-size:14pt; 
	
}
#loginpassword{
	height:20px; font-size:14pt; 
	
}
		
		
		
.left{
margin-left:10px}
</style>
<script type="text/javascript">

		<?php
			if(($_SESSION['username'])!=""){
				echo"	
						$(function(){
							$('#logout').css('display','inline');
							$('#display').css('display','inline');
							$('#loginusername').css('display','none');
							$('#loginpassword').css('display','none');
							$('#login').css('display','none');
						});
				";
				echo "$username";
				
		
			}
		?>
		
		
		
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script>
	$( "#vin area" ).click(function() {
  alert( "Handler for .click() called." );
});
	</script>
</head>
<body style="background-color:#e9e9e9;">
<header>
<div class="container">
			<div style="float:right;margin-right:10px;">	
				<form action="login.php" method="POST">
					<b id="display"style="margin-left:10px;margin-top:30px; display:none;height:20px; font-size:14pt; ">Hello <?php echo"$username";?></b>
					<input id="logout" name="action1" style="margin-left:10px;margin-top:30px; display:none;" type="Submit" value="Logout">
					<input id="loginusername" style="margin-left:10px;margin-top:30px;" type="Text" name="loginusername" placeholder="Username">
					<input id="loginpassword" style="margin-left:10px;margin-top:30px;" type="Password" name="loginpassword" placeholder="Password">	
					<input id="login" style="margin-left:10px;margin-top:30px;" name="action" type="Submit" value="Login">
				</form>

			</div>	
		</div>
<div style="position: relative; left: 0; top: 0;">
<img class="left" src="t.png" width="99%" height="37%" usemap="#planetmap">

<map name="planetmap" id="vin">
  <area shape="rect" coords="7550,7550,8255,1526" alt="Sun" href="http://www.w3schools.com/html/tryit.asp?filename=tryhtml_images_map">
  <area shape="rect" id="don" coords="450,210,200,140"  alt="Mercury" href="create_table.php"
  >
  <area shape="rect" coords="250,120,100,50" alt="Venus" href="">
</map>

</div>
</header>


<?php
if(!mysql_connect('localhost','root','')||!mysql_select_db('breakingcode')){
   die('Could not connect to the database');
} 

$query = "SELECT * FROM `videos`";

$comments = mysql_query($query);

echo "
 <div style='width: 500px;
 height:80px;
border: 2px solid gray;
background-color:lightgrey;
box-shadow: 2px 2px 4px #888;
border-top: 10px solid black;
border-left: 10px solid black;
min-height: 30px;
margin-left:400px;
padding-: 10px;
font-size: 15pt;

'>
<h1 style=\"text-align: center;\">ALL VIDEOS</h1>
</div>
";
echo"<br>";
while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{
	
  $name = $row['name'];
  $id = $row['vidid'];
  $vidlink = $row['vidlink'];
  $probimg = $row['probimg'];
  $diff = $row['diff'];
  $domain=$row['domain'];
   $height = $row['height'];
   $website=$row['website'];
   $image=$row['image'];


  
  echo " 
  <div style='width: 1000px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
background-color:lightgrey;
border-top: 10px solid grey;
border-left: 10px solid grey;
min-height: 200px;
margin-left:100px;
font-weight:900;
padding-: 10px;
font-size: 15pt;

'>
<div style=\"float:left; width:300px\"><img src=\"data:image/jpeg;base64,". base64_encode($image) ."\"   width=90% height=25%/></div>

<div  style=\"float:left; margin-left:0px;\">
     Name: $name<br>
     Website: $website<br>
      Domain: $domain<br>
    <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='details.php?id=$id' <button id='$id' value='$id'>WATCH VIDEO</button></a>
	  </div>
    </div>
	
	
<br>
<br>

	
  ";
}



?>


</body>
</html>