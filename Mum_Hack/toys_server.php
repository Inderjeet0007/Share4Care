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

$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO toys (username, Quantity) VALUES('$name', '$quantity')";

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

$quantity= $_POST['quantity'];
if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO toys (username, Quantity) VALUES('$name', '$quantity')";

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
<br>
<button onclick="document.location.href='homepage.php'">
BACK
</button>


>>>>>>> 83ade076b3b32c65cbf45af3270da04e56b60dc2
