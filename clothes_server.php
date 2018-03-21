<<<<<<< HEAD
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
$age= $_POST['age'];
$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO clothes (Quantity, Gender, Age_Group, username) VALUES('$quantity', '$gender', '$age', '$name')";
print_r($age);
$result= mysqli_query($db, $query);
if($result)
{
echo "Success";

}
else
{
echo "Error";

}
?>
=======
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


print_r($age);
$fields = "";
$values = "";

foreach($age as $a)
{
	$fields.=$a.",";
	$values.="1,";
}
$fields = rtrim($fields,",");

$values = rtrim($values,",");
echo "$fields";
echo "$values";

if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO clothes (Quantity, Gender, username,".$fields.") VALUES('$quantity', '$gender','$name', ".$values.")";
echo $query;

$result= mysqli_query($db, $query);
if($result)
{
echo "Success";

}
else
{
echo "Error";

}
?>
>>>>>>> a99be5c1905b5bc1f3ea837e466e938258eb2e44
