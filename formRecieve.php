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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var time = 60;
				
				function countdown(){
					time--;
					document.getElementById("time").innerHTML = time;
				}
				
				setInterval(countdown, 1000);
			});
		</script>
		
		
	</head>
	
	<body>
		<p>You are watching <?php echo $movie;?></p>
		<p>Begin Your Movie and Heart Rate Pulse Sensor within <span id="time">60</span> seconds.</p>
		<?php echo $userName; ?>	
	</body>
</html>