<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> Free Template- Simple Company</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="font-awesome-animation.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>


		
    <div class="container" id="home" >
        <div class="row text-center g-pad-up">
            <div class="col-md-12">	
                <span class="head-main">BREAKING CODE</span>
				</div>
        </div>
		</div>
		
  <section  id="services-sec" >
        <div class="container">
            
					
            <div class="row pad-top">
                <div class="col-md-12">
                      <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            #CodeForGood
                        </div>
                        <div class="panel-body">
                           <?php
						   $con = mysql_connect("localhost","root","");
						   if(!$con){
								die("Can not connect: " .mysql_error());
							}
							mysql_select_db("breakingcode",$con);
							$sql = "SELECT * FROM competition";
							$myData = mysql_query($sql,$con) OR DIE(mysql_error());
							while($row = mysql_fetch_array($myData,MYSQL_ASSOC)) {
									echo  " " . $row['id'] .")". "<b> Name:</b>" . $row['name'] . "<br><b>Start_date: </b>" . $row['start_date'] . "<br><b>End_date</b> " . $row['end_date'] . " <br><b> details:  </b>" . $row["details"] ; 
									echo "<br>" ;
							}
							mysql_close($con);
							?>
                        </div>
                        <div class="panel-footer">
                            <center>
							<button id="myBtn" class="styled-button-8">Details</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;

	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}                
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
                        </div>
                    </div>
                    </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            #HackerRank
                        </div>
                        <div class="panel-body">
                           <?php
						   $con = mysql_connect("localhost","root","");
						   if(!$con){
								die("Can not connect: " .mysql_error());
							}
							mysql_select_db("breakingcode",$con);
							$sql = "SELECT * FROM hackerrank";
							$myData = mysql_query($sql,$con) OR DIE(mysql_error());
							while($row = mysql_fetch_array($myData,MYSQL_ASSOC)) {
									echo  " " . $row['id'] .")". "<b> Name:</b>" . $row['name'] . "<br><b>Start_date: </b>" . $row['start_date'] . "<br><b>End_date</b> " . $row['end_date'] . " <br><b> details:  </b>" . $row["details"] ; 
									echo "<br>" ;
							}
							mysql_close($con);
							?>
                        </div>
                        <div class="panel-footer">
                            <center><button id="myBtn2" class="styled-button-8">Details</button>

<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close2">×</span>
    
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;

	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}                
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
			</div>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            #Codechef
                        </div>
                        <div class="panel-body">
									<?php
						   $con = mysql_connect("localhost","root","");
						   if(!$con){
								die("Can not connect: " .mysql_error());
							}
							mysql_select_db("breakingcode",$con);
							$sql = "SELECT * FROM coechef";
							$myData = mysql_query($sql,$con) OR DIE(mysql_error());
							while($row = mysql_fetch_array($myData,MYSQL_ASSOC)) {
									echo  " " . $row['id'] .")". "<b> Name:</b>" . $row['name'] . "<br><b>Start_date: </b>" . $row['start_date'] . "<br><b>End_date</b> " . $row['end_date'] . " <br><b> details:  </b>" . $row["details"] ; 
									echo "<br>" ;
							}
							mysql_close($con);
							?>
                        </div>
                        <div class="panel-footer">
										<center><input type="submit" class="styled-button-8" value="Add Reminder" /> 
		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;
	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}                
</style>
                        </div>
                    </div>
                    </div>
					
					     <div class="col-md-4 col-sm-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            #HackerEarth
                        </div>
                        <div class="panel-body">
                            <p></p>
                        </div>
                        <div class="panel-footer">
                            <center><input type="submit" class="styled-button-8" value="Add Reminder" /> 

		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;
	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}                
</style>
                    </div>
                    </div>
                    </div>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            #Topcoder
                        </div>
                        <div class="panel-body">
						<p></p>
                        </div>
                        <div class="panel-footer">
                            <center><input type="submit" class="styled-button-8" value="Add Reminder" /> 
		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;
	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B 9
}                
</style>
                    </div>
                    </div>
                    </div>	
					     <div class="col-md-4 col-sm-4">
						<div class="panel panel-info">
                        <div class="panel-heading">
                            #Codeforces
                        </div>
                        <div class="panel-body">
                            <p></p>
                        </div>
                        <div class="panel-footer">
                            <center><input type="submit" class="styled-button-8" value="Add Reminder" /> 
		<style type="text/css">
	.styled-button-8 {
	background: #25A6E1;
	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	padding:8px 13px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}               
</style>
				</div>
				</div>
                </div>
                </div>               
				</div>
				</div>
		</section>
		</body>
		</html>