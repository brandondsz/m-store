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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>


 <?php 
 $brnd=$_GET['brnd'];
echo "<div class=center style='height:500;'>";
 echo "<div class=heading>".$brnd."</div><hr>"; 
 $con=mysql_connect("localhost","root","");
 mysql_select_db("mstore",$con);
 
 $res=mysql_query("select * from features where brand ='".$brnd."'");
 if(!$res) {echo"not";}
 
 while($row=mysql_fetch_array($res))
 {
 echo "<br><div style='position:relative;top:0;left:50;'><img src=".$row['image']." style='width:50;height:90;'></div>";
 echo '<div style="position:absolute;left:50;" ><a href="specs.php?q='.$row['model'].'">'." ".$row['brand']." ".$row['name']." </a><br>Processor: ".$row['processor']."<br>RAM: ".$row['ram']."<br>Price: Rs".$row['price'].'<br></div>';
 echo "<br><BR><BR><br><bR>";

 }
 mysql_close($con);
 echo "</div>";

 ?>


</body>
</html>