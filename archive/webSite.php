<?php
	$test = 20;
?>

<!Doctype html>
<html>
	<head>
		<title></title>
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
			<link href="css/style.css" rel="stylesheet" />
			<link href="css/popup.css" rel="stylesheet"/>
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
			#recordCap{
				position: absolute;
				right: 15px;
			}
			img#recommended{
				width: 1000px;
				margin-top: 80px;
				margin-left: 25px;
			}
		</style>
		<script>
			$(document).ready(function() {
				$("#lightCap").hide();
				$("#pulseCap").hide();
				$("#starCap").hide();
				$("#recordCap").hide();
				
				$("img#lightBulb").mouseover(function() {
					$('#lightCap').slideDown();
				});
				$("img#lightBulb").mouseout(function() {
					$('#lightCap').slideUp();
				});

				
				$("img#pulse").mouseover(function() {
					$('#pulseCap').slideDown();
				});
				$("img#pulse").mouseout(function() {
					$('#pulseCap').slideUp();
				});

				
				$("img#star").mouseover(function() {
					$('#starCap').slideDown();
				});
				$("img#star").mouseout(function() {
					$('#starCap').slideUp();
				});

				
				$("img#record").mouseover(function() {
					$('#recordCap').slideDown();
				});
				$("img#record").mouseout(function() {
					$('#recordCap').slideUp();
				});
				
				
				
			});
		</script>
	</head>
	<body>
		<nav>
			<ul class="nav">
				<li><a href="#suggestions"><img id="lightBulb" src="images/lightBulb.png" /></a></li>
				<li><a href="#charts"><img id="pulse" src="images/pulse.png" /></a></li>
				<li><a href="#popular"><img id="star" src="images/star.png" /></a></li>
				<li><a href="http://54.235.78.70/pulse/webSite.php#overlay"><img id="record" src="images/record.png" /></a></li>
			</ul>
			<br><br>
			<p class="caption" id="lightCap">Recommendations</p>
			<p class="caption" id="pulseCap">My Data</p>
			<p class="caption" id="starCap">Popular</p>
			<p class="caption" id="recordCap">Start a Movie</p>
		</nav>
		
		<section id="suggestions" class="clearfix">
			<center><h2>Recommended for You</h2></center>
			<img src="images/recommended.jpg" id="recommended" />
		</section>
		
		<section id="charts" class="clearfix">
			<center><h2>My Data</h2></center>
			<article>
				<div id="rating">
					<div id="stars">
						<img class="star" src="images/star.png" />
						<img class="star" src="images/star.png" />
						<img class="star" src="images/star.png" />
						<img class="star" src="images/star.png" />
						<img class="star" src="images/star.png" />
					</div>
					<center>
					<img id="moviePoster" src="http://www.filmmusicnotes.com/wp-content/uploads/2013/03/old-star-wars-poster.jpg" />
					</center>
				</div>
				<div id="holder"></div>
			</article>
			
			<div id="overlay">
	            <div id="popup">
	                <img src="images/logAMovie.png" />
	                <input></input>
                </div>
            </div> 
        
		</section>
		
		<section id="popular" class="clearfix">
			<center><h2>What's Popular</h2></center>
		</section>
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

