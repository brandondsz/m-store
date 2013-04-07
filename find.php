<!DOCTYPE>
<html>
<head>
<title> m-store</title>
<link rel="stylesheet"type="text/css"href="style.css" />
</head>
<body background="black.jpg">
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:800;">
&nbsp;<a href="home.php"> Home  </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find phone   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>
<div class='center'>
<div class='heading'>Select options according to your choice</div>
<hr><br>

<form action="search_r.php" method="post">
Price range:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;From:
<select name="fr">
<option value="0"> 0</option>
<option value="10000" >10000</option>
<option value="20000" >20000</option>
<option value="30000">30000</option>
</select>
&nbsp&nbsp;To:
<select name="to">
<option value="0"> 0</option>
<option value="10000"> 10000</option>
<option value="20000"> 20000</option>
<option value="30000"> 30000</option>
<option value="40000"> 40000</option>
</select>
<br><br>
OS:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$r=mysql_query("select * from features");

echo"<select name='ops'>";
$t=array();
while($row=mysql_fetch_array($r))
{
if(in_array($row['os'],$t))
{}
else
{
array_push($t,$row['os']);
echo "<option value=".$row['os'].">".$row['os']."</option>";
}
}
echo"</select><br><br>";


//&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
echo"<input type='submit'/>";

echo"</form>";


?>




</div>
</html>