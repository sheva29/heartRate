//Functions that apply to the whole document
$(document).ready(function() {
	//When opening the login makes sure that all the variables are empty
	var username = "";
	var password = "";
	var movie = "";
	var startTime = "";
	var endTime = "";
	var rating = "";
	
	var timer = 61; //This is the timer that starts when you are about to start pushing data
	var counting = false;// It checks when var timer starts to go down
	var countDownDone = false;// It checks when var timer <= 0
	var recievedData = false;// It checks data from the Heart Rate hardware. it turns true when it receives data from the Heart Rate hardware
	
	var blueScrollHeight = document.getElementById('suggestedBox').scrollHeight;
	
	//Keyup makes sure that when clicking in the field whatever you input it takes all the characters
	$('#usernameInput').keyup(function(){
		username = $(this).val();		
	});
	
	//Keyup makes sure that when clicking in the field whatever you input it takes all the characters
	$('#passwordInput').keyup(function(){
		password = $(this).val();		
	});
	
  /*
  $('.my_modal_open').click(function(){
        $('#my_modal').popup({
            'autoopen': true
        });
    });
*/
    //This function is from scrollTo.js. This is the library that allows to have everything in one file and just navigate in different sections. It requires jquery.fullContent.min.js
    $('#container').fullContent({
		stages: 'section',
	    mapPosition: [{v: 1, h: 1}, {v:1 , h: 2}, {v:1 , h: 3}, {v:1 , h: 4},  {v:1 , h: 5}, {v:1 , h: 6}, {v:1 , h: 7}, {v:1 , h: 8}, {v:1 , h: 9}, {v:1 , h: 10}, {v:1 , h: 11}],
	    stageStart: 1,
		idComplement: 'page_'
	}); 
	//These are the different elements that are hidden and will only be accesible by clicking them
	$('div#loginBox').hide();
	$('#pageCover').hide();
	$('#mistakeBox').hide();
	$('#graphBoxPageCover').hide();
	$('#graphBox').hide();
	
	$('button#loginButton').click(function(){
		$('div#loginBox').slideToggle();
	});
	//It closes the log in window
	$('#closeLogin').click(function(){
		$('div#loginBox').slideToggle();
	});
	//When clicking the Login button
	$("#loginSubmitButton").click(function(){
	//If the password is m and user is Quincy it remotely calls homeData.php and connects to the movieData db in Mongo and pulls the information stored so far
		if((username == "Quincy" && password == "m") || (username == "Mauricio" && password == "mauricio") || (username == "Sample") || (username == "sample") ){
			$.ajax({
			//POST passes the information to homeData.php which takes a variable $userName = _POST['userName'];
				type: "POST",
				url: "homeData.php",
				//Data should be passed as a JSON when using Ajax
				data: { userName: username},
				success: function(data) {
					//Includes the information from homeData.php in the HTML tag that has the id="myDataHolder"
					document.getElementById("myDataHolder").innerHTML = data;
				}
			});
			//POST passes the suggestions that have been stored for either Quincy or Mauricio
			$.ajax({
				type: "POST",
				url: "suggestionData.php",
				data: { userName: username},
				success: function(data) {
					document.getElementById("suggestionsHolder").innerHTML = data;
				}
			});
		}
		//Prevents to go to the next section when typing something different than what's in the database
		else if(username == "" && password == ""){
			event.preventDefault();
			alert("You need to fill in a username and password.");
		}
		else{
			event.preventDefault();
			alert("Your username and password do not match.");
		}
		console.log(username, password);
	});
	

	$(document).on("click", "#myDataHolder div", function(){
	
		//
		var whatsInside = this.innerHTML;
 		var updated = whatsInside.replace('<center>', '');
 		var updated2 = updated.replace('</center>', '');
 		var trimed = $.trim(updated2); 
		console.log(trimed);
		
		//Pulls all the information from makeGraphHome.php. It looks for all the movies from that user, either Quincy or Mauricio
		$.ajax({	
			type: "POST",
			url: "makeGraphHome.php",
			data: { userNameVal: username, movieVal: trimed },
/* 			data: { userName: "Mauricio", startTime: 1367811577, endTime: 1367813001}, */
			success: function(data) {
				document.getElementById("graphBoxDataHolder").innerHTML = data;
			}
		});	
		
		document.getElementById("graphHomeMovieName").innerHTML = trimed;
		$('#graphBoxPageCover').fadeIn();
		$('#graphBox').slideDown();
	});	
	//It closes the graph in the home page
	$('#closeGraph').click(function(){
		$('#graphBoxPageCover').fadeOut();
		$('#graphBox').slideUp();
	});
	//When click on
	$('#beginMovieButton').click(function(){
	    //Creates a variable for the movie in the id="q".
	    movie = $('#q').val();
	    //If someone has not input a movie and clicks on the button "Start a Movie". It automatically prompts to input a movie
	    if(movie == ""){
	    	//Prevents the action to happen
			event.preventDefault();
		    alert("You need to input a movie!");
	    }
	    //If the movie has been selected it goes to next section and gets the php time from the getTime.php. It stores the php time since the getTime is echoing strtotime("now");
	    timer = 61;
	    counting = true;
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				startTime = data; 
				console.log(startTime);
			}
		});
    });
    //If clicked in the go back button. It would restart the counter to 61
    $('#goBack').click(function(){
	    $('#pageCover').fadeOut();
	    $('#mistakeBox').slideUp();
	    timer = 61;
	    countDownDone = false;
    });
    //If clicked in the "more time" button. It will reset the	timer and get a new time time stamp from the php file.
    $('#moreTime').click(function(){
	    $('#pageCover').fadeOut();
	    $('#mistakeBox').slideUp();
	    timer = 61;
	    counting = true;
	    countDownDone = false;
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				startTime = data;
				console.log(startTime); 
			}
		});
    });
    //It simulates going receiving data from the Heart Rate hardware and takes it to the rating page
    $('#testForwardButton').click(function(){
	   recievedData = true;
	   console.log(recievedData);
    });
    //When logging a movie you want to pass certain information to the data base: user name, movie name, rating, starting time and ending time. All the information gets stored in logMovie.php. Some of these variables are also passed to makeGraph.php and logsuggestion.phS
    $('#logMovieButton').click(function(){
	    rating = $('#rating input').val();
	    $.ajax({
	    	type: "POST",
			url: "getTime.php",
			success: function(data) {
				endTime = data; 
				console.log(endTime);
				$.ajax({
					type: "POST",
					url: "logMovie.php",
					data: { userNameVal: username, movieVal: movie, ratingVal: rating, startTimeVal: startTime, endTimeVal: endTime },
					success: function(data){
						console.log(data);
					}
				});
				$.ajax({
					type: "POST",
					url: "makeGraph.php",
					data: { userNameVal: username, startTimeVal: startTime, endTimeVal: endTime },
/* 					data: { userName: "Mauricio", startTime: 1367811577, endTime: 1367813001}, */
					success: function(data) {
						document.getElementById("graphHolder").innerHTML = data;
					}
				});
				$.ajax({
					type: "POST",
					url: "logSuggestion.php",
					data: { userNameVal: username, movieVal: movie, ratingVal: rating, startTimeVal: startTime, endTimeVal: endTime },
					success: function(data){
						document.getElementById("resultsSugHolder").innerHTML = data;
					}
				});

			}
		});
		document.getElementById("movieName").innerHTML = movie;
    });
    
    $('.returnHome').click(function(){    	
	    movie = "";
	    $('#q').val("");
	    $('#rating input').val("");
	    $('#rating img').attr("src", "images/stars/star-off.png");
		startTime = "";
    	endTime = "";
		rating = "";
    	timer = 61;
    	counting = false;
    	countDownDone = false;
    	recievedData = false;
    	$('#pageCover').hide();
	    $('#mistakeBox').hide();
		//set all "val" to "" too	   	
	   	//When return home is clicked. It loads homeData.php. This file accesses the movieData collection. There are all the movies rated from each user. So that every time ajax calls this file it displays the movies that have been watched from that user in particular.
	   	$.ajax({
	   		type: "POST",
			url: "homeData.php",
			data: { userName: username},
			success: function(data) {
				document.getElementById("myDataHolder").innerHTML = data;
			}
		});
		//This is a file made with the best 250 movies of IMDB. Chooses 2 random movies to suggest in your Home section
		$.ajax({
			type: "POST",
			url: "suggestionData.php",
			data: { userName: username},
			success: function(data) {
				document.getElementById("suggestionsHolder").innerHTML = data;
			}
		}); 
    });
    //Uses jqeury to implement the rating system with the stars. All stars are stored in images/stars. It loads the gray starts by default.
    $(function() {
    	$.fn.raty.defaults.path = 'images/stars';
	    $('#rating').raty({
		  	size     : 24,
			iconRange: [
		    	{ range: 1, on: '1.png', off: 'star-off.png' },
		    	{ range: 2, on: '2.png', off: 'star-off.png' },
		    	{ range: 3, on: '3.png', off: 'star-off.png' },
		    	{ range: 4, on: '4.png', off: 'star-off.png' },
		    	{ range: 5, on: '5.png', off: 'star-off.png' }
		    ]
		});
    }); 
   //This takes care of the IMDB API 
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
   //This is a function for the timer using a boolean when true it starts to go down 
    function countdown(){
		if(counting == true){
			timer--;
		}
   //The timer starts at 61, but when it reaches 0. it resets everything!
		if(timer <= 1){
			timer = 0;
			counting = false;
			countDownDone = true;
		}
		document.getElementById("timer").innerHTML = timer;
	}
	
	//This functions simulates a click when receiving data from the Heart Rate hardware. Since we want the interface to be connected with the hardware we need to simulate this with the fakeClick Function	
	function fakeClick(event, anchorObj) {
		
		if (anchorObj.click) {
			console.log("Fake Click!");
			anchorObj.click()
			
		} 
		else if(document.createEvent) {
			if(event.target !== anchorObj) {
				var evt = document.createEvent("MouseEvents"); 
				evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null); 
				var allowDefault = anchorObj.dispatchEvent(evt);
			      // you can check allowDefault for false to see if
			      // any handler called evt.preventDefault().
			      // Firefox will *not* redirect to anchorObj.href
			      // for you. However every other browser will.
			     
			}
			
		}
		
	}




	//when receiving data from the Heart Rate hardware. It checks for a new timestamp. If the button in the box is pressed. It will send a new timestamp to checkForPulseData.php. Which in turn will automatically take the user to the rating page
	function lookingForData(){
		if(counting){
			$.ajax({
				type: "POST",
				url: "checkForPulseData.php",
				data: { userName: username, startTimeVal: startTime},
				dataType: "json",
				success: function(data) {
					if(data.result) {					
						recievedData = true;
						counting = false;
					}
				}
			});
			//This will be prompting in the console until the Heart Rate sends a new set of information
			console.log("trying");	
		}
		
		/*
	var bCounting = true;
	while(bCounting && !countDownDone){
			$.ajax({
				type: "POST",
				url: "checkForPulseData.php",
				data: { userName: username, startTimeVal: startTime},
				dataType: "json",
				success: function(data) {
					console.log(data);
					if(data.result) {					
						bCounting= false;
					}
				}
				
			});
		}
*/
		//Using the fakeClick function. When receiving data from the Heart Rate(this is checked in the function lookingForData()) it clicks on the hidden anchor called "rateMovieLink".
	function proceed(){
		if(recievedData){
			//Goes to the next page
			/* console.log(recievedData); */
			fakeClick(event, document.getElementById('rateMovieLink'));
			recievedData = false;
			console.log(recievedData);	
		}
		else if(countDownDone){
			$('#pageCover').fadeIn();
			$('#mistakeBox').slideDown();
		}
	}


	}


	setInterval(lookingForData, 2000);
	setInterval(countdown, 1000);
	setInterval(proceed, 1000);
});

