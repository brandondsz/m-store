<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:700;">
<a href="add.php">Add another product </a>
&nbsp&nbsp&nbsp&nbsp;<a href="update.php"> Update product </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="delete.php">  Delete product  </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>

<div class=center style="width:1000;height:800;">
<?php
$p=$_POST[price];
$n=$_POST[no_products];
echo"<div class='heading'>";
if($_POST['model']==""||$_POST['brand']==""||$_POST['name']==""||$_POST['processor']==""||$_POST['ram']==""||$_POST['intrnl_m']==""||$_POST['extrnl_m']==""||$_POST['scrn_size']==""||
$_POST['scrn_res']==""||$_POST['camera']==""||$_POST['bdy_type']==""||$_POST['gps']==""||$_POST['bluetooth']==""||$_POST['wifi']==""||$_POST['price']==""||$_POST['no_days']=="")
{echo "<br>All entries are mandatory. Please fill them correctly.";}
else if(!is_numeric($p))
{echo "Invalid price input<br>";}
else if(!is_numeric($n))
{echo "Invalid entry for no. of products<br>";}
else
{echo "<br>Product added";}
echo"</div>";
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
mysql_query("insert into features values('$_POST[model]','$_POST[name]','$_POST[brand]','$_POST[os]','$_POST[processor]','$_POST[ram]','$_POST[intrnl_m]','$_POST[extrnl_m]',
'$_POST[scrn_size]','$_POST[scrn_res]','$_POST[camera]','$_POST[bdy_type]','$_POST[gps]','$_POST[bluetooth]','$_POST[wifi]','$_POST[price]','$_POST[image]')");

mysql_query("insert into spl_features values('$_POST[model]','$_POST[features]')");
mysql_query("insert into avail values('$_POST[model]','$_POST[no_days]','$_POST[no_products]')");
echo "<hr>";

?>
</div>
</body>
</html>