
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
	<h2> Login </h2>
	<form action="register.php" method="post">
	or<input type="submit" value="register" name="button1" style="font-family: 'Comfortaa', cursive; background-color:transparent;border:none; color:white;" >
	</form>
	<form action="index.php" method="post" name="form1">
		<table class="table1">
		<tr>
		<td><b>Username</b></td>  <td><input type="text" name="username" placeholder="Enter Username" ><br></td>
		</tr>
		<tr>
		<td><b>Password</b></td>  <td><input type="password" name="password" placeholder="Enter Password" ><br></td>
		</tr>
		<tr>
		<td><b>Bar code</b></td>  <td><input type="password" name="barcode" placeholder="Scan barcode"><br></td>
		</tr>
		</table>
    <input type="submit" value="submit" name="button2"><br>
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
$sql= "SELECT username from login WHERE username='$a'and password='$b'and barcode='$c'";
$result=mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);

if($count==0){
	die('<div style="color:white;text-align:center">Could not login<div>'.mysqli_error($conn));
}
#echo '<a href="purchase.php" style="color:white;text-align:center">Welcome</a>';
	header("location: purchase.php");
mysqli_close($conn);
}
?>
