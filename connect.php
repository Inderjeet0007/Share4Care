<style>
.data-table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 25px;
}

.data-table td, th {
    border: 1px solid #ddd;
    padding: 8px;
}


.data-table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<?php

// initializing variables
$username = "";
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'share4care');

//test if connection failed
if(mysqli_connect_errno()){
   die("connection failed: "
       . mysqli_connect_error()
       . " (" . mysqli_connect_errno()
       . ")");
}


$cloth_count = Select SUM(quantity) FROM clothes;
$toy_count = Select SUM(quantity) FROM toys;
$st_count = Select SUM(quantity) FROM stationary;

// updating table
UPDATE result SET supply=$cloth_count WHERE product='clothes';
UPDATE result SET supply=$st_count WHERE product='stationary';
UPDATE result SET supply=$toy_count WHERE product='toys';
<?php

//get results from database
$result = mysqli_query($db,"SELECT * FROM result");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table" align="center" style="margin-top:20%;">'  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
   echo '<td>' . $property->name . '</td>';  //get field name for header
   array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   foreach ($all_property as $item) {
       echo '<td>' . $row[$item] . '</td>'; //get items using property value
   }
   echo '</tr>';
}
echo "</table>";

?>