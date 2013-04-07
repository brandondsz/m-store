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
&nbsp;<a href="add.php"> Add product  </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="delete.php">  Delete product  </a>
       
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>
<div class="center" style="height:500">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$res=mysql_query("select * from avail where model='".$_POST['model']."'");
$res1=mysql_query("select * from features where model='".$_POST['model']."'");
echo "<form action='updated.php?mo=".$_POST['model']."' method='post'>";
echo"Current details of Model no: ".$_POST['model'];
$ro=mysql_fetch_array($res);
$ro1=mysql_fetch_array($res1);
echo"<br><br><div style='position:relative; left:0;'><img src='".$ro1['image']."'></div>";
echo "<div style='position:absolute; left:250;top:100;'><br><BR>".$ro1['brand']." ".$ro1['name'];
echo"<br><br>Price: &nbsp&nbsp;Rs ".$ro1['price'];
echo"<br><br>No. of products available: ".$ro['no_products']."</div>";

 echo" <br><hr><br>Update price: &nbsp&nbsp&nbsp&nbsp&nbsp;<input type='text' name='price'>";
 echo "<br><br><br>
  Update availability :<br>
   no. of products:&nbsp&nbsp&nbsp;<input type='text' name='no_products'>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type='submit' value='Update'>";
echo"</form>";



mysql_close($con);
?>
 
</div>
</body>
</html>