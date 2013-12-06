/*-----------------------------------------------------------------
Append letters
Makes a copy of each letter that is clicked and puts it in the 
notebook area.
-------------------------------------------------------------------*/	

/*-----------------------------------------------------------------
Demo animations (appear only once every 3 days)
Source for timer: http://stackoverflow.com/questions/10979562/run-jquery-function-just-once-per-visit
-------------------------------------------------------------------*/	
$(document).ready(function(){
	// only show demo animation once per day (see Source above)
	
	var now = (new Date()).getTime();
	var lastTime = 0;
	var lastTimeStr = localStorage['lastTime'];
	if (lastTimeStr) lastTime = parseInt(lastTimeStr, 10);
	if (now - lastTime > 3*24*60*60*1000) { 
    // do animation
    	$('#greeting').animate({bottom: "100px"}, 3500);
		setTimeout(function() {
      		// Do after 6 seconds
      		$('#greeting').animate({bottom: "-550px"}, 2000);
      		$('#greeting').slideUp(10);
		}, 5000);
		setTimeout(function() {
		$('#demo').fadeIn(1000);
    	}, 7000);
	} 
	localStorage['lastTime'] = ""+now;
});
// animation start
$('#demo').click(function(){
	// remove demo button on click
	$('#demo').remove();
	// "click on letters"
	$('#msg1').fadeIn(1000);
	$('#hand').fadeIn(1000);
	$('#hand').animate({right: "-100px"}, 2000);
	$('#hand').fadeOut(1100);
	$('#hand').animate({bottom: "-200px"}, 700);
	$('#msg1').fadeOut(2000);
	// demo word appears
	setTimeout(function() {
		$('.demo_ltr').fadeIn(1000);
		// "to make words"
		$('#msg2').fadeIn(1500);
	}, 3000);
	setTimeout(function() {
		$('#msg2').fadeOut(2000);
	}, 3500);
	setTimeout(function() {
		//"You'll get pictures"
		$('#msg3').fadeIn(1000);
	}, 6500);
	// demo images appear
	setTimeout(function() {
		$('#search_results_img').fadeIn(1000);
		$('#msg2').fadeOut(1000);
	}, 8000);
	setTimeout(function() {
		$('#msg3').fadeOut(1000);
	}, 9500); 
	// trash can click
	setTimeout(function() {
		$('#search_results_img').remove();
		$('#hand').fadeIn(1500);
		$('#hand').fadeOut(1300);
		// "click on trash"
		$('#msg4').fadeIn(1000);
	}, 11000);  
	setTimeout(function() {
		$('#msg4').fadeOut(1000);
	}, 13000); 
	setTimeout(function() {
		// "to start over"
		$('#msg5').fadeIn(1000);
		$('.demo_ltr').fadeOut(1000);
	}, 14500); 
	setTimeout(function() {
		$('#msg5').fadeOut(1100);
	}, 15000); 
	setTimeout(function() {
		// "Good job!"
		$('#msg6').fadeIn(2000);
	}, 17000); 
	setTimeout(function() {
		$('#msg6').fadeOut(1500);
	}, 19000); 
});

// when a letter is picked
$('.letter').mousedown(function() {
	// remove demo sticker or "Good job!"-sticker (if there)
	$('#demo').fadeOut(1000);
	$('#msg6').remove();

	// clone the letter that was clicked
	var new_letter = $(this).clone();
	
	// add new class so we can distinguish placed letters
	new_letter.removeClass('letter');
	new_letter.addClass('placed_letters');
	
	// put letters on the canvas
	$('#canvas').append(new_letter);

	// animated bounce
	new_letter.animate({ top: "50px"}, "fast");
	new_letter.animate({ top: "30px"}, "slow");
	new_letter.animate({ top: "50px"}, "slow");
});

/*-----------------------------------------------------------------
Make an image search every time a letter is clicked
-------------------------------------------------------------------*/	

// search for what you've written
$('.letter').mouseup(function(){
	search();
});

/*-----------------------------------------------------------------
Delete function
-------------------------------------------------------------------*/

// when backspace image is clicked, remove the last letter and make a new search
$('#backspace').mousedown(function(){
	$('#canvas').children().last().remove();
	search();
})

/*-------------------------------------------------------------------------------------------------
Start over
-------------------------------------------------------------------------------------------------*/
$('#refresh').click(function() {
	$('#search_results').html('');
	// remove letters
	$('.placed_letters').remove();
});

/*-------------------------------------------------------------------------------------------------
Search function
-------------------------------------------------------------------------------------------------*/
function search() {
	// clear out the search results div 
	$('#search_results').html('');
	// put all the letter objects in an array
	$s = $('.placed_letters');
	// define array of letters
	$letter_array = [];
	// extract letter values ("a", "b" etc.) and put in array
	$s.each(function(i){
		$letter_array[i] = $(this).attr('alt');
	})
	// make a string out of the letters (http://www.w3schools.com/jsref/jsref_join.asp)
	word = $letter_array.join("");

/*--------------------------------------------------------------------------------------------------
google image search (deprecated version, used in lecture 10)
----------------------------------------------------------------------------------------------------*/
	// only do image search for three letters or longer words
	if(word.length > 2) {
    // search query with safe search and max results limited to 4		
	var google_url = 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=' + word + '&callback=?&safe=active&rsz=4';	
	// see documentation at https://developers.google.com/image-search/v1/jsondevguide#json_args
	$.getJSON(google_url, function(data){
		// the responseData property contains an array of results (images)
	    var images = data.responseData.results;
		// check that there were any results
	    if(images.length > 0){
			// the following is from Class 10 (Card O'Matic example)
			// for each image, get the URL
	        $.each(images, function(key, image) {
	        	// create a link and img element 
	        	var new_image_element = "<a href='" + image.url +"' target='_blank'><img class='image' src='" + image.url + "'></a>";
	        	// append images in results div
	            $('#search_results').append(new_image_element);
			});
	    }	   
	});		
  }
};


