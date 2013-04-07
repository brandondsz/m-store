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
&nbsp;<a href="home.php"> Home  </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find phone   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>

<div class=center style="width:1000;height:800;">
<div class=heading> Search results</div>
<hr>
<?php 
$con=mysql_connect("localhost","root","");
if(!$con)
{echo "not connected<br>";}
$t=mysql_select_db("mstore",$con);
$result = mysql_query("select * from features where os = '".$_POST['ops']."' and price >'".$_POST['fr']."' and price <'".$_POST['to']."'");

 while($row=mysql_fetch_array($result))
 {
 echo "<br><div style='position:relative;left:50;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;left:50;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs ".$row['price'].'</div>';
echo"<br><br><br><br>";
 }
mysql_close($con);
?>


</div>
</body>
</html>