<?php
	$userName = 'Quincy';
?>

<!doctype html>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		
	</head>
	
	<body>
		<form method="post" action="formRecieve.php">
			<input id="userName" type="hidden" name="userName" value="<?php echo $userName;?>" />
			<label>Movie:
				<input type="text" name="movie"/>
			</label>
			<input type="submit" value="Click Here"/>
		</form>
		
	</body>
</html>