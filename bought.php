<!DOCTYPE>
<html>
<head> 
<title> m-store</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>

<body background="black.jpg" behaviour="fixed">
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:700;">
&nbsp;<a href="home.php">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find other  </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>

<div class=center>
<?php
$m=$_GET['md'];

$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mstore", $con);
$f=0;

if($_POST[email]=="")	{echo "Invalid email id <br>";$f=1;}

if($_POST[firstname]=="")	{echo "Invalid first name <br>";$f=1;}
if($_POST[lastname]=="")	{echo "Invalid last name<br>";$f=1;}
if($_POST[phno]==""||!is_numeric($_POST[phno]) )	{echo "Invalid contact no.<br>";$f=1;}
if(!$f)
{


mysql_query("INSERT INTO customer (id,email,fname,lname,address,dob,model,phno) VALUES
('id','$_POST[email]','$_POST[firstname]','$_POST[lastname]','$_POST[addr]',".date("y").date("m").date("d").",'$m','$_POST[phno]')");

$tt=mysql_query("select * from avail where model ='".$m."' ");

$ro=mysql_fetch_array($tt);
echo "<div class='heading'>Product with model no:".$m." bought.<br> <br>Will reach specified address in ".$ro['no_days']." days.<br><br>Thank you for using m-store.</div>";
$temp=$ro['no_products']-1;


mysql_query("update avail set no_products='".$temp."'where model ='".$m."'");

}
else
{echo"<br>Try again";}
mysql_close($con);


?>

</div>
</body>
</html>