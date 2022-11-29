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
        //echo "<td>" . $r[3] . "</td>\n"; //deprecated
        echo "</tr>\n";
    }
}

function db_get_task_data1() {
    require("credentials.php");
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    //the following set of if statements check if an input is empty. input
    //can be empty for 2 reasons: user first enters the site, or user
    //deselects all options within a category. if empty, set the specified
    //filter to show all within that category; this is to prevent errors
    
    //NOTE: above stated else statements deprecated, query is now included
    //with each if statement, so that if the check fails, it will now more
    //dynamically show all within that category by outright skipping
    //that part of the filter. Next line helps accomplish this.
    $cpuseries = $storage_arr = $ram_arr = $OS_arr = $rr_arr = $ratio_arr = 
        $manufacturer_arr = $touch_arr = $rj45_arr = NULL;
    
    //price filter stuff
    $defaultPriceMin = 0;
    $defaultPriceMax = 5000;
    //$prices = $_POST["price_range"]; //deprecated
	if (!empty($_POST["price_range"])){
	    $price_arr = explode("-", $_POST["price_range"]);
	} else {
	    $price_arr[0] = $defaultPriceMin;
	    $price_arr[1] = $defaultPriceMax;
	}
	
	//cpu filter stuff
	if (!empty($_POST["CPUInput"])){
	    $cpuseries = 'AND `Cpu Series` IN (\'' . implode('\',\'', $_POST["CPUInput"]) .'\')';
	} 
	//else { $cpuseries = '(\'AMD Ryzen 3\',\'AMD Ryzen 5\',\'AMD Ryzen 7\',\'AMD Ryzen 9\',
	//           \'Intel Core i3\',\'Intel Core i5\',\'Intel Core i7\',\'Intel Core i9\')'; }
	            
	//storage filter stuff
	if (!empty($_POST["storageInput"])){
        $storage_arr = 'AND `Storage Size (GB)` IN (\'' . implode('\',\'', $_POST["storageInput"]) .'\')';
	} 
	//else { $storage_arr = '(\'128\',\'256\',\'512\',\'1024\',\'2048\')'; }
	
	//ram filter stuff
	if (!empty($_POST["ramInput"])){
	    $ram_arr = 'AND `RAM Size (GB)` IN (\'' . implode('\',\'', $_POST["ramInput"]) .'\')';
	} 
	//else { $ram_arr = '(\'4\',\'8\',\'16\',\'32\')'; }
	
	//OS filter stuff
	if (!empty($_POST["osInput"])){
	    $OS_arr = 'AND OS IN (\'' . implode('\',\'', $_POST["osInput"]) .'\')';
	} 
	//else { $OS_arr = '(\'Windows 10\',\'Windows 11\')'; }
	
	//refresh rate filter
	if (!empty($_POST["refreshInput"])){
	    $rr_arr = 'AND `Refresh Rate` IN (\'' . implode('\',\'', $_POST["refreshInput"]) .'\')';
	} 
	//else { $rr_arr = '(\'60\',\'90\',\'120\',\'144\')'; }
	
	//aspect ratio filter
	if (!empty($_POST["ratioInput"])){
	    $ratio_arr = 'AND `Aspect Ratio` IN (\'' . implode('\',\'', $_POST["ratioInput"]) .'\')';
	} 
	//else { $ratio_arr = '(\'3:2\',\'16:9\',\'16:10\')'; }
	
	//manufacturer filter
	if (!empty($_POST["manufactureInput"])){
	    $manufacturer_arr = 'AND Manufacturer IN (\'' . implode('\',\'', $_POST["manufactureInput"]) .'\')';
	} 
	//else { $manufacturer_arr = '(\'Acer\',\'Samsung\',\'Lenovo\',\'Dell\',\'HP\',\'Microsoft\',\'Asus\')'; }
	
	//touchscreen filter
	if (!empty($_POST["touchInput"])){
	    $touch_arr = 'AND Touchscreen IN (\'' . implode('\',\'', $_POST["touchInput"]) .'\')';
	} 
	//else { $touch_arr = '(\'Yes\',\'No\')'; }
	
	//rj45 filter
	if (!empty($_POST["rj45Input"])){
	    $rj45_arr = 'AND RJ45 IN (\'' . implode('\',\'', $_POST["rj45Input"]) .'\')';
	} 
	//else { $rj45_arr = '(\'Yes\',\'No\')'; }
	
	/* debugging purposes
	echo $cpuseries;
	echo $storage_arr;
	echo $ram_arr;
	echo $OS_arr;
	echo $rr_arr;
	echo $ratio_arr;
	echo $manufacturer_arr;
	echo $touch_arr;
	echo $rj45_arr;
	*/
	
	//grab list
    $query = "SELECT Laptop, `CPU Series`, CPU, Price FROM laptop_list
    WHERE Price BETWEEN $price_arr[0] AND $price_arr[1]
    $cpuseries
    $storage_arr
    $ram_arr
    $OS_arr
    $rr_arr
    $ratio_arr
    $manufacturer_arr
    $touch_arr
    $rj45_arr
    ;";
    //echo $query; //debugging purposes
    
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
