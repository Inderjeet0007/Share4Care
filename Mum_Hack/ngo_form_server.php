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
header('location: login_ngo.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login_ngo.php");
}

$letter=0;
$letterp=0;
$letterq=0;
//get post value
if(isset($_POST['1']))
{
    $letter =  $_POST['q1']; //get check box value
}
//get post value
if(isset($_POST['2']))
{
    $letterp =  $_POST['q2']; //get check box value
}
//get post value
if(isset($_POST['3']))
{
    $letterq =  $_POST['q3']; //get check box value
}

if (isset($_SESSION['username']))
{
$name=$_SESSION['username'];
}
$query = "INSERT INTO need (name, clothes, stationary, toys) VALUES('$name','$letter','$letterp','$letterq')";

$result= mysqli_query($db, $query);
if($result)
{
echo "Your Need has been registered!";
?><br>
<button onclick="document.location.href='ngo.php'">
BACK
</button>
<?php
}
else
{
echo "Error";

}

?>