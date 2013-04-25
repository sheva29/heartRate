<?php
	$userName = $_GET['userName'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Begin a Movie</title>
<link type="stylesheet" rel="stylesheet" href="css/jquery.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function(){
    $("#q").focus(); //Focus on search field
    $("#q").autocomplete({
        minLength: 0,
        delay:1,
        source: "suggest.php",
        focus: function( event, ui ) {
            $(this).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $(this).val( ui.item.label );
            return false;
        }
    }).data("uiAutocomplete")._renderItem = function( ul, item ) {
        return $("<li></li>")
            .data( "item.autocomplete", item )
            .append( "<a>" + (item.img?"<img class='imdbImage' src='imdbImage.php?url=" + item.img + "' />":"") + "<span class='imdbTitle'>" + item.label + "</span>" + "<div class='clear'></div>" + "</a>")
            .appendTo( ul );
    };
});
</script>
<style type="text/css">
.ui-menu-item .imdbTitle{
    font-size: 0.9em;
    font-weight: bold;
}
.ui-menu-item .imdbCast{
    font-size: 0.7em;
    font-style: italic;
    line-height: 110%;
    color: #666;
}
.ui-menu-item .imdbImage{
    float: left;
    margin-right: 5px;
}
.ui-menu-item .clear{
    clear: both;
}


			body{
/* 				background: #29303a; */
				background: url(http://54.235.78.70/pulse/images/diagonal.png) repeat; 
				zoom: reset:
				background-size: cover;
				font-family: 'Dosis', sans-serif;
				margin:0;
				padding:0;
			}
			div#holder{
				margin: auto;
				margin-top: 10%;
				width: 500px;
				height: 200px;
				border-radius: 20px;
				background-color: #29303a;
				padding: 50px;
				border: solid #232323;
				box-shadow: inset 2px 2px 16px black;
			}
			div p{
				color: white;
				font-size: 30px;
			}
			input#q{
				background-color: rgb(58, 68, 82);
				border-radius: 25px;
				font-size: 20px;
				padding: 2px;
				padding-left: 10px;
				border: solid rgba(255,0,73,0.56);
				color:rgba(255,255,255,0.5);
				width: 300px;
			}
			input:focus{
				outline: none;
			}
			
			input#button{
				background-color: rgba(255,0,73,0.56);
				color: white;
				border: solid rgb(58, 68, 82);
				border-radius: 25px;
				font-size: 20px;
			}
			input#button:hover{
				background-color: rgba(0,126,100,0.67);
				color: white;
				border: solid rgb(58, 68, 82);
				border-radius: 25px;
				font-size: 20px;
			}
			input#button:active{
				background-color: #2a4771;
				color: white;
				border: solid rgb(58, 68, 82);
				border-radius: 25px;
				font-size: 20px;
			}
		
		
</style>
</head>
<body>
	<div id="holder">
		<center><p>Start Watching a Movie</p></center>
			<form id="form" name="form" method="post" action="formRecieve.php" style="text-align:center; margin-bottom:20px;">
				<input id="userName" type="hidden" name="userName" value="<?php echo $userName;?>" />
				<input name="s" value="all" type="hidden" />
				<input id="poster" name="poster" type="hidden" />
				<input name="movie" id="q" type="text" size="50" />
        
				<input name="submit" id="button" type="submit" value="Begin" />
			</form>
	</div>
</body>
</html>