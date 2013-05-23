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
		
		.popup_background {
			z-index: 2000; /* any number */
		}
		.popup_wrapper {
			z-index: 2001; /* any number + 1 */
		}
		.popup_align, .popup_content {
			*display: inline;
			*zoom: 1;
		}
		
		.btn {
display: inline-block;
padding: 4px 14px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #333333;
text-align: center;
text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
vertical-align: middle;
cursor: pointer;
background-color: #f5f5f5;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
background-repeat: repeat-x;
border: 1px solid #bbbbbb;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
border-color: #e6e6e6 #e6e6e6 #bfbfbf;
border-bottom-color: #a2a2a2;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
filter: progid:dximagetransform.microsoft.gradient(enabled=false);
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-large {
padding: 9px 14px;
font-size: 16px;
line-height: normal;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.btn {
border-color: #c5c5c5;
border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25);
}

.btn-success {
color: #ffffff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
background-color: #5bb75b;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
background-image: -webkit-linear-gradient(top, #62c462, #51a351);
background-image: -o-linear-gradient(top, #62c462, #51a351);
background-image: linear-gradient(to bottom, #62c462, #51a351);
background-image: -moz-linear-gradient(top, #62c462, #51a351);
background-repeat: repeat-x;
border-color: #51a351 #51a351 #387038;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}	
	</style>
</head>

<body>
	<div id="container">
		<!-- ABOUT -->
		<section id="about">
			<button class="my_modal_open btn btn-large btn-success">Login</button>
			<div id="login" class="popup_content" style="display:none;">
				<button class="my_modal_close">Close</button>  		
  				<a href="#home">Home</a>		
  			</div>
  		</section>
		<!-- END ABOUT -->  		
		
		<!-- LOGIN BOX -->
  		
  		<!-- END LOGIN BOX -->
  		
  		<section id="home">
  			This is Home
  		</section>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="javascript/scrollTo.min.js"></script>
	<script src="javascript/jquery.fullContent.min.js"></script>
	<script src="./javascript/jquery.popupoverlay.js"></script>
	<script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function() {
		$('#container').fullContent({
		    stages: 'section',
		    mapPosition: [{v: 1, h: 1}, {v:1 , h: 2}],
		    stageStart: 1,
		    idComplement: 'page_'
		});
		
		$('.my_modal_open').click(function(){
        	$('#login').popup({
            	'autoopen': true
            });
        });

        		
	});


		

	</script>
</body>
	
</html>
