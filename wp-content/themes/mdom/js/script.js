var $=jQuery;
$(document).ready(function(){
	Fancybox.bind("[data-fancybox]", {
	  
	});
	$('.visas > div').click(function(){
		$('.visas > div').removeClass('active');
		$(this).addClass('active');
		$('.tab-content > div').hide();
		$('.tab-content > div').eq($(this).index()).show();
		$('.tab-content > div').eq($(this).index()).find('.sl').not('.slick-initialized').slick({
			slidesToShow:1,
			arrows:true,
		});
	});
	$('.visas > div:first-child').trigger('click');
	$('.type .head').click(function(){
		$(this).toggleClass('active');
		$(this).next().slideToggle(250);
	});
	$('#regions .m').click(function(){
		$('#regions .m').removeClass('active');
		$(this).addClass('active');
		$('#regions .p').removeClass('active');
		$('#regions .p[data-id='+($(this).attr('data-id')*1-1)+']').addClass('active');
		$('#regions .reg').hide();
		$('#regions .reg').eq($(this).index()).show();
	});
	$('#regions .m:last-child').trigger('click');
	$('#regions .p').click(function(){
		$('#regions .p').removeClass('active');
		$(this).addClass('active');
		$('#regions .reg').hide();
		$('#regions .m').removeClass('active');
		var i=$(this).attr('data-id')*1+1;
		$('#regions .m.m'+i).addClass('active');
		$('#regions .reg').eq($(this).attr('data-id')).show();
	});
	$('.open-menu').click(function(){
		$('header nav').fadeToggle(250);
	});
	$('.tomap').click(function(){
		$('body,html').animate({
				scrollTop:$('#map').offset().top
			},500);
	});
	var width=$('body').width();
	if(width<767) {
		$('header nav').append($('header .lang'));
	}
	$('nav .anchor a').click(function(e){
		e.preventDefault();
		var t=$(this).attr('href');
		if($(t).length) {
			$('body,html').animate({
				scrollTop:$(t).offset().top
			},500);
		} else {
			window.location.href="/"+t;
		}
	});
	$('.mgallery').slick({
		slidesToShow:1,
		fade:true,
		arrows:false,
		asNavFor:'.dgallery',
	});
	$('.dgallery').slick({
		slidesToShow:6,
		arrows:false,
		asNavFor:'.mgallery',
		focusOnSelect:true,
		swipeToSlide:true,
		responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 5
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 500,
	      settings: {
	        slidesToShow: 3
	      }
	    }
	  ]
	});
});