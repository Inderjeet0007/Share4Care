<?php 
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'share4care');

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login.php");
}

$book = $_POST['book'];

$fields = "";
$values = "";

foreach($book as $a)
{
	$fields.=$a.",";
	$values.="1,";
}

$fields = rtrim($fields,",");
$values = rtrim($values,",");

$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO stationary (username, Quantity, ".$fields.") VALUES('$name','$quantity', ".$values.")";

$result= mysqli_query($db, $query);
if($result)
{
echo "Thank you for donating!!";
}
else
{
echo "Error";

}
?>
<br>
<button onclick="document.location.href='homepage.php'">
BACK
</button>

