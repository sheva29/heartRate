<?php
	$userName = $_GET['userName']; 
?>

<!Doctype html>
<html>
	<head>
		<title></title>
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
			<link href="css/style.css" rel="stylesheet" />
			<link href="css/popup.css" rel="stylesheet"/>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
			<script type="text/javascript" src="javascript/ralph.js"></script>
			<script type="text/javascript" src="javascript/gRalph.js"></script>
			<script type="text/javascript" src="javascript/script.js"></script>
		<style>	
			.caption{
				color: black;
				background-color: rgba(13,163,163,0.75);
				font-size: 20px;
				padding: 15px 10px 15px 10px;
				border-radius:5px;
				-moz-border-radius:5px; /* Old Firefox */
				top: 60px;
			}	
			
			#lightCap{
				position: absolute;
				left: 0px;
			}	
			#pulseCap{
				position: absolute;
				left: 125px;
			}	
			#starCap{
				position: absolute;
				left: 260px;
			}
			#welcome{
 				position: absolute; 
 				font-size: 30px;
				color: rgba(255, 255, 255, 0.75);
				top: -5px;
				left: 43%;
			}
			#welcome a:link, #welcome a:visited{
				color: rgba(255,0,73,0.56);
			}
			#welcome a:hover{
				color: rgba(255,0,73,0.75);
			}
			#welcome a:active{
				color: rgba(255,0,73, 1);
			}
			#recordCap{
				position: absolute;
				right: 15px;
			}
		</style>
		<script>
			$(document).ready(function() {
				$(document).tooltip();
			});
		</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="#suggestions" title="My Suggestions"><img id="lightBulb" src="images/lightBulb.png" /></a></li>
				<li><a href="#charts" title="My Data"><img id="pulse" src="images/pulse.png" /></a></li>
				<li><a href="#popular" title="Popular"><img id="star" src="images/star.png" /></a></li>
				<li><a href="formInput.php?userName=<?php echo $userName?>" title="Log a Movie"><img id="record" src="images/record.png" /></a></li>
			</ul>
			<p id="welcome">Welcome, <a href="login.php" title="Log Out"><?php echo $userName;?></a>!</p>
		</nav>
		
		<section id="suggestions" class="clearfix">
			<center><h2>Recommended for You</h2></center>
		</section>
		
		<section id="charts" class="clearfix">
			<center><h2>My Data</h2></center>
		</section>
		
		<section id="popular" class="clearfix">
			<center><h2>What's Popular</h2></center>
		</section>
		
		<div id="overlay">
			<div id="popup">
	        </div>
        </div> 
		
		<script type="text/javascript" src="javascript/easing.js"></script>
		<script type="text/javascript">
			$(function(){
				$('ul.nav a').bind('click', function(event){
				var $anchor = $(this);
	
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top 
				}, 1500, 'easeInOutExpo');
				
				event.preventDefault();
				});
			});//first function
			
		</script>
	</body>
</html>

