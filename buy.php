<!DOCTYPE>
<html>
<head> 
<title> m-store</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>

<body background="black.jpg" behaviour="fixed">
<div style="font-size:40;position:absolute;left:100;"><a href="home.php"><span style="color:greenyellow;">m-store</span></a></div>

<div class="bar">
<div style="position:absolute;left:700;">
&nbsp;<a href="home.php">Home</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="find.php">  Find phone   </a>        
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="login.php">Login </a>
</div>
</div>

<div class=center>
<div class=heading> Please enter your details</div> <hr>
<?php
$md=$_GET['md'];
echo "Your product model : ".$md;

echo "<form action='bought.php?md=".$md."' method='post'>";
echo "<br>First name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type='text' name='firstname'><br>";
echo "Last name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type='text' name='lastname'><br>";
echo "Email id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type='text' name='email'><br>";
echo "Delivery address:&nbsp&nbsp&nbsp;<input type='text' name='addr'><br>";
echo "Contact no.:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type='text' name='phno'><br>";

echo "<input type='submit'><br>";
echo "</form>";
?>
</div>
</body>
</html>