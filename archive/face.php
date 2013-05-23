<?php
?>

<!doctype html>
<html>
<head>
	<title>Heart Rate by Quincy Bock and Mauricio Sanchez</title>
<!-- 	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" /> -->
	<style>
		body { 
			overflow-x: hidden; 
			overflow-y: hidden; 
			background: url(http://54.235.78.70/pulse/images/diagonal.png) repeat; 	
			font-family: 'Dosis', sans-serif;
		}
		div#holder{
				margin: auto;
				margin-top: 10%;
				width: 50%;
				height: 60%;
				border-radius: 20px;
				background-color: #29303a;
				padding: 50px;
				border: solid #232323;
				box-shadow: inset 2px 2px 16px black;
			}
		
	</style>
</head>

<body>
	<div id="container">
		<div id="home">
			<div id="holder">
				<a href="#about">About</a>
				<iframe src="http://player.vimeo.com/video/63861298?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<a href="#login">Login</a>
			</div>
  		</div>
  		
  		<div id="about">
			<a href="#home">Home</a>
  		</div>
  		
  		<div id="login">
  			<a href="#home">Home</a>		
  		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="javascript/scrollTo.min.js"></script>
	<script src="javascript/jquery.fullContent.min.js"></script>
	<script type="text/javascript">
		$('#container').fullContent({
		    stages: 'div',
		    mapPosition: [{v: 1, h: 2}, {v: 1, h: 1}, {v:2 , h: 2}],
		    stageStart: 1,
		    idComplement: 'page_'
		});
	</script>
</body>
	
</html>