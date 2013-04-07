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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="update.php">Update another</a>     
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>
<div class="center">
<?php
$n=$_POST['no_products'];
$p=$_POST['price'];
$mo=$_GET['mo'];

$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);

echo"<div class='heading'>";

if($p!=""&&is_numeric($p))
{echo "<br>New price updated";
$res=mysql_query("update features set price='".$p."' where model='".$mo."'");
}

if($n!=""&&is_numeric($n))
{echo "<br>No. of products updated";
$re1=mysql_query("update avail set no_products='".$n."' where model='".$mo."'");
}
if(!is_numeric($p)&&$p!="")
{echo "<br>Invalid price entry...Try again.";
}
if(!is_numeric($n)&&$n!="")
{echo "<br>Invalid no. of products entry...Try again.";
}
if($p==""&&$n=="")
{
echo"<br>Nothing updated.";}
echo "</div>";
mysql_close($con);


?>
</div>
</body>
</html>
