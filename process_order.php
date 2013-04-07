
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
//$m=$_GET[m];
$id=$_GET[id];
$t=mysql_query("select * from customer where id='".$id."'");
$tt=mysql_fetch_array($t);
$m=$tt['model'];
$re=mysql_query("select * from avail where model ='".$m."'");
$tt=mysql_fetch_array($re);
echo "Model no. ".$m."<br>Remaining products : ".$tt['no_products']." <br>To be delivered whithin ".$tt['no_days'];
echo"<form action='processed.php?id=".$id."' method='post'><BR>Status : <select name='st'>
<option value='Pending' >Pending</option>
<option value='Delivered'>Delivered</option>
</select>";
echo"<input type='submit' value='Process'></form>";



mysql_close($con);
?>
 
