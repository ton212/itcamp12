$.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
var isSafari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
if(isSafari) { $.browser.device = true; }
//$.browser.device = true;

var layerSet = [];
var layerlength;

var scrolltoflag = false;
var navbarflag = false;
var isDinocuteJumping = false;

var wavebackelem, wavefrontelem;

var audio;

$(document).ready(function() {
	$(window).scrollTop(0);
	$('body').css('overflow', 'hidden');

	audio = new Audio('main_assets/sound/MarioJump.wav');
})

var walkdelayflag = false;
var RightKeyProcessed = false, Rightkeydown = false;
var LeftKeyProcessed = false, Leftkeydown = false;
var RemainAnimDinoCute = false;

$(window).load(function() {
	$(".layer").each(function() {
		layerSet.push($(this));
	});
	layerlength = layerSet.length;

	wavebackelem = $(".wavebackbg");
	wavefrontelem = $(".wavefrontbg");

	$(".itcamp-head .background").height(window.innerHeight);

	calcDianocutePos();
	prepare();
	smokeAnimateRnFn();

	oldwinScrollY = 0;

	if(!$.browser.device) {
		$(".itcamp-gallery ul li").mouseover(function() {
			$(this).stop().animate({
				scale: 1.2
			}, 6, 'linear');
		});

		$(".itcamp-gallery ul li").mouseout(function() {
			$(this).stop().animate({
				scale: 1
			}, 6, 'linear');
		});

		$(".timeline-description span").mouseover(function() {
			$(this).stop().animate({
				scale: 1.2
			}, 6, 'linear');
		});

		$(".timeline-description span").mouseout(function() {
			$(this).stop().animate({
				scale: 1
			}, 6, 'linear');
		});
	}

	$(".dinocute").click(function() {
		if(!isDinocuteJumping) {
			isDinocuteJumping = true;
			var oldsrc = $(this).attr("src");
			$(this).attr("src", "main_assets/img/timeline/dinocute_jumping.gif");
			$(this).width("82px");
			setTimeout(function() {
				audio.play();
			}, 120);
			setTimeout(function() {
				$(".dinocute").attr("src", oldsrc);
				$(".dinocute").width("80px");
				isDinocuteJumping = false;
			}, 1350);
		}
	});

	$(window).keydown(function(event) {
		if($(window).scrollTop() >= $('.itcamp-contact').offset().top - (window.innerHeight / 2) && $(window).scrollTop() <= $('.itcamp-contact').offset().top + (window.innerHeight / 2) ) {
			RemainAnimDinoCute = true;
			if(event.keyCode == 39) {
				Rightkeydown = true;
				if(!walkdelayflag) {
					walkdelayflag = true;
					var dinoWalkPos = (parseFloat($(".dinocute").css("left")) * 100) / 1050;
					$(".dinocute").css("transform", "ScaleX(1)");
					if(dinoWalkPos < 100) {
						$(".dinocute").css("left", (dinoWalkPos+0.1)+"%");
					}
					setTimeout(function() {
						walkdelayflag = false;
					}, 1000/60);
				}
				if(!RightKeyProcessed) {
					$(".dinocute").attr("src", "main_assets/img/timeline/dinocute.gif");
					RightKeyProcessed = true;
				}
			}
			if(event.keyCode == 37) {
				Leftkeydown = true;
				if(!walkdelayflag) {
					walkdelayflag = true;
					var dinoWalkPos = (parseFloat($(".dinocute").css("left")) * 100) / 1050;
					$(".dinocute").css("transform", "ScaleX(-1)");
					if(dinoWalkPos > 0) {
						$(".dinocute").css("left", (dinoWalkPos-0.1)+"%");
					}
					setTimeout(function() {
						walkdelayflag = false;
					}, 1000/60);
				}
				if(!LeftKeyProcessed) {
					$(".dinocute").attr("src", "main_assets/img/timeline/dinocute.gif");
					LeftKeyProcessed = true;
				}
			}
		} else if(RemainAnimDinoCute) {
			$(".dinocute").attr("src", "main_assets/img/timeline/dinocute_still.gif");
			RemainAnimDinoCute = false;
			Rightkeydown = false;
			RightKeyProcessed = false;
			Leftkeydown = false;
			LeftKeyProcessed = false;
		}
	});

	$(window).keyup(function(event) {
		if(event.keyCode == 39) {
			console.log("right release");
			if(!Leftkeydown) {
				$(".dinocute").attr("src", "main_assets/img/timeline/dinocute_still.gif");
				RemainAnimDinoCute = false;
			}
			Rightkeydown = false;
			RightKeyProcessed = false;
		}
		if(event.keyCode == 37) {
			console.log("left release");
			if(!Rightkeydown) {
				$(".dinocute").attr("src", "main_assets/img/timeline/dinocute_still.gif");
				RemainAnimDinoCute = false;
			}
			Leftkeydown = false;
			LeftKeyProcessed = false;
		}
	});

	$('body').css('overflow', 'auto');
	$('.preloader').velocity("fadeOut", { duration: 400, easing: 'linear' });
});

var oldwinScrollY;

$(window).scroll(function() {
	var windowScrollY = $(window).scrollTop();
	if(!$.browser.device && window.innerWidth > 1263) {
		for(i = 0; i < layerlength; i++) {
			layerSet[i].stop().animate({
				y: (parseInt(layerSet[i].attr("data-origOffsetY")) - (windowScrollY * parseFloat(layerSet[i].attr("data-scrollmodifier"))))+"px",
				z: 0,
			}, 1400, 'easeOutCubic', function() {
				scrolltoflag = false;
			});
		}
		wavebackelem.stop().animate({backgroundPositionX: -(windowScrollY * 0.06)}, 1200, 'easeOutCubic');
		wavefrontelem.stop().animate({backgroundPositionX: (windowScrollY * 0.16)}, 1200, 'easeOutCubic');
	}
	if($(window).scrollTop() > 450 && $(window).scrollTop() < $('.itcamp-contact').offset().top - 800) {
		if(windowScrollY > oldwinScrollY) {
			if(navbarflag) {
				$(".navbar").stop().animate({
					top: '-125px',
					z: 0
				}, 450, 'linear');
				navbarflag = false;
			}
		} else if(windowScrollY <= oldwinScrollY) {
			if(!navbarflag) {
				$(".navbar").stop().animate({
					top: '0px',
					z: 0
				}, 450, 'linear');
				navbarflag = true;
			}
		}
	} else if($(window).scrollTop() >= $('.itcamp-contact').offset().top - 800) {
		if(!navbarflag) {
			$(".navbar").stop().animate({
				top: '0px',
				z: 0
			}, 450, 'linear');
			navbarflag = true;
		}
	} else if($(window).scrollTop() == 0) {
		if(navbarflag) {
			$(".navbar").stop().animate({
				top: '-125px',
				z: 0
			}, 450, 'linear');
			navbarflag = false;
		}
	}
	oldwinScrollY = windowScrollY;
});

$(window).resize(function() {
	$(window).stop();
	$("body").removeClass("parallax");
	$("body").removeAttr("style");
	$(".wavebackbg").removeAttr("style");
	$(".wavefrontbg").removeAttr("style");
	$(".layer").each(function() {
		$(this).removeAttr("style");
	});
	prepare();
})

function prepare() {

	if(!$.browser.device && window.innerWidth > 1263) {
		for(i = 0; i < layerlength; i++) {
			layerSet[i].attr("data-origOffsetY", parseInt(layerSet[i].offset().top + parseInt(layerSet[i].attr("data-addoffsety"))));
		}
		for(i = 0; i < layerlength; i++) {
			$.Velocity.hook(layerSet[i], "translateY", parseInt(layerSet[i].attr("data-origOffsetY"))+"px");
		}
		$("body").addClass("parallax");
		$("body").height($(".dirtfront").offset().top + $(".dirtfront").height() + 395);
	} else {
		$('body').addClass("static");
	}
}

function smokeAnimateRnFn() {
	smokeAnimateFn();
	setInterval(function() { smokeAnimateFn() }, 6300);
}

function smokeAnimateFn() {
	$(".smoke").animate({top: '-70px', opacity: '1'}, 1200, 'linear', function() {
		$(this).animate({top: '-100px', opacity: '0.0'}, 1600, 'linear', function() {
			$(this).css("top", "-45px");
			$(this).css("opacity", "0");
		});
	});
}

function calcDianocutePos() {
	var d = new Date();
	var t = d.getTime();
	if(t < 1441040400000) {
		$(".dinocute").css("left", 0+"%");
		$(".dinocute").attr("src", "main_assets/img/timeline/dinocute_still.gif");
	} else if(t < 1445619600000) {
		$(".dinocute").css("left", (normalize(1441040400000, 1445619600000, t) * 18)+"%");
	} else if(t < 1446310800000) {
		$(".dinocute").css("left", (18 + (normalize(1445619600000, 1446310800000, t) * 20))+"%");
	} else if(t < 1447520400000) {
		$(".dinocute").css("left", (38 + (normalize(1446310800000, 1447520400000, t) * 22))+"%");
	} else if(t < 1447952400000) {
		$(".dinocute").css("left", (60 + (normalize(1447520400000, 1447952400000, t) * 20))+"%");
	} else if(t < 1449680400000) {
		$(".dinocute").css("left", (80 + (normalize(1447952400000, 1449680400000, t) * 20))+"%");
	} else {
		$(".dinocute").css("left", 100+"%");
	}
}


function normalize(low, high, current) {
	var distance = high - low;
	return (current - low) / distance;
}

function enlarge(num) {
	var url = "main_assets/img/pic/org_"+convertTwoZero(num)+".jpg";

	if($.browser.device) {
		$(".c-container").attr("onclick", "overlayToggle()");
	}
	$('.c-overlay .c-container').append("<img src='"+url+"' style='display: none;' />");
	overlayToggle();
}

var overlaytoggleflag = false;

function overlayToggle() {
	if(!overlaytoggleflag) {
		$('body').css('overflow', 'hidden');
		$('.c-overlay-shield').velocity("fadeIn", { duration: 400, easing: 'linear' });
		$('.c-overlay').velocity("fadeIn", { duration: 400, easing: 'linear' });
		$('.c-overlay img').load(function() {
			var width = $('.c-overlay img').width();
			var height = $('.c-overlay img').height();
			console.log(width, height);
			if(width > height) {
				$('.c-overlay .c-container').css("width", "90%");
				console.log(1);

			} else {
				$('.c-overlay .c-container').css("height", "90%");
				console.log(2);
			}

			$('.c-overlay .c-container img').delay(100).velocity("fadeIn", { duration: 400, easing: 'linear' });
			$('.c-overlay .c-container .close').show();
		});
		overlaytoggleflag = true;
	} else {
		$('.c-overlay').velocity("fadeOut", { duration: 400, easing: 'linear' });
		$('.c-overlay-shield').velocity("fadeOut", { duration: 400, easing: 'linear' });
		$('.c-overlay .c-container img').remove();
		$('.c-overlay .c-container .close').hide();
		$('.c-overlay .c-container').attr("style", "");
		$('body').css('overflow', 'auto');
		overlaytoggleflag = false;
	}
}

function convertTwoZero(num) {
	if(num < 10) {
		return "0" + num;
	} else {
		return num;
	}
}

function scrollToBlock(name) {
	if(!scrolltoflag) {
		if(!$.browser.device) {
			scrolltoflag = true;
		}

		var tooffset;
		switch(name) {
			case 'home':
				tooffset = $('.rainbow').offset().top;
				break;
			case 'sponsor':
				tooffset = $('.mountainfront').offset().top + ((400 / 720) * window.innerHeight);
				break;
			case 'camp':
				tooffset = $('.itcamp-camp').offset().top - 40;
				break;
			case 'gallery':
				tooffset = $('.itcamp-gallery').offset().top - 90;
				break;
			case 'opinion':
				tooffset = $('.itcamp-opinion').offset().top - 90;
				break;
			case 'timeline':
				tooffset = $('.itcamp-contact').offset().top - 90;
				break;
			case 'faq':
				tooffset = $('.itcamp-contact .box-faq').offset().top - 160;
				break;
			case 'contact':
				tooffset = $('.itcamp-contact .box-contact > h2').offset().top;
				break;
			default:
				tooffset = 0;
				break;
		}

		$(window).scrollTop(tooffset);
	}
}
