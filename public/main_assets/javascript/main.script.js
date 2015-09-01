$.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
$.browser.edge = (/edge/i.test(navigator.userAgent.toLowerCase()));
var isSafari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
if(isSafari) { $.browser.device = true; }
//$.browser.device = true;

var layerSet = [];
var layerlength;

var scrolltoflag = false;
var navbarflag = false;
var isDinocuteJumping = false;
var walkdelayflag = false;
var RightKeyProcessed = false, Rightkeydown = false;
var LeftKeyProcessed = false, Leftkeydown = false;
var RemainAnimDinoCute = false;
var wavebackelem, wavefrontelem;
var jumpAudio;

var dinocuteElem;
var navbarElem;
var cShield, cOverlayElem, cContainer;
var sShield, sOverlayElem, sContainer;
var overlaytoggleflag = false;
var loadflag = {};
var overlaysharetoggleflag = false;
var cimage;

var oldwinScrollY;

function register() {
	var galleryElem = $(".itcamp-gallery ul li");
	var timelineDescriptElem = $(".timeline-description span");
	var itcampContactOffsetY = $('.itcamp-contact').offset().top;

	dinocuteElem = $(".dinocute");
	cShield = $('.c-overlay-shield');
	cOverlayElem = $('.c-overlay');
	cContainer = cOverlayElem.find('.c-container');
	sShield = $('.s-overlay-shield');
	sOverlayElem = $('.s-overlay');
	sContainer = sOverlayElem.find('.s-container');
	wavebackelem = $(".wavebackbg");
	wavefrontelem = $(".wavefrontbg");
	navbarElem = $(".navbar");
	oldwinScrollY = 0;

	$(".layer").each(function() {
		layerSet.push($(this));
	});
	layerlength = layerSet.length;

	if(!$.browser.device) {
		galleryElem.mouseover(function() {
			$(this).stop().animate({
				scale: 1.2,
				z: 0
			}, 6, 'linear');
		});

		galleryElem.mouseout(function() {
			$(this).stop().animate({
				scale: 1,
				z: 0
			}, 6, 'linear');
		});

		timelineDescriptElem.mouseover(function() {
			$(this).stop().animate({
				scale: 1.2,
				z: 0
			}, 6, 'linear');
		});

		timelineDescriptElem.mouseout(function() {
			$(this).stop().animate({
				scale: 1,
				z: 0
			}, 6, 'linear');
		});
	}

	dinocuteElem.click(function() {
		if(!isDinocuteJumping) {
			isDinocuteJumping = true;
			var oldsrc = $(this).attr("src");
			$(this).attr("src", "main_assets/img/timeline/dinocute_jumping.gif");
			$(this).width("82px");
			setTimeout(function() {
				jumpAudio.play();
			}, 300);
			setTimeout(function() {
				dinocuteElem.attr("src", oldsrc);
				dinocuteElem.width("80px");
				isDinocuteJumping = false;
			}, 2100);
		}
	});

	$(window).keydown(function(event) {
		if($(window).scrollTop() >= itcampContactOffsetY - (window.innerHeight / 2) && $(window).scrollTop() <= itcampContactOffsetY + (window.innerHeight / 2) ) {

			RemainAnimDinoCute = true;
			var dinoWalkPos;

			if(event.keyCode == 39) {
				Rightkeydown = true;
				if(!walkdelayflag) {
					walkdelayflag = true;
					dinoWalkPos = (parseFloat(dinocuteElem.css("left")) * 100) / 1050;
					dinocuteElem.css("transform", "ScaleX(1)");
					if(dinoWalkPos < 100) {
						dinocuteElem.css("left", (dinoWalkPos+0.1)+"%");
					}
					setTimeout(function() {
						walkdelayflag = false;
					}, 1000/60);
				}
				if(!RightKeyProcessed) {
					dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_walking.gif");
					RightKeyProcessed = true;
				}
			}

			if(event.keyCode == 37) {
				Leftkeydown = true;
				if(!walkdelayflag) {
					walkdelayflag = true;
					dinoWalkPos = (parseFloat(dinocuteElem.css("left")) * 100) / 1050;
					dinocuteElem.css("transform", "ScaleX(-1)");
					if(dinoWalkPos > 0) {
						dinocuteElem.css("left", (dinoWalkPos-0.1)+"%");
					}
					setTimeout(function() {
						walkdelayflag = false;
					}, 1000/60);
				}
				if(!LeftKeyProcessed) {
					dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_walking.gif");
					LeftKeyProcessed = true;
				}
			}
		} else if(RemainAnimDinoCute) {
			dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_still.gif");
			calcDianocutePos();
			RemainAnimDinoCute = false;
			Rightkeydown = false;
			RightKeyProcessed = false;
			Leftkeydown = false;
			LeftKeyProcessed = false;
		}
	});

	$(window).keyup(function(event) {
		if(event.keyCode == 39) {
			if(!Leftkeydown) {
				dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_still.gif");
				RemainAnimDinoCute = false;
			}
			Rightkeydown = false;
			RightKeyProcessed = false;
		}
		if(event.keyCode == 37) {
			if(!Rightkeydown) {
				dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_still.gif");
				RemainAnimDinoCute = false;
			}
			Leftkeydown = false;
			LeftKeyProcessed = false;
		}
	});

	if($.browser.device) {
		cContainer.attr("onclick", "overlayToggle()");
	}
}

function prepare() {
	calcDianocutePos();
	smokeAnimateRnFn();
	$(".itcamp-head .background").height(window.innerHeight);
	if(!$.browser.device && window.innerWidth > 1263) {
		for(i = 0; i < layerlength; i++) {
			layerSet[i].attr("data-origOffsetY", parseInt(layerSet[i].offset().top + parseInt(layerSet[i].attr("data-addoffsety"))));
		}
		for(i = 0; i < layerlength; i++) {
			$.Velocity.hook(layerSet[i], "translateY", parseInt(layerSet[i].attr("data-origOffsetY"))+"px");
		}
		$("body").addClass("parallax");
		if($.browser.edge) {
			$("body").height($(".dirtfront").offset().top + $(".dirtfront").height() - 5);
		} else {
			$("body").height($(".dirtfront").offset().top + $(".dirtfront").height() + 395);
		}
	} else {
		$("body").addClass("static");
	}
}

function smokeAnimateFn() {
	$(".smoke").animate({top: '-70px', opacity: '1'}, 1200, 'linear').animate({top: '-100px', opacity: '0.0'}, 1600, 'linear', function() {
		$(this).css("top", "-45px");
		$(this).css("opacity", "0");
	});
}

function smokeAnimateRnFn() {
	smokeAnimateFn();
	setInterval(function() { smokeAnimateFn() }, 6300);
}

function calcDianocutePos() {
	var d = new Date();
	var t = d.getTime();
	if(t < 1441040400000) {
		dinocuteElem.css("left", 0+"%");
		dinocuteElem.attr("src", "main_assets/img/timeline/dinocute_still.gif");
	} else if(t < 1445619600000) {
		dinocuteElem.css("left", (normalize(1441040400000, 1445619600000, t) * 18)+"%");
	} else if(t < 1446310800000) {
		dinocuteElem.css("left", (18 + (normalize(1445619600000, 1446310800000, t) * 20))+"%");
	} else if(t < 1447520400000) {
		dinocuteElem.css("left", (38 + (normalize(1446310800000, 1447520400000, t) * 22))+"%");
	} else if(t < 1447952400000) {
		dinocuteElem.css("left", (60 + (normalize(1447520400000, 1447952400000, t) * 20))+"%");
	} else if(t < 1449680400000) {
		dinocuteElem.css("left", (80 + (normalize(1447952400000, 1449680400000, t) * 20))+"%");
	} else {
		dinocuteElem.css("left", 100+"%");
	}
}


function normalize(low, high, current) {
	var distance = high - low;
	return (current - low) / distance;
}

function enlarge(num) {
	var url = "main_assets/img/pic/org_"+convertTwoZero(num)+".jpg";

	cContainer.append("<img src='"+url+"' />");
	overlayToggle(num, url);
}

function overlayToggle(num, url) {
	if(!overlaytoggleflag) {
		$('body').css('overflow', 'hidden');
		cShield.velocity("fadeIn", { duration: 400, easing: 'linear' });
		cOverlayElem.velocity("fadeIn", { duration: 400, easing: 'linear', complete: function() {
			if(loadflag[num]) {
				predictSize();
			}
		} });
		cimage = cContainer.find('img');
		cimage.load(function() {
			predictSize();
			loadflag[num] = true;
		});
		cimage.delay(250).velocity("fadeIn", { duration: 400, easing: 'linear' });
		cContainer.find('.close').show();
		overlaytoggleflag = true;
	} else {
		cOverlayElem.velocity("fadeOut", { duration: 400, easing: 'linear' });
		cShield.velocity("fadeOut", { duration: 400, easing: 'linear' });
		cimage.remove();
		cContainer.find('.close').hide();
		cContainer.attr("style", "");
		$('body').css('overflow', 'auto');
		overlaytoggleflag = false;
	}
}

function predictSize() {
	if(overlaytoggleflag) {
		var width = cimage.width();
		var height = cimage.height();
		console.log(width, height);
		if(width > height) {
			cContainer.css("width", "90%");
			cimage.css("width", "100%");
			cContainer.css("height", "");
			width = cimage.width();
			height = cimage.height();
			if(height > window.innerHeight) {
				cContainer.css("height", "90%");
				cContainer.css("width", "");
				cimage.css("width", "");
			}
		} else {
			cContainer.css("height", "90%");
			cContainer.css("width", "");
			cimage.css("width", "");
			width = cimage.width();
			height = cimage.height();
			if(width > window.innerWidth) {
				cContainer.css("width", "90%");
				cimage.css("width", "100%");
				cContainer.css("height", "");
			}
		}
	}
}

function overlayShareToggle() {
	if(!overlaysharetoggleflag) {
		$('body').css('overflow', 'hidden');
		sShield.velocity("fadeIn", { duration: 400, easing: 'linear' });
		sOverlayElem.velocity("fadeIn", { duration: 400, easing: 'linear' });
		sContainer.find('.close').show();
		overlaysharetoggleflag = true;
	} else {
		sOverlayElem.velocity("fadeOut", { duration: 400, easing: 'linear' });
		sShield.velocity("fadeOut", { duration: 400, easing: 'linear' });
		sContainer.find('.close').hide();
		$('body').css('overflow', 'auto');
		overlaysharetoggleflag = false;
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

$(document).ready(function() {
	$(window).scrollTop(0);
	$('body').css('overflow', 'hidden');

	jumpAudio = new Audio('main_assets/sound/MarioJump.wav');
})



$(window).load(function() {

	register();
	prepare();

	$('.preloader').delay(1500).velocity("fadeOut", { duration: 400, easing: 'linear', complete:function() {
		$('body').css('overflow', 'auto');
	} });
});

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
		wavebackelem.stop().animate({
			backgroundPositionX: -(windowScrollY * 0.06),
			z: 0
		}, 1200, 'easeOutCubic');
		wavefrontelem.stop().animate({
			backgroundPositionX: (windowScrollY * 0.16),
			z: 0
		}, 1200, 'easeOutCubic');
	}
	if($(window).scrollTop() > 450) {
		if(!navbarflag) {
			navbarElem.stop().animate({
				top: '0px',
				z: 0
			}, 450, 'linear');
			navbarflag = true;
		}
	} else if($(window).scrollTop() == 0) {
		if(navbarflag) {
			navbarElem.stop().animate({
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
	$(".itcamp-head .background").height(window.innerHeight);
	prepare();
	predictSize();
})
