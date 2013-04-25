<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<style>
			body{
				background: #29303a;
				background-size: cover;
				font-family: 'Dosis', sans-serif;
				margin:0;
				padding:0;
			}
			div{
				margin: auto;
				margin-top: 10%;
				width: 465px;
			}
			#title{
				color:white;
				font-size: 100;
				margin: 
			}
			#title img{
				width: 80px;
			}
			
			input{
				background-color: rgb(58, 68, 82);
				border-radius: 25px;
				font-size: 20px;
				padding: 2px;
				padding-left: 10px;
				border: solid rgba(249,0,76,0.67);
				color:rgba(255,255,255,0.5);
			}
			input:focus{
				outline: none;
			}
			
		</style>
		<script>
			$(document).ready(function() {
				$("#userName").click(function(){
					$(this).val("");
				});
			});
			
		</script>
		
	</head>
<body>
	<div><p id="title">Heart<img src="images/heart.png" />Rate</p></div>
	<center><form id="form" name="form" method="get" action="home.php">
        <input id="userName" name="userName" value="Username"></input>
        <!-- <input name="submit" type="submit" value="Begin" /> -->
    </form></center>
	
</body>
</html>