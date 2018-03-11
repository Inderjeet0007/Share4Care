<?php

    // initializing variables
    $username = "";
    $email = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'root', '', 'registration');

    $query = $db->query("SELECT `age` FROM `clothes`;");
    $array = Array();
    while($result = $query->fetch_assoc()){
    $array[] = $result['age'];
    }

    print_r($array);
    $fields = "";
    $values = "";
    foreach($array as $a)
    {
        $fields.=$a.",";
        $values.="1,";
    }
    $fields = rtrim($fields,",");

    print_r($fields);
    print_r($array);
    
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

