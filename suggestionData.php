<?php

	$m = new MongoClient();
	$db = $m -> qandm;
	$collection = $db -> suggestionData;
	
	$userName = $_POST['userName'];	
		
   	$findUser = array("Username"=> $userName);

  	$cursor = $collection -> find($findUser);
  	
	foreach($cursor as $doc) {
		$suggestion = $doc["Suggestion"];
		$strength = $doc["Strength"];	
		
		echo '<div style="background-color:rgba(';
		if($strength == 3){
			echo "217, 201, 0, 255";
		}
		else if($strength == 2){
			echo "193, 98, 33, 255";
		}	
		else if($strength == 1){
			echo "199, 30, 104, 255";
		}
		echo ');"><center>';
		echo $suggestion;
		echo '</center></div>';
	}


  	?>