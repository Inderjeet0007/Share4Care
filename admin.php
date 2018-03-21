<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login_admin.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login_admin.php");
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


<!DOCTYPE html>
<html>
<body>

<br>
<button onclick="document.location.href='mail.php'">
SEND ACKNOWLEDGMENT MAIL
</button>


</body>
</html>