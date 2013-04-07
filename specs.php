<!DOCTYPE>
<html>
<head> 
<title> m-store</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>

<body background="black.jpg" behaviour="fixed">
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class=bar>
<div style="position:absolute;left:700;">
&nbsp;<a href="home.php">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find phone   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>

</div>
</div>
<div class=center style="height:500;">

<?php
$q = $_GET['q'];
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mstore", $con);

$res=mysql_query("select * from features where model='".$q."'");
$row=mysql_fetch_array($res);
echo "<br><img src=".$row['image'].">";
echo "<div class=rights style='width:300;left:400;'>
 
 Model No. : ".$row['model']."
 <br>Name : ".$row['name']."
 <br>Brand : ".$row['brand']."
 <br>OS : ".$row['os']."
 <br>Processor : ".$row['processor']."
 <br>RAM : ".$row['ram']."
 <br>Internal memory : ".$row['intrnl_m']."
 <br>External memory : ".$row['extrnl_m']."
 <br>Screen size : ".$row['scrn_size']."
 <br>Camera : ".$row['camera']."
 <br>Body type : ".$row['bdy_type']."
 <br>GPS : ".$row['gps']."
 <br>Bluetooth : ".$row['bluetooth']."
 <br>WIFI : ".$row['wifi']."
 <br>Price : Rs".$row['price']."
 </div>";
 $md=$row['model'];
 
 echo "<br><br><br>Special features:";
 $res=mysql_query("select * from spl_features where model='".$q."'");
 while($row=mysql_fetch_array($res))
 {
 echo"<br>-";
 echo $row[features];
 
 }
 $res=mysql_query("select * from avail where model='".$q."'");
 
		$row=mysql_fetch_array($res);
		if($row['no_products']<=0)
		{
		echo"<br><br>Product unavailable";
		}
		else
		{
		echo "<br><br>Availability <br>Days : ".$row['no_days']."<br>";

echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<br><img src='images/arrow.gif'><a href='buy.php?md=".$q."'>Purchase</a>";
		}
mysql_close($con);
?>

<br><br>


</div>


</body>
</html>