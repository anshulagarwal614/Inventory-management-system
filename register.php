<!DOCTYPE html>
<html>
<head>
<title> Login </title>
	<link href="style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body background="bg1.jpg">
<div class="div1">
<img src="" />
	<a href="index.php"> Logout </a>
	<h2> Php Selfwork </h2>


</div>
<div class="div2">
	<h2> Register </h2>
	<span>or<a href="index.php">Login </a></span>
	<form action="register.php" method="post" name="form1">
		<table class="table1">
		<tr>
		<td><b>Username</b></td>  <td><input type="text" name="username" placeholder="Enter Username"><br></td>
		</tr>
		<tr>
		<td><b>Password</b></td>  <td><input type="password" name="password" placeholder="Enter password"><br></td>
		</tr>
		<tr>
		<td><b>Bar code</b></td>  <td><input type="password" name="barcode" placeholder="Scan Barcode" ><br></td>
		</tr>
		</table>
    <input type="submit" value="submit" name="button"><br>
	</form>
</div>
</body>
</html>


<?Php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpproject";
$conn = mysqli_connect($servername,$username,$password);
$dbselect= mysqli_select_db($conn,"$database");

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['barcode'])){
$a=mysqli_real_escape_string($conn,$_POST['username']);
$b=mysqli_real_escape_string($conn,$_POST['password']);
$c=mysqli_real_escape_string($conn,$_POST['barcode']);
$b = md5($b);
$c = md5($c);
$sql= "INSERT INTO login VALUES ('".$a."','".$b."','".$c."');";
$query=mysqli_query($conn,$sql);
if(!$query){
	die('can not register:'.mysqli_error($conn));
}
echo '<div style="color:white;text-align:center">registered successfully<div>';
mysqli_close($conn);
}
?>



