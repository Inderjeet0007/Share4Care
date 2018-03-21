<style>
body{
 margin-top: -200px;
}
.data-table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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

    // initializing variables
    $username = "";
    $email = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'root', '', 'share4care');

    $query1 = $db->query("SELECT `clothes` FROM `need`;");
        $array1 = Array();
        while($result = $query1->fetch_assoc()){
        $array1[] = $result['clothes'];
        }
    $query2 = $db->query("SELECT `toys` FROM `need`;");
        $array2 = Array();
        while($result = $query2->fetch_assoc()){
        $array2[] = $result['toys'];
        }
    $query3 = $db->query("SELECT `stationary` FROM `need`;");
        $array3 = Array();
        while($result = $query3->fetch_assoc()){
        $array3[] = $result['stationary'];
    }
    #query4 for timestamp
    $query4 = $db->query("SELECT `Timestamp` FROM `need`;");
        $array4 = Array();
        while($result = $query4->fetch_assoc()){
        $array4[] = $result['Timestamp'];
    }
    

    $fields1 = "";
    $fields2 = "";
    $fields3 = "";
    $fields4 = "";
	

    foreach($array1 as $a)
    {
        $fields1.=$a.",";
    }
    $fields1 = rtrim($fields1,",");

    foreach($array2 as $a)
    {
        $fields2.=$a.",";
    }
    $fields2 = rtrim($fields2,",");

    foreach($array3 as $a)
    {
        $fields3.=$a.",";
    }
    $fields3 = rtrim($fields3,",");

    foreach($array4 as $a)
    {
        $fields4.=$a.",";
    }
    $fields4 = rtrim($fields4,",");
	
	#clothes
	$q2 = $db->query("SELECT `Quantity` FROM `clothes`;");
	$array5 = Array();
	while($result = $q2->fetch_assoc()){
	$array5[] = $result['Quantity'];
	}
	$clothes=array_sum($array5);
	#echo array_sum($array5);

	#toys
	$q3 = $db->query("SELECT `Quantity` FROM `toys`;");
	$array6 = Array();
	while($result = $q3->fetch_assoc()){
	$array6[] = $result['Quantity'];
	}
	$toys=array_sum($array6);
	#echo array_sum($array6);

	#stationary
	$q4 = $db->query("SELECT `Quantity` FROM `stationary`;");
	$array7 = Array();
	while($result = $q4->fetch_assoc()){
	$array7[] = $result['Quantity'];
	}	
	$stationary=array_sum($array2);
	#echo array_sum($array2);
	
    $clength = count($fields2);
    #print_r($clength);
    #FCFS
	
    $index = 0;
    #clothes
	
	$clength = count($array2);
    #print_r($clength);
    for($x = 0; $x < $clength; $x++) {
    if($clothes>=$array2[$x])
		{
			#update supply and demand
			$clothes = $clothes - $array2[$x];
			$array2[$x] = 0;
			$index2 = $x;    
		}
    }
    #toys
    for($x = 0; $x < $clength; $x++) {
        if($toys>=$array3[$x])
        {
            $toys = $toys - $array3[$x];
			$array3[$x] = 0;
			$index3 = $x; 
        }
    }
    #books
    for($x = 0; $x < $clength; $x++) {
        if($stationary>=$array4[$x])
        {
            #update supply and demand
			$stationary = $stationary - $array4[$x];
			$array4[$x] = 0;
			$index4 = $x; 
        }
    }
   
	$clength = count($array2);
 
//get results from database
$result = mysqli_query($db,"SELECT * FROM need");
$all_property = array();  //declare an array for saving property
	
//showing property
echo '<table class="data-table" align="center" style="margin-top:20%;">'; //initialize table tag
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

echo "Total Donation<br>";

echo '<table class="data-table" align="center" >'; //initialize table tag
	echo "<tr>";
		echo '<td>' .'clothes'. '</td>';
		echo '<td>' .$clothes. '</td>';
	echo "</tr>";	
	
	echo "<tr>";
		echo '<td>' .'Toys'. '</td>';
		echo '<td>' .$toys. '</td>';
	echo "</tr>";
	echo "<tr>";
		echo '<td>' .'Stationary'. '</td>';
		echo '<td>' .$stationary. '</td>';
	echo "</tr>";
echo "</table>";
	
?>
<br>
<button onclick="document.location.href='index1.php'">
BACK
</button>
