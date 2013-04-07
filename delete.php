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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="update.php">  Update product </a>
       
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>
<div class="center">
<form action="delete1.php" method="post">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$re=mysql_query("select * from avail");

echo "<div class='heading'>Please select the model no. of product to be deleted  </div><hr><BR><BR> Model No.: <select name='model'>";
while($row=mysql_fetch_array($re))
{
echo "<option value=".$row['model'].">".$row['model']."</option>";
}
echo "<input type='submit' value='Select'>";

mysql_close($con);
?>
</form>
</body>
</html>