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
    
    print_r($array1);
    print_r($array2);
    print_r($array3);
    print_r($array4);
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
    print_r($fields1);
    print_r($fields2);
    print_r($fields3);
    print_r($fields4);

	$q3 = 'Select SUM(Quantity) FROM clothes';
	$db->query('$q3');
	echo "dafsgfdff";
	print_r($db);
	
	$array3 = Array();
	while($result = $q3->fetch_assoc()){
	$array3[] = $result['Quantity'];
	}
	print_r($array3);

    $cars = array('9999-12-31 23:59:59','9998-12-31 23:59:59');
    $cs = array(7,6);
    $bs = array(7,6);
    $ts = array(7,6);
    $c = 8;
    $t = 8;
    $book = 2;
    $clength = count($cars);
    #FCFS

    echo "initial supply  ";
    print($c);
    echo "initial demand :";
    print(min($cs));
    #logic for updating
    $index = 0;
    #clothes
    for($x = 0; $x < $clength; $x++) {
    if($c>=$cs[$x])
    {
        #update supply and demand
        $c = $c - $cs[$x];
        $cs[$x] = 0;
        $index = $x; 
        
    }
    }
    #toys
    for($x = 0; $x < $clength; $x++) {
        if($t>=$ts[$x])
        {
            #update supply and demand
        }
    }
    #books
    for($x = 0; $x < $clength; $x++) {
        if($t>=$ts[$x])
        {
            #update supply and demand
        }
    }
    echo "final values supply ";
    print($c);
    print("need ".$cs[$index]);
    #header("Location: final.php");
?>