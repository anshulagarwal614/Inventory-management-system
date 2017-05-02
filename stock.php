<?Php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpproject";
$conn = mysqli_connect($servername,$username,$password);
$dbselect= mysqli_select_db($conn,"$database");

if(!empty($_POST['i_name'])){ 
$a = $_POST['i_name'];
//$sql = "SELECT purchase.item_name,purchase.quantity FROM purchase INNER JOIN sale on sale.item_name = purchase.item_name WHERE(purchase.item_name = '".$a."')" ;
$sql = "SELECT Quantity from purchase WHERE item_name like '".$a."' ";
$sql2 = "SELECT Quantity from sale WHERE item_name like '".$a."' ";
	$query1 = mysqli_query($conn,$sql);
	$query2 = mysqli_query($conn,$sql2);
//if(!$query1){
	//('<div style="color:white;text-align:center">Error while searching <div>'.mysqli_error($conn));
	//}
//echo '<div style="color:white;text-align:center">Search successfully<div>';
$row1 = mysqli_fetch_row($query1);
$r1 = $row1[0];

$row2 = mysqli_fetch_row($query2);
$r2 = $row2[0];

$r3 = $r1 - $r2;
mysqli_close($conn);
}
?>
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
	<h2> Stock </h2>
	<form action="stock.php" method="post" name="form1">
		<table class="table1">
		<tr>
		<td><b>Item Name</b></td>  <td><input type="text" name="i_name" placeholder="Enter Item name" value=<?Php echo @$a; ?>><br></td>
		</tr>
		<tr>
		<td><b>Quantity Purchased</b></td>  <td><input type="text" name="q_purchased" placeholder="Quantity in Stock" value=<?Php echo @$r1; ?>><br></td>
		
		</tr>
		<tr>
		<td><b>Quantity sold</b></td>  <td><input type="text" name="q_sold" placeholder="Selling Price" value=<?Php echo @$r2; ?>><br></td>
		</tr>
		<tr>
		<td><b>Quantity In Stock</b></td>  <td><input type="text" name="q_stock" placeholder="Quantity In Stock"value=<?Php echo @$r3; ?>><br></td>
		</tr>
		</table>
    <input type="submit" value="submit" name="button"><br>
	</form>
</div>
</body>
</html>

