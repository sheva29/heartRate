<?php	
 	$userName = $_POST['userName'];  
	$movie = $_POST['movie'];
	$startTime = $_POST['startTime'];;
?>

<!doctype html>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				
				var mouseOverColor = "red";
				var mouseOutColor = "blue";
				var selectedColor = "green";
				var clicked = false;
				
				$("span#oneStar").mouseenter(function() {
					$(this).css("color", mouseOverColor);
				});
				$("span#twoStar").mouseenter(function() {
					$("span#oneStar").css("color", mouseOverColor);
					$(this).css("color", mouseOverColor);
				});
				$("span#threeStar").mouseenter(function() {
					$("span#twoStar").css("color", mouseOverColor);
					$("span#oneStar").css("color", mouseOverColor);
					$(this).css("color", mouseOverColor);
				});
				$("span#fourStar").mouseenter(function() {
					$("span#threeStar").css("color", mouseOverColor);
					$("span#twoStar").css("color", mouseOverColor);
					$("span#oneStar").css("color", mouseOverColor);
					$(this).css("color", mouseOverColor);
				});
				$("span#fiveStar").mouseenter(function() {
					$("span#fourStar").css("color", mouseOverColor);
					$("span#threeStar").css("color", mouseOverColor);
					$("span#twoStar").css("color", mouseOverColor);
					$("span#oneStar").css("color", mouseOverColor);
					$(this).css("color", mouseOverColor);
				});
				
				if(clicked == false){
					$("span").mouseout(function() {
						$("span#fiveStar").css("color", mouseOutColor);
						$("span#fourStar").css("color", mouseOutColor);
						$("span#threeStar").css("color", mouseOutColor);
						$("span#twoStar").css("color", mouseOutColor);
						$("span#oneStar").css("color", mouseOutColor);
					});
				}
				
				$("span#oneStar").click(function() {
					$("#rating").val(1);
					$("span#oneStar").css("color", selectedColor);
					clicked = true;
					console.log(clicked);
				});
				$("span#twoStar").click(function() {
					$("#rating").val(2);
					$("span#twoStar").css("color", selectedColor);
					$("span#oneStar").css("color", selectedColor);
					clicked = true;
				});
				$("span#threeStar").click(function() {
					$("#rating").val(3);
					$("span#threeStar").css("color", selectedColor);
					$("span#twoStar").css("color", selectedColor);
					$("span#oneStar").css("color", selectedColor);
					clicked = true;
				});
				$("span#fourStar").click(function() {
					$("#rating").val(4);
					$("span#fourStar").css("color", selectedColor);
					$("span#threeStar").css("color", selectedColor);
					$("span#twoStar").css("color", selectedColor);
					$("span#oneStar").css("color", selectedColor);
					clicked = true;
				});
				$("span#fiveStar").click(function() {
					$("#rating").val(5);
					$("span#fiveStar").css("color", selectedColor);
					$("span#fourStar").css("color", selectedColor);
					$("span#threeStar").css("color", selectedColor);
					$("span#twoStar").css("color", selectedColor);
					$("span#oneStar").css("color", selectedColor);
					clicked = true;
				});
				
				
				
				var time = 60;
				function countdown(){
					time--;
					
					if(time <= 1){
						time = 0;
					}
					document.getElementById("time").innerHTML = time;
				}
				setInterval(countdown, 1000);
			});
		</script>
		<style>
			.rating {
			  font-size: 20px;
			  color: #057af9;
			}
			.rating > span {
			  display: inline-block;
			  position: relative;
			}
			.rating{
				cursor: hand;
				cursor: pointer;
			}
		</style>
		
	</head>
	
	<body>
		<p>You (<?php echo $userName; ?>) are watching <?php echo $movie;?></p>
		<p>Begin Your Movie and Heart Rate Pulse Sensor within <span id="time">60</span> seconds.</p>
		
		<p>When you are done</p>
		<p>Rate your movie</p>
		<form id="form" name="form" method="post" action="formRecieve.php" style="text-align:center; margin-bottom:20px;">
			<input type="hidden" name="userName" value="<?php echo $userName;?>" />
			<input type="hidden" name="startTime" value="<?php echo $startTime;?>" />
			<input type="hidden" name="movie" value="<?php echo $movie;?>" />
			<div class="rating">
				<span id="oneStar" value="1">&#9734;</span>
				<span id="twoStar" value="2" >&#9734;</span>
				<span id="threeStar">&#9734;</span>
				<span id="fourStar">&#9734;</span>
				<span id="fiveStar">&#9734;</span>
			</div>
			<input id="rating" type="hidden" name="rating" value="0">
        
			<input name="submit" id="button" type="submit" value="Log Movie" />
		</form>	
	</body>
</html>