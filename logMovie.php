<?php
	$connection = new MongoClient();
	$db = $connection -> qandm;
	$collection = $db -> movieData;
	
	$userName = $_POST['userNameVal'];  
	$movie = $_POST['movieVal'];
	$rating = $_POST['ratingVal'];
	$startTime = $_POST['startTimeVal'];
 	$endTime = $_POST['endTimeVal'];

 	$json = array("Username" => $userName, "Movie" => $movie, "Rating" => $rating, "startTime" => $startTime, "endTime" => $endTime);
 	$collection -> insert($json);
 	
 	echo "uploaded full set to server";
?>  