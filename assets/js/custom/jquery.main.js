var transitionType = getTransitionType(),
tickClip = 75,
tickBackground = 1000,
heroBoxesCountVert = 0,
heroBoxesCountHor = 0;

jQuery(document).ready(function($){
	initSlick();
	initDropDown();
	initScrollToFixed();
	initNiceSelect();
	initMobileNav();
	initPopups();
	initBgCover();
	initSocialMove();
	initMatchHeight();
	filterArticles();
	initHeroVisual($);
	changePackBoxTitle($);
	initFixedScrollBlock($);
	initAnchors();
});

// page resize
jQuery(window).resize(function() {
	setTimeout(function(){ initAnchors(); }, 500);
});


function initMatchHeight() {
	jQuery('.methods .title').matchHeight();
	jQuery('.list-case .text').matchHeight();
	jQuery('.partner .body').matchHeight();
	jQuery('.methods .txt').matchHeight({
		byRow: false
	});
	jQuery('.section-outcomes .thumbnail .thumbnail-body').matchHeight();
}

function initBgCover() {
	jQuery('.bg-cover, .news-img').each(function() {
		var holder = jQuery(this);
		var image = holder.find('> img').hide();
		var imageSrc = image.prop('src');
		holder.css({
			backgroundImage: 'url(' + imageSrc + ')',
			backgroundPosition: '50% 50%',
			backgroundSize: 'cover'
		});
	});
}

function initSocialMove(){
	var win = jQuery(window);
	var slinks = function() {
		jQuery('.blog').each(function() {
			var object = jQuery(this).find('.social-links'),
			move   = jQuery(this).find('.blog-heading'),
			original = jQuery(this).find('.blog-row:last-child .blog-left');

			if(win.width() < 768) {
				object.appendTo(move);
			} else {
				object.appendTo(original);
			}
		});
	}

	slinks();
	win.on('load resize orientationchange',slinks);
}

// mobile menu init
function initMobileNav() {
	jQuery('.search-form').mobileNav({
		hideOnClickOutside: true,
		menuActiveClass: 'search-active',
		menuOpener: '.search-opener',
		menuDrop: '.search-drop'
	});
	jQuery('body').mobileNav({
		hideOnClickOutside: true,
		menuActiveClass: 'nav-active',
		menuOpener: '.nav-opener',
		menuDrop: '.nav-wrap'
	});
}

function randomInteger(min, max) {
	var rand = min + Math.random() * (max + 1 - min);
	rand = Math.floor(rand);
	return rand;
}

function getTransitionType() {
	var bodyStyle = document.body.style,
	type;

	if (bodyStyle.OTransform !== undefined) {
		type = 'OTransition';
	}
	if (bodyStyle.MozTransform !== undefined) {
		type = 'MozTransition';
	}
	if (bodyStyle.webkitTransform !== undefined) {
		type = 'webkitTransition';
	}
	if (bodyStyle.msTransform !== undefined) {
		type = 'msTransition';
	}
	if (bodyStyle.transform !== undefined) {
		type = 'transition';
	}
	return type;
}

// slick
function initSlick() {

	jQuery('.carousel.hero-carousel').on('init', function (event, slick) {
		jQuery('.menu-wrap').addClass('bg-1');
		jQuery('.menu-wrap .nav-ani').addClass('bg-1');
		var boxSize = getHeroBoxSize(),
		heroHeight = jQuery('.menu-wrap')[0].clientHeight,
		countVert = Math.ceil(heroHeight / boxSize),
		aniBottomHeight = heroHeight - (countVert - 1) * boxSize;

		jQuery('.menu-wrap .nav-ani.ani-bottom').css({
			height: aniBottomHeight+'px'
		})
		if (window.innerWidth > 767){
			var current = jQuery('.carousel.hero-carousel .visual .hero-video').first();
			if (current.length > 0){
				current[0].play();
			}
		}
	});

	jQuery('.carousel').not('.hero-carousel').slick({
	  arrows: false,
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
  });
	jQuery('.carousel.hero-carousel').slick({
		arrows: false,
		dots: true,
		accessibility: false,
		infinite: true,
		// speed: 500,
		speed: 0,
		autoplay: true,
		autoplaySpeed: GrowthPlay.homePageCarouselSpeed,
		// fadeOutDelay: 5000,
		fade: true,
		cssEase: 'linear',
		responsive:[{
			breakpoint: 767,
			settings:{
				speed: 500
			}
		}]
	});
	jQuery('.carousel-sm').slick({
	  arrows: true,
	  dots: true,
	  infinite: true,
	  speed: 500,
	  prevArrow: '<a href="#" class="slick-arrow slick-prev"></a>',
	  nextArrow: '<a href="#" class="slick-arrow slick-next"></a>'
  });

	jQuery('.carousel.hero-carousel').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		if (window.innerWidth < 768) return;

		jQuery('.carousel.hero-carousel .slick-dots button').attr('disabled', 'disabled');
		var el = jQuery('.carousel.hero-carousel [data-slick-index="' + currentSlide + '"]'),
		next = jQuery('.carousel.hero-carousel [data-slick-index="' + nextSlide + '"]');
		el.addClass('previous-slide');
		initHeroSlideChangePrepare(next)
		if (el.length){
			var player = el.find('.hero-video');
			if (player.length){
				player[0].pause();
			}
		}
	});
	jQuery('.carousel.hero-carousel').on('afterChange', function (event, slick, currentSlide) {
		if (window.innerWidth < 768) return;

		var el = jQuery('.carousel.hero-carousel [data-slick-index="' + currentSlide + '"]');
		initHeroSlideChange(el, currentSlide)
		if (el.length){
			var player = el.find('.hero-video');
			if (player.length){
				player[0].play();
			}
		}
	});

}

function setNavAniClass(el, slide){
	el.removeClass('bg-1');
	el.removeClass('bg-2');
	el.removeClass('bg-3');
	el.addClass('bg-'+(slide+1));
}

function clipTransitionReset() {
	var transition = {};
	transition[transitionType] = 'background '+tickBackground+'ms linear';
	// return transitionType+': background '+tickBackground+'ms linear'
	return transition;
}


function clipTransition(tick) {
	var transition = {};
	// return transitionType+': background '+tickBackground+'ms linear, clip '+tickClip+'ms linear '+(tick * tickClip)+'ms'
	transition[transitionType] = 'background '+tickBackground+'ms linear, clip '+tickClip+'ms linear '+(tick * tickClip)+'ms';
	return transition;
}

function getHeroBoxSize() {
	var boxSize = jQuery('.menu-wrap').outerWidth();

	if (boxSize <= 0){
		boxSize = 220;
	}
	if (boxSize > 500){
		boxSize = 270;
	}

	return boxSize;
}

function clipHorReset(boxSize) {
	return 'rect(0px, 0px, '+boxSize+'px, 0px)'
}
function clipVertToUpReset(boxSize) {
	return 'rect('+boxSize+'px, '+boxSize+'px, '+boxSize+'px, 0px)'
}
function clipVertToBottomReset(boxSize) {
	return 'rect(0px, '+boxSize+'px, 0px, 0px)'
}
function clipHorizontal(boxSize) {
	return 'rect(0px, '+boxSize+'px, '+boxSize+'px, 0px)'
}

function clipShow(boxSize) {
	return 'rect(0px, '+boxSize+'px, '+boxSize+'px, 0px)'
}

function initHeroSlideChangePrepare(el) {
	if (window.innerWidth < 768) return;

	var boxes = el.find('.boxes'),
	boxSize = getHeroBoxSize(),
	matrix = [],
	heroWidth = el[0].clientWidth,
	heroHeight = el[0].clientHeight,
	countHor = Math.ceil(heroWidth / boxSize),
	countVert = Math.ceil(heroHeight / boxSize);

	for (var y = 0; y < countHor; y++) {
		matrix[y] = new Array(countVert).fill(0);
	}
	var x = 1;
	for (var y = countVert-1; y >= 0; y--){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransitionReset());
			item.css({
				clip: clipVertToUpReset(boxSize),
			});
		}
	}
	var x = countHor-2;
	for (var y = countVert-1; y >= 0; y--){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransitionReset());
			item.css({
				clip: clipVertToUpReset(boxSize),
			});
		}
	}

	var y = countVert-1;
	for (var x = 0; x < countHor; x++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransitionReset());
			item.css({
				clip: clipHorReset(boxSize),
			});
		}
	}

	var y = Math.floor(countVert/2)-1;
	for (var x = 0; x < countHor; x++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransitionReset());
			item.css({
				clip: clipHorReset(boxSize),
			});
		}
	}

	for (var y = 0; y < countVert; y++){
		for (var x = 0; x < countHor; x++){
			if (matrix[x][y] == 0){
				matrix[x][y] = 1;
				var item = boxes.find('.col-'+x+'-row-'+y);
				item.css(clipTransitionReset());
				item.css({
					clip: clipHorReset(boxSize),
				});
			}
		}
	}

	el.find('.visual-img').css({
		opacity: 0,
		transition: ''
	});
	el.find('.visual-body').css({
		opacity:0,
		transition: ''
	});
}

function initHeroSlideChange(el, currentSlide) {
	if (window.innerWidth < 768) return;
	var boxes = el.find('.boxes'),
	boxSize = getHeroBoxSize(),
	matrix = [],
	heroWidth = el[0].clientWidth,
	heroHeight = el[0].clientHeight,
	countHor = Math.ceil(heroWidth / boxSize),
	countVert = Math.ceil(heroHeight / boxSize),
	navMenu = jQuery('.menu-wrap'),
	navAniBottom = navMenu.find('.nav-ani.ani-bottom'),
	navAniTop = navMenu.find('.nav-ani.ani-top');

	for (var y = 0; y < countHor; y++) {
		matrix[y] = new Array(countVert).fill(0);
	}

	var x = 1;
	for (var y = 0; y < countVert; y++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransition(countVert - y - 1));
			item.css({
			 clip: clipShow(boxSize),
		 });
		}
	}

	var x = countHor-2,
	tickShift = 2;
	for (var y = 0; y < countVert; y++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransition(countVert - y - 1 + tickShift));
			item.css({
				clip: clipShow(boxSize),
			});
		}
	}

	var y = countVert-1,
	tickShift = 3;
	for (var x = 0; x < countHor; x++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransition(x + tickShift));
			item.css({
				clip: clipShow(boxSize),
			});
		}
	}

	var y = Math.floor(countVert/2)-1,
	tickShift = 5;
	for (var x = 0; x < countHor; x++){
		if (matrix[x][y] == 0){
			matrix[x][y] = 1;
			var item = boxes.find('.col-'+x+'-row-'+y);
			item.css(clipTransition(x + tickShift));
			item.css({
				clip: clipShow(boxSize),
			});
		}
	}

	var tickShift = 6;
	for (var y = 0; y < countVert; y++){
		for (var x = 0; x < countHor; x++){
			if (matrix[x][y] == 0){
				matrix[x][y] = 1;
				var item = boxes.find('.col-'+x+'-row-'+y);
				item.css(clipTransition(x + tickShift));
				item.css({
					clip: clipShow(boxSize),
				});
			}
		}
	}
	var callbackDelay = (x + tickShift) * tickClip;

	el.find('.visual-img').css({
		opacity: 1,
		transition: 'opacity '+tickClip+'ms ease-in-out '+callbackDelay+'ms'
	});
	el.find('.visual-body').css({
		opacity:1,
		transition: 'opacity '+tickClip+'ms ease-in-out '+callbackDelay+'ms'
	});

	setNavAniClass(navAniBottom, currentSlide);
	setNavAniClass(navAniTop, currentSlide);

	navAniTop.addClass('active');
	navAniBottom.addClass('active');

	setTimeout(function () {
		jQuery('.previous-slide').removeClass('previous-slide');
		// jQuery('.carousel.hero-carousel').slick('slickSetOption', 'accessibility', true, true);
		jQuery('.carousel.hero-carousel .slick-dots button').removeAttr('disabled');
		setNavAniClass(navMenu, currentSlide);

		setTimeout(function () {
			navAniTop.removeClass('active');
			navAniBottom.removeClass('active');
		}, 300);
	}, callbackDelay);
}

function heroVisualCreate($) {
	$('.carousel.hero-carousel .visual').each(function (index, element) {
		var el = $(this),
		boxSize = getHeroBoxSize(),
		heroWidth = window.innerWidth,
		heroHeight = window.innerHeight,
		countHor = Math.ceil(heroWidth / boxSize),
		countVert = Math.ceil(heroHeight / boxSize);

		var boxes = $('<div/>', {
			class: 'boxes'
		}).prependTo(el);
		for (var x = 0; x < countHor; x++){
			for(var y = 0; y < countVert; y++){
				var itemClass = 'itm col-'+x+'-row-'+y,
				rnd = randomInteger(1, 12),
				level = 0;
				if (rnd <= 6){
					itemClass += ' level-'+rnd;
					level = rnd;
				}
				var box = $('<div/>', {
					class: itemClass
				}).css({
					width: boxSize+'px',
					height: boxSize+'px',
					left: (x*boxSize)+'px',
					top: (y*boxSize)+'px',
				})
				.data('level', level)
				.data('col', x)
				.data('row', y)
				.appendTo(boxes);
			}
		}
	});
}

function heroVisualResize($) {
	var heroCarousel = $('.carousel.hero-carousel'),
	boxSize = getHeroBoxSize(),
	heroWidth = window.innerWidth,
	heroHeight = window.innerHeight,
	countHor = Math.ceil(heroWidth / boxSize),
	countVert = Math.ceil(heroHeight / boxSize);

	if (countHor != heroBoxesCountHor || countVert != heroBoxesCountVert){
		heroBoxesCountHor = countHor;
		heroBoxesCountVert = countVert;

		if (window.innerWidth < 768) return;

		heroCarousel.find('.visual .boxes').remove();

		heroVisualCreate($);

	}

}

function initHeroVisual($) {
	heroVisualCreate($);
	setTimeout(heroBoxesAnimation, 1500);
	$(window).scroll(function (e) {
		if ($(window).scrollTop() < 100) setTimeout(heroBoxesAnimation, 1500);
	});

	$(window).on('resize', function (e) {
		heroVisualResize($);
	});
}

function heroBoxesAnimation() {
	if (window.innerWidth < 768 || jQuery(window).scrollTop() > 100) return;
	var currentBoxes = jQuery('.visual.slick-current .boxes .itm');
	currentBoxes.each(function (index, element) {
		var el = jQuery(this),
		rnd = randomInteger(0, 10);
		if (rnd > 5){
			var delta = rnd - 8,
			level = el.data('level'),
			newLevel = level + delta;
			if (newLevel < 0) newLevel = 0;
			if (newLevel > 6) {
				if (level == 6) newLevel = 5;
			}

			var newClass = 'itm col-'+el.data('col')+'-row-'+el.data('row');
			if (newLevel > 0) newClass += ' level-'+newLevel;

			el[0].className = newClass;
		}
	});

	setTimeout(heroBoxesAnimation, 1500);
}



// add classes if item has dropdown
function initDropDown() {
	jQuery('.nav li').each(function() {
		var item = jQuery(this);
		var drop = item.find('ul');
		var link = item.find('a').eq(0);
		if(drop.length) {
			item.addClass('hasdrop');
			if(link.length) link.addClass('hasdrop-a');
		}
	});

	var win = jQuery(window),
	opener = jQuery('.hasdrop-a'),
	header = jQuery('#header'),
	drop = jQuery('.dropdown').hide(),
	hasDrop = jQuery('.hasdrop');

	opener.click(function(){
		$parent = jQuery(this).closest('.nav > li');
		$parent.siblings().find('.dropdown').slideUp(300);
		$parent.siblings().removeClass('drop-active');
		$parent.find('.dropdown').slideToggle(300);
		$parent.toggleClass('drop-active');

		return false;
	});

	jQuery('.hasdrop.drop-active .dropdown').show();
}

// scroll to fixed
function initScrollToFixed() {
	var block = jQuery('.menu-wrap'),
  pusher = jQuery('main.pusher'),
  win = jQuery(window),
  extraBlock = jQuery('.carousel').outerHeight(),
  activeClass = 'menu-fixed';
		// activeClass = 'menu-absolute';

	   if (!extraBlock) return;

	   var checkPosition = function() {
		  if(win.scrollTop() > extraBlock) {
			 block.removeClass(activeClass);
			 block.addClass('animate');
			 pusher.removeClass('no-border');
		 } else {
			 block.addClass(activeClass);
			 block.removeClass('animate');
			 pusher.addClass('no-border');
		 }
	 };

	 checkPosition();
	 win.on('load resize orientationchange scroll',checkPosition);
 }

// initialize nice select
function initNiceSelect() {
	jQuery('select').niceSelect();
}

function initPopups() {
	jQuery('.popup-holder').contentPopup({
		mode: 'click',
		btnOpen: '.opener',
		openClass: 'active'
	});
}

function filterArticles() {
	jQuery('select.cat-filter').change(function(){
		var value = jQuery(this).val();
		var cat_param = '';
		if(value){
			cat_param = "?category=" + value;
		}
		var url = window.location.href.split('?')[0] + cat_param;
		location.href = url;
	});
}

function changePackBoxTitle($) {
	var current_title = jQuery(".six_pack-box .title").text();
	jQuery(".six_pack-box .box-list li a").mouseenter(function(){
		jQuery(".six_pack-box .title").text(jQuery(this).text());	
	}).mouseleave(function(){
   		jQuery(".six_pack-box .title").text(current_title);
	});
}

function initFixedScrollBlock($) {
	$('main').fixedScrollBlock({
	    slideBlock: '.six_pack-box'
	});
}

// initialize smooth anchor links
function initAnchors() {

	new SmoothScroll({
		anchorLinks: '.smooth-anchor'
	});
}
