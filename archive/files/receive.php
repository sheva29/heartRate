<?php
	//make a container to recieve the info 
	$pulse = $_POST["body"];
/* 	echo $pulse; */
	//create a file
	$pulseObj = json_decode($pulse, true);
	
	 
	$userName = $pulseObj["triggering_datastream"]["id"];
	$time = $pulseObj["triggering_datastream"]["at"];
	$pulseValue = $pulseObj["triggering_datastream"]["value"]["value"];

	$file = fopen("rawData.txt", "a+"); //open a file called data.txt.  a+ give option to read and write and writes everything at the end of the file
	$pulse.="\r\n";
	fwrite($file, $pulse); // takes incoming data and writes it to our file
	fclose($file);

	$string = $userName." ".$time." ".$pulseValue." \r\n";
	//error_log($string);

	$file2 = fopen("niceFormatData.txt", "a+");
	fwrite($file2, $string); // takes incoming data and writes it to our file
	fclose($file2);
	
	$file3 = fopen("timeOnly.txt", "a+");
	$string = $time."\r";
	fwrite($file3, $string); // takes incoming data and writes it to our file
	fclose($file3);

	$file4 = fopen("pulseOnly.txt", "a+");
	$string = $pulseValue."\r";
	fwrite($file4, $string); // takes incoming data and writes it to our file
	fclose($file4);
	
	$jsonFormat = array("userName" => $userName, "time" => $time, "pulseValue" => $pulseValue);
	
	$fileJSON = fopen("filejsonobject.json", "a+");
	fwrite($fileJSON, json_encode($jsonFormat));
	fclose($fileJSON);
?>

