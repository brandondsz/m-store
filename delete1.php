<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >

<<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="center" style="heigt:400;">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$re=mysql_query("select * from avail where model='".$_POST['model']."'");
$r1=mysql_query("select * from features where model='".$_POST['model']."'");
$ro=mysql_fetch_array($re);
$ro1=mysql_fetch_array($r1);
echo"<div class='heading'>Are you sure you want to delete this product?</div><hr>";

echo"<br><br><div style='position:absolute; left:50;top:70;'><img src='".$ro1['image']."'></div>";
echo "<div style='position:absolute; left:250;top:100;'><br><BR>".$ro1['brand']." ".$ro1['name'];
echo"<br><br>Price: Rs ".$ro1['price'];
echo"<br><br>No. of products available: ".$ro['no_products']."";
echo"<br><BR><a href='deleted.php?mo=".$_POST['model']."'>Yes</a>&nbsp&nbsp&nbsp&nbsp; <a href='delete.php'>  No</a>"; 

mysql_close($con);
?>

</body>
</html>