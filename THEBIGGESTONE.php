<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Heart Rate</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
   	<script src="javascript/jquery.fullContent.min.js"></script>
   	<script src="javascript/scrollTo.min.js"></script>
   	<script type="text/javascript" src="javascript/jquery.raty.min.js"></script>
   	<link href="css/newStyle.css" rel="stylesheet"/>
   	<link type="stylesheet" rel="stylesheet" href="css/jquery.css" />
	<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<!-- ABOUT -->
		
<!--
		<nav id="navShadow" style="width: 100%; height: 50px; box-shadow: 0px 5px 20px rgba(0,0,0,0.5); position: fixed;">
		</nav>
-->
		
    	<section id="about">
    		<nav class="nav">
    			<button id="loginButton">Login</button>
    		</nav>
    		
    		<div id="loginBox">
    			<p id="closeLogin" style="color:rgb(141, 198, 63); font-size: 16px; float: right; margin-right: -15px; margin-top: -20px; cursor: pointer; cursor: hand;">&#10006;</p>
<!-- 				<form> -->
  					<center><input id="usernameInput" name="username" type="text" placeholder="Username" /></center>
  					<center><input id="passwordInput" name="password" type="password" placeholder="Password"/></center>
				        
  					<center><button><a id="loginSubmitButton" href="#home" style="color:white;">Submit</a></button></center>
  					<p style="margin-top: 10px; margin-left: 20px;"><span style="font-size: 12px;">Want to see a preview? Try...</span><br><span style="margin-left: 10px;">Username: <span style="font-style:italic;">Sample</span></span><br><span style="margin-left: 10px;">Password: <span style="font-style:italic;">Password</span></span></p>
<!-- 				</form> -->
			</div> 
			
    		<article id="aboutPageWrapper" class="blackInset">
	    		<article id="brand">
		    		<img class="logo" src="images/logo.png" />
	    		</article>
	    		<center><p>A networked online systems which suggests movies and TV shows based on your biological reaction to content.</p></center>

	    		<article id="video">
	    			<div class="embed-container">
		    			<iframe src="http://player.vimeo.com/video/65782727?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></center>
		    		</div>
		    	</article>	
		    	<center><p style="margin-top: 20px;"><a href="explaination.html" target="_blank">How it Works</a></p></center>
    		</article>
    		
    		<center><p id="signature">Created by <a href="http://QuincyBock.com" target="_blank">Quincy Bock</a> and <a href="http://www.sanchezmauricio.net/" target="_blank">Mauricio Sanchez</a></p></center>
    	</section>
    	<!-- ABOUT END-->
  		
    	<section id="transition1">
    		<nav id="transition1nav" class="nav">
    		</nav>
  		</section>
  		
    	<!-- HOME -->
    	<section id="home" style="overflow-y:auto;">
    		<nav id="blueNav" class="nav" style="background-color: rgb(28, 117, 188);">
    			<button class="returnHome"><a href="#about">About</a></button>
    			<button class="startMovie"><a href="#startAMovie">Start a Movie</a></button>
    		</nav>
    		<div id="suggestedBox" class="blackInset">
 				<center><p>Your Suggestions</p></center>
 				<center><p class="key">Suggestion Strength:
	 				<span style="color:rgb(217, 201, 0);">You'll love it!</span>
					<span style="color:rgb(193, 98, 33);">You'll like it</span>
					<span style="color:rgb(199, 30, 104);">We think you'll enjoy it</span>	
				</p><center>
    			<div id="suggestionsHolder">
    			</div>
    		</div>
    		<div id="myDataBox" class="blackInset">
    			<center><p>Your Data</p></center>
    			<center><p class="key">Your Rating:
	 				<span style="color:rgba(255, 255, 255, .5);">0</span>
	 				<span style="color:rgb(141, 198, 63);">1</span>
					<span style="color:rgb(0, 184, 157);">2</span>
					<span style="color:rgb(28, 117, 188);">3</span>
					<span style="color:rgb(102, 45, 145);">4</span>
					<span style="color:rgb(158, 31, 99);">5</span>		
				</p><center>
    			<div id="myDataHolder">
    			</div>
    		</div>
    		<center><div id="graphBoxPageCover" style="width:100%; height:500%; background-color: rgba(0, 0, 0, .5); top: 0; left: -2px; position: absolute;"></div></center>
    		
    		<div id="graphBox" class="blackInset">
    			<p id="closeGraph" style="color:rgb(141, 198, 63); font-size: 16px; float: right; margin-right: -15px; margin-top: -20px; cursor: pointer; cursor: hand;">&#10006;</p>
	    		<center><p>Your heart rate results for <span id="graphHomeMovieName" style="color:rgb(217, 201, 0);">your movie</span></p></center>
	    		<div id="graphBoxDataHolder">
	    		</div>
    		</div>

  		</section>
  		<!-- HOME END -->
  		
  		<section id="transition2">
    		<nav id="transition2nav" class="nav">
    		</nav>
  		</section>
  		
  		<!-- START A MOVIE -->
    	<section id="startAMovie">
    		<nav class="nav" style="background-color: rgb(0, 184, 157);">
	    		<button class="returnHome"><a href="#home">Cancel</a></button>
    		</nav>
    		<div id="startMovieBox" class="whiteInset">
				<center><p style="margin-bottom: 15px;">Start Watching a Movie</p></center>
					<input name="movie" id="q" type="text" size="50" placeholder="Type a Movie..." />
					<button id="beginMovieButton"><a href="#watchMovie">Begin Movie</a></button>
			</div>
    		
  		</section>
  		<!-- START A MOVIE END -->
  		
  		<section id="transition3">
    		<nav id="transition3nav" class="nav">
    		</nav>
  		</section>
  		
  		<!-- WATCH MOVIE -->
    	<section id="watchMovie">
    		<nav class="nav" style="background-color: rgb(141, 198, 63);">
    			<button class="returnHome"><a href="#home">Cancel</a></button>
    		</nav>
    		<div id="watchMovieBox" class="blackInset">
				<center><p>Please start your movie within <span id="timer" style="color: rgb(199, 30, 104);">60</span> seconds.</p></center>
			</div>
			<div id="pageCover" style="width:100%; height:100%; background-color: rgba(0, 0, 0, .5); top: 0; left: -2px; position: absolute;"></div>
			<center><div id="mistakeBox" class="whiteInset">
				<p>We see you have not begun streaming data.</p>
				<button id="goBack"><a href="#startAMovie">Go back, I made a mistake</a></button><button id="moreTime">I need more time, reset the timer</button>
			</div></center>	
			<center><button id="testForwardButton">Simulate Uploading Pulse Data</button></center>
			<a href="#rateMovie" id="rateMovieLink" style="display: none;">Rate Movie</a> <!-- <<This is a hidden element that is triggered by fakeClick() in bigScript.js-->
  		</section>
  		<!-- START A MOVIE END -->
  		
  		<section id="transition4">
    		<nav id="transition4nav" class="nav">
    		</nav>
  		</section>
  		
  		<!-- RATE MOVIE -->
    	<section id="rateMovie">
    		<nav class="nav" style="background-color: rgb(217, 201, 0);">
    			<button class="returnHome"><a href="#home">Cancel</a></button>
    		</nav>
    		<div id="rateMovieBox" class="whiteInset">
				<center><p style="margin-bottom: 15px;">Rate Your Movie</p></center>
				<div id="rating" style="width: 165px !important; margin: 0 auto; margin-bottom: 10px;"></div>
				<center><button id="logMovieButton"><a href="#results">Log Movie</a></button></center>
			</div>
  		</section>
  		<!-- RATE MOVIE END -->
  		
  		<section id="transition5">
    		<nav id="transition5nav" class="nav">
    		</nav>
  		</section>
  		
  		<!-- RESULTS -->
    	<section id="results">
    		<nav class="nav" style="background-color: rgb(193, 98, 33);">
    			<button class="returnHome"><a href="#home">Home</a></button>
    			<button class="startMovie returnHome"><a href="#startAMovie">Start a Movie</a></button>
    		</nav>
    		<div id="resultsBox" class="blackInset">
 				<center><p>You have logged <span id="movieName" style="color:rgb(217, 201, 0);">your movie</span></p></center>
	    		<div id="graphHolder">
    			</div>
    		</div>
    		<div id="resultsSugBox" class="blackInset">
 				<center><p>Based on your heart rate watching <span id="movieName" style="color:rgb(217, 201, 0);">your movie</span> we suggest:</p></center>
	    		<center>
	    		
	    		
<p class="key">Suggestion Strength:
	 				<span style="color:rgb(217, 201, 0);">You'll love it!</span>
					<span style="color:rgb(193, 98, 33);">You'll like it</span>
					<span style="color:rgb(199, 30, 104);">We think you'll enjoy it</span>	
				</p>
<center>
	    		<div id="resultsSugHolder">
    			</div>
    		</div>		
    		<center><button id="lastButton" class="returnHome" style="margin-top: 30px;"><a href="#home">Return Home to See Your Suggested Movies</a></button></center>
  		</section>
  		<!-- RESULTS END -->
  		
    </div>

<script>
	<?php include("javascript/bigScript.js"); ?>
</script>

</body>
</html>