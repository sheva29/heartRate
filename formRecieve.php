<?php
	$connection = new MongoClient();
	$db = $connection -> qandm;
	$collection = $db -> movieData;
		
 	$userName = $_POST['userName'];  
	$movie = $_POST['movie'];
	$rating = $_POST['rating'];
	$startTime = $_POST['startTime'];
 	$endTime = strtotime("now");
	
	$json = array("Username" => $userName, "Movie" => $movie, "Rating" => $rating, "startTime" => $startTime, "endTime" => $endTime);
 	$collection -> insert($json);
?>

<!doctype html>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script type="text/javascript">

		</script>
		
		
	</head>
	
	<body>
		<p>This information has been logged:</p>
		<p>Username: <?php echo $userName;?></p>
		<p>Movie: <?php echo $movie;?></p>
		<p>Rating: <?php echo $rating;?></p>
		<p>Start Time: <?php echo $startTime;?></p>
		<p>End Time: <?php echo $endTime;?></p>	
	</body>
</html>