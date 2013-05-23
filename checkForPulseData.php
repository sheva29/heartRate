<?php
	$m = new MongoClient();
	$db = $m -> qandm;
	$collection = $db -> pulseData;
	
	$userName = $_REQUEST['userName'];
	$startTime = intval($_REQUEST['startTimeVal']);
/* 	$endTime = $startTime+60; */

	$findUserTime = array("Username"=> $userName, "Time"=> array('$gt' => $startTime));
  	$cursor = $collection -> find($findUserTime);
  	
  	if($cursor->count(true)> 0) echo json_encode(array('result'=>true));
  	else echo json_encode(array('result'=>false));

  	
/*
  	echo $userName;
  	echo $startTime;
*/
  	
/*
  	foreach($cursor as $doc) {
  		echo "true";
  	}
*/
?>
