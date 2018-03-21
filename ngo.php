<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login_ngo.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login_ngo.php");
}
?>
<!DOCTYPE html>
<html>
<style>
* {

  margin: 0px;

  padding: 5px;
  
}

body {

  font-size: 120%;

  background: #F8F8FF;

}




form,.box{

  width: 30%;

  margin: 0px auto;

  padding: 20px;

  border: 1px solid #B0C4DE;

  background: white;

  border-radius: 0px 0px 10px 10px;
    
}

.input-group {

  margin: 10px 0px 10px 0px;
border-radius:20px;
}


.input-group input {

  height: 30px;

  width: 93%;

  padding: 5px 10px;

  font-size: 16px;

  border-radius: 5px;

  border: 1px solid gray;

}

.box input[type="submit"]
{
    border:none;
    outline:none;
    height:40px;
    background:#B0C4DE;
    color:black;
    width:100%;
    font-size:18px;
    border-radius:20px;
    
}

.some{
	float: right;
}
</style>
<body>
<?php if (isset($_SESSION['username'])) : ?>
	<div class="some">
    <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="login_admin.php?logout='1'" style="color: red;">logout</a> </p></div>
<?php endif ?>

<script type="text/javascript">
    function EnableDisableTextBox(chkPassport) {
        var txtPassportNumber = document.getElementById("txtPassportNumber");
        txtPassportNumber.disabled = chkPassport.checked ? false : true;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        }
    }
</script>
<script type="text/javascript">
    function EnableDisableTextBox1(chkPassport1) {
        var txtPassportNumber1 = document.getElementById("txtPassportNumber1");
        txtPassportNumber1.disabled = chkPassport1.checked ? false : true;
        if (!txtPassportNumber1.disabled) {
            txtPassportNumber1.focus();
        }
    }
</script>
<script type="text/javascript">
    function EnableDisableTextBox2(chkPassport2) {
        var txtPassportNumber2 = document.getElementById("txtPassportNumber2");
        txtPassportNumber2.disabled = chkPassport2.checked ? false : true;
        if (!txtPassportNumber2.disabled) {
            txtPassportNumber2.focus();
        }
    }
</script>
<script type="text/javascript">
    function EnableDisableTextBox3(chkPassport3) {
        var txtPassportNumber3 = document.getElementById("txtPassportNumber3");
        txtPassportNumber3.disabled = chkPassport3.checked ? false : true;
        if (!txtPassportNumber3.disabled) {
            txtPassportNumber3.focus();
        }
    }
</script>

<br>
<form method="POST" action="ngo_form_server.php">
<label for="chkPassport">
    <input type="checkbox" id="chkPassport1" name="1" onclick="EnableDisableTextBox1(this)" />
    Clothes
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber1" name="q1" disabled="disabled" />
<br><br>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport2" name="2" onclick="EnableDisableTextBox2(this)" />
    Toys
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber2" name="q2" disabled="disabled" />
<br><br>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport3" name="3" onclick="EnableDisableTextBox3(this)" />
    Stationary
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber3" name="q3" disabled="disabled" /><br><br>
<input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>