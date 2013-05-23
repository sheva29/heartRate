<?php


	$connection = new MongoClient();
	$db = $connection -> qandm;
	$collection = $db -> movieData;
		
 	$userName = $_POST['userName'];  
	$movie = $_POST['movie'];
/* 	$movieDuration = $infoObj[][];   */
	$startTime = strtotime("now");
/* 	$endTime = $startTime + $movieDuration; */
	
	$json = array("Username" => $userName, "Movie" => $movie, "startTime" => $startTime, "endTime" => $endTime);
 	$collection -> insert($json);


?>

<!doctype html>
<html>
	<head>
		<script>
		</script>
	</head>
	
	<body>
		You did it!
		<?php echo $userName;?>
		<?php echo $movie;?>
	</body>
</html>