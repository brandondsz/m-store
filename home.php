<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:900;">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find phone   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>


<div class=lefts style="left:100">
<div class=heading>Brands</div>
<hr>
<a href="brand.php?brnd=samsung">Samsung</a> </br>
<a href="brand.php?brnd=htc">htc</a> </br>
<a href="brand.php?brnd=nokia">Nokia</a> </br>
<a href="brand.php?brnd=motorola">Motorola</a> </br>
<a href="brand.php?brnd=blackberry">Blackberry</a> </br>
<a href="brand.php?brnd=sony">Sony</a> </br>


</div>

<div class=rights style="left:300">
<div class=heading>Latest products</div>
<hr>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$r=mysql_query("select* from features");
$nr=mysql_num_rows($r);
//echo $nr;
$l=$nr-4;
$res=mysql_query("select * from features limit ".$l." ,".$nr."");
$row=mysql_fetch_array($res);

echo "<div style='position:absolute;top:90;left:50;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;top:100;left:110;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs".$row['price'].'<br></div>';
$row=mysql_fetch_array($res);
 echo "<div style='position:absolute;top:200;left:50;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;top:210;left:110;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs".$row['price'].'<br></div>';

 $row=mysql_fetch_array($res);
echo "<div style='position:absolute;top:90;left:300;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;top:100;left:360;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs".$row['price'].'<br></div>';
$row=mysql_fetch_array($res);
 echo "<div style='position:absolute;top:200;left:300;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;top:210;left:360;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs".$row['price'].'<br></div>';

mysql_close($con);
?>
</div>
</body>
</html>