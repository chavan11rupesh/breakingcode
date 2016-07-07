<?php
require 'blah.php';
$id=$_GET['id'];

$query="SELECT * from videos where vidid='$id'";
$query_run = mysql_query($query);



if(@$query_run=mysql_query($query)){
	while(@$row=(mysql_fetch_assoc($query_run))){
	  $name = $row['name'];
  $id = $row['vidid'];
  $vidlink = $row['vidlink'];
  $probimg  = $row['probimg'];
  $diff = $row['diff'];
  $domain=$row['domain'];
   $height = $row['height'];
   $website=$row['website'];
  
 

  
  
  echo " 
  

<html>
<head>
<style>
.left{
margin-left:10px}

</style>
</head>
<body style=\"background-color:#e9e9e9;\">
<header>

<div style=\"position: relative; left: 0; top: 0;\">
<img class=\"left\" src=\"t.png\" width=\"99%\" height=\"37%\" usemap=\"#planetmap\">

<map name=\"planetmap\">
  <area shape=\"rect\" coords=\"7550,7550,8255,1526\" alt=\"Sun\" href=\"http://www.w3schools.com/html/tryit.asp?filename=tryhtml_images_map\">
  <area shape=\"rect\" coords=\"450,210,200,140\" alt=\"Mercury\" href=\"create_table.php\">
  <area shape=\"rect\" coords=\"250,120,100,50\" alt=\"Venus\" href=\"venus.htm\">
</map>

</div>
</header>


<h1>Name of the problem => $name</h1>
<h2>Difficulty=$diff</h2>
<h2 style=\"text-align: center;\">Question</h2>
<div style=\"border: 3px solid rgb(211, 211, 211); margin: 15px auto; max-width: 736px; height:800px; \">
<img src=\"data:probimg/jpeg;base64,". base64_encode($probimg) ."\"   width=100% height=100%/>
</div>
<h2 style=\"text-align: center;\">Explanation</h2>
<div style=\"border: 5px solid rgb(201, 0, 1); overflow: hidden; margin: 15px auto; max-width: 560px;\">
<iframe width=\"560\" height=\"315\" src=\"$vidlink\" frameborder=\"0\" allowfullscreen></iframe></div>

</body>
</html>

	


	
  ";

	}
}

?>

