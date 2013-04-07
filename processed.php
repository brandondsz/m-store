
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);
$id=$_GET['id'];
$r=mysql_query("update customer set order_status='".$_POST['st']."' where id='".$id."'");
echo"<div class='heading'>Order status updated.</div><hr>";

mysql_close($con);
?>
 
