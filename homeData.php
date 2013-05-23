<?php

	$m = new MongoClient();
	$db = $m -> qandm;
	$collection = $db -> movieData;
	
	$userName = $_POST['userName'];	
		
   	$findUser = array("Username"=> $userName);

  	$cursor = $collection -> find($findUser);
  	
  	
	foreach($cursor as $doc) {
		$rating = $doc["Rating"];
		$movie = $doc["Movie"];	
		echo '<div value="beans" style="background-color:rgba(';
		if($rating == 5){
			echo "158, 31, 99, 255";
		}
		else if($rating == 4){
			echo "102, 45, 145, 255";
		}
		else if($rating == 3){
			echo "28, 117, 188, 255";
		}
		else if($rating == 2){
			echo "0, 184, 157, 255";
		}
		else if($rating == 1){
			echo "141, 198, 63, 255";
		}
		else{
			echo "255, 255, 255, .5";
		}	
		echo ');"><center>';
		echo $movie;
		echo '</center></div>';
	}


  	?>