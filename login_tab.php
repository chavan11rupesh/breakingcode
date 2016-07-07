<?php
session_start();
$username=$_SESSION['username'];
?>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<title>Login Page</title>
	<style type="text/css">
		.container{
			height:100px;
			background-color:#C63D0F; 
			top:0px;
			left:0px;
			position:absolute;
			width:100%;
		}
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
</head>
<body>
	<header>
		<div class="container">
			<div style="float:right;margin-right:10px;">	
				<form action="login.php" method="POST">
					<b id="display"style="margin-left:10px;margin-top:30px; display:none;">Hello <?echo"$username"?></b>
					<input id="logout" name="action" style="margin-left:10px;margin-top:30px; display:none;" type="Submit" value="Logout">
					<input id="loginusername" style="margin-left:10px;margin-top:30px;" type="Text" name="loginusername" placeholder="Username">
					<input id="loginpassword" style="margin-left:10px;margin-top:30px;" type="Password" name="loginpassword" placeholder="Password">	
					<input id="login" style="margin-left:10px;margin-top:30px;" name="action" type="Submit" value="Login">
				</form>

			</div>	
		</div>
	</header>
</body>
</html>