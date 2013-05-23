<?php
	$m = new MongoClient();
	$db = $m -> qandm;
	$pulseCollection = $db -> pulseData;
	$movieCollection = $db -> movieData;
	

	$person1 = $_POST['userNameVal'];	
	$movie = $_POST['movieVal'];
	
	$findMovieUser = array("Username"=> $person1, "Movie" => $movie);
	

	$cursor = $movieCollection -> find($findMovieUser);
	foreach($cursor as $doc) {
	 	$start1 = intval($doc["startTime"]);
	 	$end1 = intval($doc["endTime"]); 
	 }

	  	
   	$findTimeUser1 = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1) );

/*   	$findMin = array("Username"=> $person1, "Time"=> array('$gt' => $start1, '$lte' => $end1), "Pulse" => array() ); */
  	

  	$cursor = $pulseCollection -> find($findTimeUser1);
  	
	echo '<svg id="graph1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1400px" height="200px" > <polyline fill="none" stroke="rgb(0,184,157)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1" points="' ;
	
	foreach($cursor as $doc) {
		$movieTime = $doc["Time"] - $start1;
		$movieTime *= .9;
		echo $movieTime;
		echo ",";
		$pulseValue = $doc["Pulse"]*1.5 - 0;
		echo $pulseValue;
		echo " ";		
	}
	
	echo '"/></svg>';
	
	echo '<center><p id="data">
			<span class="dataType">Average: <span style="color:rgb(28, 117, 188);">65</span> bpm</span>
			<span class="dataType">Min: <span style="color:rgb(102, 45, 145);">60</span> bpm</span>
			<span class="dataType">Max: <span style="color:rgb(199, 30, 104);">90</span> bpm</span>
		</p><center>';


  	?>