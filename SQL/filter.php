<?php

function create_task_table() {
    //  Request for task data
    $tasks = db_get_task_data();
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

function db_get_task_data() {
    require("credentials.php");
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    //price filter stuff
    $prices = $_POST["price_range"];
	$price_arr = explode("-", "$prices");
	
	//cpu filter stuff
	$cpuseries = '(\'' . implode('\',\'', $_POST["CPUInput"]) .'\')';
	
	//storage filter stuff
    $storage_arr = '(\'' . implode('\',\'', $_POST["storageInput"]) .'\')';
	
	//ram filter stuff
	$ram_arr = '(\'' . implode('\',\'', $_POST["ramInput"]) .'\')';
	
	//OS filter stuff
	$OS_arr = '(\'' . implode('\',\'', $_POST["osInput"]) .'\')';
	
	//refresh rate filter
	$rr_arr = '(\'' . implode('\',\'', $_POST["refreshInput"]) .'\')';
	
	//aspect ratio filter
	$ratio_arr = '(\'' . implode('\',\'', $_POST["ratioInput"]) .'\')';
	
	//manufacturer filter
	$manufacturer_arr = '(\'' . implode('\',\'', $_POST["manufactureInput"]) .'\')';
	
	//touchscreen filter
	$touch_arr = '(\'' . implode('\',\'', $_POST["touchInput"]) .'\')';
	
	//rj45 filter
	$rj45_arr = '(\'' . implode('\',\'', $_POST["rj45Input"]) .'\')';
	
	//grab list
    $query = "SELECT Laptop, `CPU Series`, CPU, Price FROM laptop_list
    WHERE Price BETWEEN $price_arr[0] AND $price_arr[1]
    AND `Cpu Series` IN $cpuseries
    AND `Storage Size (GB)` IN $storage_arr
    AND `RAM Size (GB)` IN $ram_arr
    AND OS IN $OS_arr
    AND `Refresh Rate` IN $rr_arr
    AND `Aspect Ratio` IN $ratio_arr
    AND Manufacturer IN $manufacturer_arr
    AND Touchscreen IN $touch_arr
    AND RJ45 IN $rj45_arr
    ;";
    
    //push result to create_task_table()
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
