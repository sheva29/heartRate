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
				
				alert("ready");
				
				function displayResult(){
					alert("YAY");
				}

				$("span#oneStar").click(function() {
					var myVal = $(this).value;
					alert(myVal);
				});
				
				var time = 60;
				
				function countdown(){
					time--;
					document.getElementById("time").innerHTML = time;
				}
				
				setInterval(countdown, 1000);
				
				
				
			});
		</script>
		<style>
			.rating {
			  unicode-bidi: bidi-override;
			  direction: rtl;
			  font-size: 20px;
			  color: #057af9;
			}
			.rating > span {
			  display: inline-block;
			  position: relative;
			  width: 1.1em;
			}
			.rating > span:hover:before,
			.rating > span:hover ~ span:before {
			   content: "\2605";
			   position: absolute;
			   color: #ff0465;
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
				<span id="oneStar" value="1" onclick="displayResult()">&#9734;</span>
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