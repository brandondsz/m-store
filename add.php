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
&nbsp;<a href="update.php"> Update product </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="view_cust.php">  View orders  </a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="delete.php">  Delete product  </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="home.php">Logout </a>
</div>
</div>

<div class=center style="width:1000;height:800;">
<div class=heading> Add new </div>
<hr>
<div class="lefts" style="width:300;height:550;position:relative;top:50;">
<form action="added.php" method="post">
Mobile info<hr>
Model: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="model"><br>
Brand:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<select name="brand">
<option value="samsung">Samsung</option>
<option value="htc">htc</option>
<option value="nokia">Nokia</option>
<option value="motorola">Motorola</option>
<option value="blackberry">Blackberry</option>
<option value="sony">Sony</option>
</select><br>
Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="name"><br>
OS: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="os"><BR>
Processor: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="processor"><br>
RAM: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="ram"><br>
Internal memory: &nbsp&nbsp;<input type="text" name="intrnl_m"><br>
External memory: &nbsp&nbsp;<input type="text" name="extrnl_m"><br>
Screen size: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="scrn_size"><br>
Screen resolution: &nbsp&nbsp;<input type="text" name="scrn_res"><br>
Camera:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <input type="text" name="camera"><br>
Body type: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="bdy_type"><br>
GPS: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="gps"><br>
Bluetooth: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="bluetooth"><br>
WIFI: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="wifi"><br>
Price: Rs&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <input type="text" name="price"><br>
Image location: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="image"><br>
Special Features: &nbsp&nbsp;<input type="text" name="features"><br></div>

<div class="rights" style="width:300;height:300;position:absolute;left:500;top:150;" >
Availability<hr>
Days for delivery : <input type="text" name="no_days"><br>
No. of products : <input type="text" name="no_products">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="submit" >

</div>

</form>



</div>