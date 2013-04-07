<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:650;">
&nbsp;<a href="add.php"> Add product  </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="delete.php">  Delete product  </a>

	   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>
<div class="center" style="">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$re=mysql_query("select * from avail");
echo "<form action='update1.php' method='post'>";
echo"<div class='heading'>Please select the model no. of product to be updated<hr><br><br></div>";
echo"Model No. :&nbsp&nbsp&nbsp&nbsp&nbsp;";
echo"<select name='model'>";
while($row=mysql_fetch_array($re))
{

echo"<option value=".$row['model'].">".$row['model']."</option>";

}
echo"</select>";

 echo" <input type='submit' value='select'>";
mysql_close($con);
?>
 
</div>
</body>
</html>