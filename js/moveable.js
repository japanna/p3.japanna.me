/*-----------------------------------------------------------------
Append letters
Makes a copy of each letter that is clicked and puts it in the 
notebook area.
-------------------------------------------------------------------*/	

// when a letter is picked
$('.letter').mousedown(function() {
	// clone the sticker that was clicked
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
		$letter_array[i] = $(this).attr('value');
	})
	// make a string out of the letters (http://www.w3schools.com/jsref/jsref_join.asp)
	word = $letter_array.join("");

/*--------------------------------------------------------------------------------------------------
google image search (deprecated version)
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


