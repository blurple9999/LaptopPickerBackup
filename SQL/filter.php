<?php

function create_task_table1() {
    //  Request for task data
    $tasks = db_get_task_data1();
    // Create table with task data
    foreach ($tasks as $r) {
        echo "<tr>\n";
        echo "<td>" . $r[0] . "</td>\n";
        echo "<td>" . $r[1] . "</td>\n";
        echo "<td>" . $r[2] . "</td>\n";
        //echo "<td>" . $r[3] . "</td>\n";
        echo "</tr>\n";
    }
}

function db_get_task_data1() {
    require("credentials.php");
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    //price filter stuff
	$prices = $_POST["price_range"];
	$price_arr = explode("-", "$prices");
	
	//cpu filter stuff
	$cpuseries = '(\'' . implode('\',\'', $_POST["CPUInput"]) .'\')';
	
    $query = "SELECT Laptop, `CPU Series`, CPU, Price FROM laptop_list WHERE Price BETWEEN $price_arr[0] AND $price_arr[1] AND `Cpu Series` IN $cpuseries;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        $cpu = "$row[1] $row[2]";
        array_push($temp,$row[0],$cpu,$row[3]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

?>
