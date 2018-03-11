<?php


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
?>

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
<label for="chkPassport">
    <input type="checkbox" id="chkPassport1" onclick="EnableDisableTextBox1(this)" />
    Clothes
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber1" disabled="disabled" />
<br>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport2" onclick="EnableDisableTextBox2(this)" />
    Toys
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber2" disabled="disabled" />
<br>
<label for="chkPassport">
    <input type="checkbox" id="chkPassport3" onclick="EnableDisableTextBox3(this)" />
    Stationary
</label>
<br />
Quantity:
<input type="text" id="txtPassportNumber3" disabled="disabled" />
