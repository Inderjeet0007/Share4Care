<html>
<head>
</head>
<body>
    <button type="submit" name="FCFS" onclick="document.location.href= 'admin.php'">Button1</button>
    
    
    <?php 
        $username = "";
        $email = "";
        $errors = array();

        // connect to the database
        $db = mysqli_connect('localhost', 'root', '', 'registration');

        //test if connection failed
        if(mysqli_connect_errno()){
        die("connection failed: "
            . mysqli_connect_error()
            . " (" . mysqli_connect_errno()
            . ")");
        }
        //get results from database
        $result = mysqli_query($db,"SELECT * FROM clothes");
        $all_property = array();  //declare an array for saving property

        //showing property
        echo '<table class="data-table">
            <tr class="data-heading">';  //initialize table tag
        
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
    <button name="Need" onclick="document.location.href= 'admin.php'">Supply</button>
    <?php
        $result = mysqli_query($db,"SELECT * FROM clothes");
        $all_property = array();  //declare an array for saving property

        //showing property
        echo '<table class="data-table">
            <tr class="data-heading">';  //initialize table tag
        
        while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';  //get field name for header
        array_push($all_property, $property->name);  //save those to array
        }
        
        echo '</tr>'; //end tr tag
    ?>
    <button name="button2" onclick="document.location.href= 'admin.php'">Need of ngo</button>
    <?php
        $result = mysqli_query($db,"SELECT * FROM clothes");
        $all_property = array();  //declare an array for saving property

        //showing property
        echo '<table class="data-table">
            <tr class="data-heading">';  //initialize table tag
        
        while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';  //get field name for header
        array_push($all_property, $property->name);  //save those to array
        }
        echo '</tr>'; //end tr tag
    ?>
</body>
</html>
