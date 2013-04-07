<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:500;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="add.php">  Add new product  </a>  
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a>   
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="update.php">Update product</a>     
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="delete.php">Delete another product</a>     

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>
<div class="center">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
echo"<div class='heading'>";
$mo=$_GET['mo'];
$res=mysql_query("delete from features  where model='".$mo."'");
$res1=mysql_query("delete from spl_features where model='".$mo."'");
$res2=mysql_query("delete from avail where model='".$mo."'");
echo "Product deleted</div>";

?>
</div>
</body>
</html>
