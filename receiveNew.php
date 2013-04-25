<?php
	$connection = new MongoClient();
	$db = $connection -> qandm;
	$collection = $db -> pulseData;
	
	$pulse = $_POST["body"];
	$pulseObj = json_decode($pulse, true);
 
	$userName = $pulseObj["triggering_datastream"]["id"];
	$mongoTime = new MongoDate(strtotime("now"));
	$time = strtotime("now");
	$pulseValue = $pulseObj["triggering_datastream"]["value"]["value"];
	
		
	$json = array("Username" => $userName, "mongoTime" => $mongoTime, "Time" => $time, "Pulse" => $pulseValue);
	$collection -> insert($json);
?>

