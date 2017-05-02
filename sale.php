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
	<a href="stock.php"> Stock </a>
	<a href="sale.php"> Sale </a>
	<a href="purchase.php"> Purchase </a>

</div>
<div class="div3">
	<h2> Sale </h2>
	<form action="sale.php" method="post" name="form1">
		<table class="table1">
		<tr>
		<td><b>Customer Name</b></td>  <td><input type="text" name="c_name" placeholder="Enter customer's name"><br></td>
		</tr>
		<tr>
		<td><b>Phone Number</b></td>  <td><input type="text" name="p_number" placeholder="Enter phone number"><br></td>
		</tr>
		<tr>
		<td><b>Item Name</b></td>  <td><input type="text" name="i_name" placeholder="Enter item name"><br></td>
		</tr>
		<tr>
		<td><b>Quantity</b></td>  <td><input type="text" name="quantity" placeholder="quantity"><br></td>
		</tr>
		<tr>
		<td><b>Selling price</b></td>  <td><input type="text" name="s_price" placeholder="Enter selling price"><br></td>
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

if(!empty($_POST['c_name']) && !empty($_POST['p_number']) && !empty($_POST['i_name']) && !empty($_POST['quantity']) && !empty($_POST['s_price'])){
$a=mysqli_real_escape_string($conn,$_POST['c_name']);
$b=mysqli_real_escape_string($conn,$_POST['p_number']);
$c=mysqli_real_escape_string($conn,$_POST['i_name']);
$d=mysqli_real_escape_string($conn,$_POST['quantity']);
$e=mysqli_real_escape_string($conn,$_POST['s_price']);
$sql= "INSERT INTO sale VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."');";
$query=mysqli_query($conn,$sql);
if(!$query){
	die('could not register:'.mysqli_error($conn));
}
echo '<div style="color:white;text-align:center">Data entered successfully<div>';
mysqli_close($conn);
}
?>