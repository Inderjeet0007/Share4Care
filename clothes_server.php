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
$gender =$_POST['gender'];
$age=$_POST['age'];

$quantity= $_POST['quantity'];

$fields = "";
$values = "";

foreach($age as $a)
{
	$fields.=$a.",";
	$values.="1,";
}
$fields = rtrim($fields,",");

$values = rtrim($values,",");

if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO clothes (Quantity, Gender, username,".$fields.") VALUES('$quantity', '$gender','$name', ".$values.")";


$result= mysqli_query($db, $query);
if($result)
{
echo "Thank You for donating !!";

}
else
{
echo "Error";

}
?>
<style>

button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<br>
<button onclick="document.location.href='homepage.php'">
BACK
</button>
