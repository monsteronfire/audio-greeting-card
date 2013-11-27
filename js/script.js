$(document).ready(function(){
	//dino-audio-box
	var dino = $('.dino-audio-box');
	
	$(dino).on('click', function(){
		$(this).toggleClass('changeBG');
	});


	//Scroll To Top button
	var goUp = $('.btn-go-top');

	$(window).scroll(function(){
		if($(this).scrollTop() > 150){
			goUp.fadeIn('slow');
		} else {
			goUp.fadeOut('slow');
		}
	});

	$(goUp).click(function(){
		event.preventDefault();

		$('html, body').animate({scrollTop:0}, 1000);
	});

});//end .ready();

//
var audio = document.getElementById('background_audio');

document.getElementById('mute').addEventListener('click', function (e)
{
    e = e || window.event;
    audio.muted = !audio.muted;
    e.preventDefault();
}, false);

/*
$(document).ready(function(){
	$("#buttonmute").click(function(){
		var sounda= document.getElementById('background_audio');
		//sounda.children[0].src = "LinkinParkNewDivide.mp3";
		if (sounda.paused)
		{
			sounda.play();
		}
		
		if(document.getElementById('background_audio').muted == true)
		{
			document.getElementById('background_audio').muted = false;
		}
		else
		{
			document.getElementById('background_audio').muted = true;
		}
	});
});
*/

function playmusic()
{
	var soundmain= document.getElementById('background_audio');
	var sounda= document.getElementById('audio_1');
	var soundb= document.getElementById('audio_2');
	var soundc= document.getElementById('audio_3');
	var soundd= document.getElementById('audio_4');
	var sounde= document.getElementById('audio_5');
	var soundf= document.getElementById('audio_6');
	var soundg= document.getElementById('audio_7');
	var soundh= document.getElementById('audio_8');
	var soundi= document.getElementById('audio_9');
	var soundj= document.getElementById('audio_10');
	var soundk= document.getElementById('audio_11');
	var soundl= document.getElementById('audio_12');
	var soundm= document.getElementById('audio_13');
	var soundn= document.getElementById('audio_14');
	var soundo= document.getElementById('audio_15');
	var soundp= document.getElementById('audio_16');
	var soundq= document.getElementById('audio_17');
	var soundr= document.getElementById('audio_18');
	var sounds= document.getElementById('audio_19');
	var soundt= document.getElementById('audio_20');
	var soundu= document.getElementById('audio_21');
	var soundv= document.getElementById('audio_22');
	var soundw= document.getElementById('audio_23');
	var soundx= document.getElementById('audio_24');
	var soundy= document.getElementById('audio_25');
	var soundz= document.getElementById('audio_26');
	var soundaa= document.getElementById('audio_27');
	var soundbb= document.getElementById('audio_28');
	var soundcc= document.getElementById('audio_29');
	var sounddd= document.getElementById('audio_30');
	var soundee= document.getElementById('audio_31');
	var soundff= document.getElementById('audio_32');
	var soundgg= document.getElementById('audio_33');
	var soundhh= document.getElementById('audio_34');
	var soundii= document.getElementById('audio_35');
	var soundjj= document.getElementById('audio_36');
	var soundkk= document.getElementById('audio_37');
	var soundll= document.getElementById('audio_38');
	var soundmm= document.getElementById('audio_39');
	var soundnn= document.getElementById('audio_40');
	var soundoo= document.getElementById('audio_41');
	var soundpp= document.getElementById('audio_42');
	var soundqq= document.getElementById('audio_43');
	var soundrr= document.getElementById('audio_44');
	var soundss= document.getElementById('audio_45');
	var soundtt= document.getElementById('audio_46');
	var sounduu= document.getElementById('audio_47');
	var soundvv= document.getElementById('audio_48');
	var soundww= document.getElementById('audio_49');
	var soundxx= document.getElementById('audio_50');
		
	if (soundmain.paused)
	{
		soundmain.play();
		sounda.play();
		soundb.play();
		soundc.play();
		soundd.play();
		sounde.play();
		soundf.play();
		soundg.play();
		soundh.play();
		soundi.play();
		soundj.play();
		soundk.play();
		soundl.play();
		soundm.play();
		soundn.play();
		soundo.play();
		soundp.play();
		soundq.play();
		soundr.play();
		sounds.play();
		soundt.play();
		soundu.play();
		soundv.play();
		soundw.play();
		soundx.play();
		soundy.play();
		soundz.play();
		soundaa.play();
		soundbb.play();
		soundcc.play();
		sounddd.play();
		soundee.play();
		soundff.play();
		soundgg.play();
		soundhh.play();
		soundii.play();
		soundjj.play();
		soundkk.play();
		soundll.play();
		soundmm.play();
		soundnn.play();
		soundoo.play();
		soundpp.play();
		soundqq.play();
		soundrr.play();
		soundss.play();
		soundtt.play();
		sounduu.play();
		soundvv.play();
		soundww.play();
		soundxx.play();
	}
}

function mute_1()
{
	if(document.getElementById('audio_1').muted == true)
	{
		document.getElementById('audio_1').muted = false;
	}
	else
	{
		document.getElementById('audio_1').muted = true;
	}
}

function mute_2()
{
	if(document.getElementById('audio_2').muted == true)
	{
		document.getElementById('audio_2').muted = false;
	}
	else
	{
		document.getElementById('audio_2').muted = true;
	}
}

function mute_3()
{
	if(document.getElementById('audio_3').muted == true)
	{
		document.getElementById('audio_3').muted = false;
	}
	else
	{
		document.getElementById('audio_3').muted = true;
	}
}

function mute_4()
{
	if(document.getElementById('audio_4').muted == true)
	{
		document.getElementById('audio_4').muted = false;
	}
	else
	{
		document.getElementById('audio_4').muted = true;
	}
}

function mute_5()
{
	if(document.getElementById('audio_5').muted == true)
	{
		document.getElementById('audio_5').muted = false;
	}
	else
	{
		document.getElementById('audio_5').muted = true;
	}
}

function mute_6()
{
	if(document.getElementById('audio_6').muted == true)
	{
		document.getElementById('audio_6').muted = false;
	}
	else
	{
		document.getElementById('audio_6').muted = true;
	}
}

function mute_7()
{
	if(document.getElementById('audio_7').muted == true)
	{
		document.getElementById('audio_7').muted = false;
	}
	else
	{
		document.getElementById('audio_7').muted = true;
	}
}

function mute_8()
{
	if(document.getElementById('audio_8').muted == true)
	{
		document.getElementById('audio_8').muted = false;
	}
	else
	{
		document.getElementById('audio_8').muted = true;
	}
}

function mute_9()
{
	if(document.getElementById('audio_9').muted == true)
	{
		document.getElementById('audio_9').muted = false;
	}
	else
	{
		document.getElementById('audio_9').muted = true;
	}
}

function mute_10()
{
	if(document.getElementById('audio_10').muted == true)
	{
		document.getElementById('audio_10').muted = false;
	}
	else
	{
		document.getElementById('audio_10').muted = true;
	}
}

function mute_11()
{
	if(document.getElementById('audio_11').muted == true)
	{
		document.getElementById('audio_11').muted = false;
	}
	else
	{
		document.getElementById('audio_11').muted = true;
	}
}

function mute_12()
{
	if(document.getElementById('audio_12').muted == true)
	{
		document.getElementById('audio_12').muted = false;
	}
	else
	{
		document.getElementById('audio_12').muted = true;
	}
}

function mute_13()
{
	if(document.getElementById('audio_13').muted == true)
	{
		document.getElementById('audio_13').muted = false;
	}
	else
	{
		document.getElementById('audio_13').muted = true;
	}
}

function mute_14()
{
	if(document.getElementById('audio_14').muted == true)
	{
		document.getElementById('audio_14').muted = false;
	}
	else
	{
		document.getElementById('audio_14').muted = true;
	}
}

function mute_15()
{
	if(document.getElementById('audio_15').muted == true)
	{
		document.getElementById('audio_15').muted = false;
	}
	else
	{
		document.getElementById('audio_15').muted = true;
	}
}

function mute_16()
{
	if(document.getElementById('audio_16').muted == true)
	{
		document.getElementById('audio_16').muted = false;
	}
	else
	{
		document.getElementById('audio_16').muted = true;
	}
}

function mute_17()
{
	if(document.getElementById('audio_17').muted == true)
	{
		document.getElementById('audio_17').muted = false;
	}
	else
	{
		document.getElementById('audio_17').muted = true;
	}
}

function mute_18()
{
	if(document.getElementById('audio_18').muted == true)
	{
		document.getElementById('audio_18').muted = false;
	}
	else
	{
		document.getElementById('audio_18').muted = true;
	}
}

function mute_19()
{
	if(document.getElementById('audio_19').muted == true)
	{
		document.getElementById('audio_19').muted = false;
	}
	else
	{
		document.getElementById('audio_19').muted = true;
	}
}

function mute_20()
{
	if(document.getElementById('audio_20').muted == true)
	{
		document.getElementById('audio_20').muted = false;
	}
	else
	{
		document.getElementById('audio_20').muted = true;
	}
}

function mute_21()
{
	if(document.getElementById('audio_21').muted == true)
	{
		document.getElementById('audio_21').muted = false;
	}
	else
	{
		document.getElementById('audio_21').muted = true;
	}
}

function mute_22()
{
	if(document.getElementById('audio_22').muted == true)
	{
		document.getElementById('audio_22').muted = false;
	}
	else
	{
		document.getElementById('audio_22').muted = true;
	}
}

function mute_23()
{
	if(document.getElementById('audio_23').muted == true)
	{
		document.getElementById('audio_23').muted = false;
	}
	else
	{
		document.getElementById('audio_23').muted = true;
	}
}

function mute_24()
{
	if(document.getElementById('audio_24').muted == true)
	{
		document.getElementById('audio_24').muted = false;
	}
	else
	{
		document.getElementById('audio_24').muted = true;
	}
}

function mute_25()
{
	if(document.getElementById('audio_25').muted == true)
	{
		document.getElementById('audio_25').muted = false;
	}
	else
	{
		document.getElementById('audio_25').muted = true;
	}
}

function mute_26()
{
	if(document.getElementById('audio_26').muted == true)
	{
		document.getElementById('audio_26').muted = false;
	}
	else
	{
		document.getElementById('audio_26').muted = true;
	}
}

function mute_27()
{
	if(document.getElementById('audio_27').muted == true)
	{
		document.getElementById('audio_27').muted = false;
	}
	else
	{
		document.getElementById('audio_27').muted = true;
	}
}

function mute_28()
{
	if(document.getElementById('audio_28').muted == true)
	{
		document.getElementById('audio_28').muted = false;
	}
	else
	{
		document.getElementById('audio_28').muted = true;
	}
}

function mute_29()
{
	if(document.getElementById('audio_29').muted == true)
	{
		document.getElementById('audio_29').muted = false;
	}
	else
	{
		document.getElementById('audio_29').muted = true;
	}
}

function mute_30()
{
	if(document.getElementById('audio_30').muted == true)
	{
		document.getElementById('audio_30').muted = false;
	}
	else
	{
		document.getElementById('audio_30').muted = true;
	}
}

function mute_31()
{
	if(document.getElementById('audio_31').muted == true)
	{
		document.getElementById('audio_31').muted = false;
	}
	else
	{
		document.getElementById('audio_31').muted = true;
	}
}

function mute_32()
{
	if(document.getElementById('audio_32').muted == true)
	{
		document.getElementById('audio_32').muted = false;
	}
	else
	{
		document.getElementById('audio_32').muted = true;
	}
}

function mute_33()
{
	if(document.getElementById('audio_33').muted == true)
	{
		document.getElementById('audio_33').muted = false;
	}
	else
	{
		document.getElementById('audio_33').muted = true;
	}
}

function mute_34()
{
	if(document.getElementById('audio_34').muted == true)
	{
		document.getElementById('audio_34').muted = false;
	}
	else
	{
		document.getElementById('audio_34').muted = true;
	}
}

function mute_35()
{
	if(document.getElementById('audio_35').muted == true)
	{
		document.getElementById('audio_35').muted = false;
	}
	else
	{
		document.getElementById('audio_35').muted = true;
	}
}

function mute_36()
{
	if(document.getElementById('audio_36').muted == true)
	{
		document.getElementById('audio_36').muted = false;
	}
	else
	{
		document.getElementById('audio_36').muted = true;
	}
}

function mute_37()
{
	if(document.getElementById('audio_37').muted == true)
	{
		document.getElementById('audio_37').muted = false;
	}
	else
	{
		document.getElementById('audio_37').muted = true;
	}
}

function mute_38()
{
	if(document.getElementById('audio_38').muted == true)
	{
		document.getElementById('audio_38').muted = false;
	}
	else
	{
		document.getElementById('audio_38').muted = true;
	}
}

function mute_39()
{
	if(document.getElementById('audio_39').muted == true)
	{
		document.getElementById('audio_39').muted = false;
	}
	else
	{
		document.getElementById('audio_39').muted = true;
	}
}

function mute_40()
{
	if(document.getElementById('audio_40').muted == true)
	{
		document.getElementById('audio_40').muted = false;
	}
	else
	{
		document.getElementById('audio_40').muted = true;
	}
}

function mute_41()
{
	if(document.getElementById('audio_41').muted == true)
	{
		document.getElementById('audio_41').muted = false;
	}
	else
	{
		document.getElementById('audio_41').muted = true;
	}
}

function mute_42()
{
	if(document.getElementById('audio_42').muted == true)
	{
		document.getElementById('audio_42').muted = false;
	}
	else
	{
		document.getElementById('audio_42').muted = true;
	}
}

function mute_43()
{
	if(document.getElementById('audio_43').muted == true)
	{
		document.getElementById('audio_43').muted = false;
	}
	else
	{
		document.getElementById('audio_43').muted = true;
	}
}

function mute_44()
{
	if(document.getElementById('audio_44').muted == true)
	{
		document.getElementById('audio_44').muted = false;
	}
	else
	{
		document.getElementById('audio_44').muted = true;
	}
}

function mute_45()
{
	if(document.getElementById('audio_45').muted == true)
	{
		document.getElementById('audio_45').muted = false;
	}
	else
	{
		document.getElementById('audio_45').muted = true;
	}
}

function mute_46()
{
	if(document.getElementById('audio_46').muted == true)
	{
		document.getElementById('audio_46').muted = false;
	}
	else
	{
		document.getElementById('audio_46').muted = true;
	}
}

function mute_47()
{
	if(document.getElementById('audio_47').muted == true)
	{
		document.getElementById('audio_47').muted = false;
	}
	else
	{
		document.getElementById('audio_47').muted = true;
	}
}

function mute_48()
{
	if(document.getElementById('audio_48').muted == true)
	{
		document.getElementById('audio_48').muted = false;
	}
	else
	{
		document.getElementById('audio_48').muted = true;
	}
}

function mute_49()
{
	if(document.getElementById('audio_49').muted == true)
	{
		document.getElementById('audio_49').muted = false;
	}
	else
	{
		document.getElementById('audio_49').muted = true;
	}
}

function mute_50()
{
	if(document.getElementById('audio_50').muted == true)
	{
		document.getElementById('audio_50').muted = false;
	}
	else
	{
		document.getElementById('audio_50').muted = true;
	}
}