/*-----------------------------------------------------------------
Letters
Makes a copy of each letter that is clicked and puts it in the 
notebook area.
-------------------------------------------------------------------*/	

// When a letter is picked
$('.letter').mousedown(function() {
	// Clone the sticker that was clicked
	var new_letter = $(this).clone();
	
	// Add new class so we can distinguish placed letters
	new_letter.addClass('placed_letters');
	
	// Put letters on the canvas
	$('#canvas').append(new_letter);

	// Animated bounce
	new_letter.animate({ top: "50px"}, "fast");
	new_letter.animate({ top: "30px"}, "slow");
	new_letter.animate({ top: "50px"}, "slow");
	               

});

/*-----------------------------------------------------------------
Search
-------------------------------------------------------------------*/	

// Search for what you'vw written
$('.letter').mouseup(function(){
	// Clear out the search results div 
	$('#search_results').html('');

	// Put all the letter objects in an array
	$s = $('.placed_letters');
	
	$letter_array = [];
	// Extract letter values ("a", "b" etc.) and put in an array
	$s.each(function(i){
		$letter_array[i] = $(this).attr('value');
	})
	// Make a string out of the letters
	word = $letter_array.join("");

/*---
google search
---*/
	// Only do image search for three letters or longer words
	if(word.length > 2) {
	//var google_url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyBcbjl3tSdI9osS-oSE-gVtJORg7HvHtUI&cx=006467656015700839024:t5vsbe0nnym&q=' + word + '&searchType=image&imgSize=medium&alt=json&callback=?';
	var google_url = 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=' + word + '&callback=?&safe=active&rsz=3';	
		
	// getJSON is a Ajax method provided to us by jQuery
	// It's going to make a call to the url we built above, and let us work with the results that Google sends back
	// Everthing in the function below is what will occur when getJSON is done and sends us the results back from Google
	$.getJSON(google_url, function(data){
	
		// This line will basically parse the data we get back from Google into a nice array we can work with
	    var images = data.responseData.results;
		console.log(images);
		// Only attempt to do the following if we had images...I.e there was more than 0 images
	    if(images.length > 0){
			
			// .each() is a jQuery method that lets us loop through a set of data. 
			// So here our data set is images
			// Essentially we're unpacking our images we got back from Google
	        $.each(images, function(key, image) {
	        
	        	// Create a new image element
	        	var new_image_element = "<img class='image' src='" + image.url + "'><br>";
	        	
	        	// Now put the new image in our results div
	            $('#search_results').append(new_image_element);
	
	        });
	    }	   
	});		

	//var value = $s.attr('value');
	//$( "input:text" ).val( word);
	// clear the canvas when search has been submitted
	//$('.placed_letters').remove();
}
});


/*-------------------------------------------------------------------------------------------------
Start over
-------------------------------------------------------------------------------------------------*/
$('#refresh-btn').click(function() {
	$('#search_results').html('');
	$( "input:text" ).val("");	
	// Remove any stickers
	$('.placed_letters').remove();

});

