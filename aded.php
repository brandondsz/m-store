<html>
<head>
<title>aded</title>
</head>

<body>
<div style="position:relative;width:200;height:100;border: 3 solid green;font-size:20;font-color:red">
<?php

$con=mysql_connect('localhost','root','');

mysql_select_db('mstore',$con);
$t=mysql_query("insert into login values ('$_POST[entr]','$_POST[entr2]')");
if($t)
echo "inserted<br>";
else echo "not<br>";
$t=mysql_query('select * from login ');

while($r=mysql_fetch_array($t))
{
echo $r[user]."has ".$r[password];
}

mysql_close($con);

?>
</div>
</body>
</html>
