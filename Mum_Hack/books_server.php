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
foreach($age as $age1) {
 $items[] = $age1;
 
}

print_r($items[1]);
$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO clothes (Quantity, Gender, Age_Group, username) VALUES('$quantity', '$gender', '$items', '$name')";

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

$book = $_POST['book'];
$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO stationary (username, Type, Quantity) VALUES('$name', '$book', '$quantity')";

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
