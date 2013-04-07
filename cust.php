
<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("mstore",$con);

$res=mysql_query("select * from customer");

echo "<table border=1><tr><th>ID</th><th>First name</th><th>Last name</th><th>email address</th><th>Model no.</th><th>Booked on</th>
<th>Delivery address</th><th>Contact no.</th><th>Order status</th></tr>"; 
while($r=mysql_fetch_array($res))
{
echo"<tr><td>".$r['id']."</td><td>".$r['fname']."</td><td>".$r['lname']."</td><td>".$r['email']."</td><td>".$r['model']."</td><td>".
$r['dob']."</td><td>".$r['address']."</td><td>".$r['phno']."</td><td>".$r['order_status']."</td><td><a href='process_order.php?id=".$r['id']."'>Process</a><br></td></tr>";
}
?>