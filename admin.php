<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css" href="style.css"/>
</head>

<body background="black.jpg" behaviour="fixed" >
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$res=mysql_query("select * from login where user='".$_POST['user']."'and password='".$_POST['pswrd']."'");
$nr=mysql_num_rows($res);
if($nr==1)
{
echo "<div class='bar'>
<div style='position:absolute;left:600;'><a href='add.php'>Add new product</a>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href='update.php'>Update product</a>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href='delete.php'>Delete product</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href='view_cust.php'>  View Orders   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href='home.php'>Logout </a>
</div>
</div>
<div class=center style='height:500'>";
echo"<div class='heading'>Welcome ".$_POST[user]."<hr>";
$t=mysql_query("select count(*) as c from customer where order_status='Not processed'");
$tt=mysql_fetch_array($t);

if($tt['c']!=0)
{echo "You have ".$tt['c']." unprocessed orders!</div>";
}


echo"</div>";}
else 
{echo "Invalid Username,Password.<br>Try again.";}


?>
</body>
</html>


