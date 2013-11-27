//The code below works, but it hasn't incorporated the audio for each audio

//dino-audio-box
	var dino = $('.dino-audio-box');
	var clicked = false;
	var audio = $('#background_audio');
	var thisAudio = $(this).children("audio");

	var clickHandlers = [
	    // on first click:
	    function() {
	        //dino.removeClass('changeBG');
			$(this).addClass('changeBG');
			var thisAudio = $(this).children("audio");
			thisAudio.get(0).play();

	    },
	    // on second click:
	    function() {
	        $(this).removeClass('changeBG');
	        audio.get(0).pause();
	    }
	    // ...can add more
	];

	var clicks = 0;

	$(dino).click(function() {
	    // call the appropriate function preserving this and any arguments
	    clickHandlers[clicks++].apply(this, Array.prototype.slice.apply(arguments));
	    // "wrap around" when all handlers have been called
	    clicks %= clickHandlers.length;
	});





	//NO AUDIO AT ALL

//dino-audio-box
	var dino = $('.dino-audio-box');
	var clicked = false;

	var clickHandlers = [
	    // on first click:
	    function() {
	        //dino.removeClass('changeBG');
			$(this).addClass('changeBG');
	    },
	    // on second click:
	    function() {
	        $(this).removeClass('changeBG');
	    }
	    // ...can add more
	];

	var clicks = 0;

	$(dino).click(function() {
	    // call the appropriate function preserving this and any arguments
	    clickHandlers[clicks++].apply(this, Array.prototype.slice.apply(arguments));
	    // "wrap around" when all handlers have been called
	    clicks %= clickHandlers.length;
	});