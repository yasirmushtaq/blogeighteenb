(function($) {
	$(document).ready(function(){
		
    
		    $(document).on('mouseenter', '#hover-drop', function () {
		        $("#shop").slideDown( "slow" );
		        $('.shop-all-visibilty').removeClass('visible');
		        $('.product-1').removeClass('visible');
		        $('.product-2').removeClass('visible');
		        $('.product-3').removeClass('visible');
		        $('.product-4').removeClass('visible');
		    }).on('mouseleave', '#shop', function () {
		        $("#shop").slideUp( "slow" );
		    });
		    $(document).on('mouseenter', '#hover-drop2', function () {
		        $("#sub-learn").slideDown( "slow" );
		         $('.the-blog').removeClass('visible');
		        $('.the-science').removeClass('visible');
		        $('.the-faq').removeClass('visible');
		    }).on('mouseleave', '#sub-learn', function () {
		        $("#sub-learn").slideUp( "slow" );
		    });
		    $('.shop-all-link-item').hover(function(){
		     $('.shop-all-visibilty').addClass('visible');
		     	$('.product-1').removeClass('visible');
		        $('.product-2').removeClass('visible');
		        $('.product-3').removeClass('visible');
		        $('.product-4').removeClass('visible');
		        $('.product-5').removeClass('visible');
		    });
		    $('.product-link-item-1').hover(function(){
		     $('.product-1').addClass('visible');
		     $('.product-2').removeClass('visible');
		     $('.product-3').removeClass('visible');
		     $('.product-4').removeClass('visible');
		     $('.product-5').removeClass('visible');
		    });
		    $('.product-link-item-2').hover(function(){
		     $('.product-1').removeClass('visible');
		     $('.product-2').addClass('visible');
		     $('.product-3').removeClass('visible');
		     $('.product-4').removeClass('visible');
		     $('.product-5').removeClass('visible');
		    });
		    $('.product-link-item-3').hover(function(){
		     $('.product-1').removeClass('visible');
		     $('.product-2').removeClass('visible');
		     $('.product-3').addClass('visible');
		     $('.product-4').removeClass('visible');
		     $('.product-5').removeClass('visible');
		    });
		     $('.product-link-item-4').hover(function(){
		     $('.product-1').removeClass('visible');
		     $('.product-2').removeClass('visible');
		     $('.product-3').removeClass('visible');
		     $('.product-4').addClass('visible');
		     $('.product-5').removeClass('visible');
		    });
		      $('.product-link-item-5').hover(function(){
		     $('.product-1').removeClass('visible');
		     $('.product-2').removeClass('visible');
		     $('.product-3').removeClass('visible');
		     $('.product-4').removeClass('visible');
		     $('.product-5').addClass('visible');
		    });
		    $('.the-blog-item').hover(function(){
		    	$('.the-blog').addClass('visible');
		     $('.the-science').removeClass('visible');
		     $('.the-press').removeClass('visible');
		     $('.the-faq').removeClass('visible');
		    });
		    $('.the-science-item').hover(function(){
		    	$('.the-blog').removeClass('visible');
		     $('.the-science').addClass('visible');
		     $('.the-press').removeClass('visible');
		     $('.the-faq').removeClass('visible');
		    });
		     $('.the-press-item').hover(function(){
		    	$('.the-blog').removeClass('visible');
		    	$('.the-press').addClass('visible');
			    $('.the-faq').removeClass('visible');
			    $('.the-science').removeClass('visible');
		    });
		    $('.the-faq-item').hover(function(){
		    	$('.the-blog').removeClass('visible');
		    	$('.the-press').removeClass('visible');
		     $('.the-faq').addClass('visible');
		     $('.the-science').removeClass('visible');
		    });


		    $(document).on('click', ".toggle-open-button", function() {
		        $('#nav-mobile-menu').show("slow");
		        $('.toggle-open-button').hide();
		        $('.toggle-close-button').show();
		         });

			 $(document).on('click', '.toggle-close-button', function () {
			         $('#nav-mobile-menu').hide("slow");
			         $('.toggle-close-button').hide();
			         $('.toggle-open-button').show();
			          });


	});
})(jQuery);


(function($) {
	$(document).ready(function(){
		$(document).on('click', '.shop-arrow', function () {
	        	$('.shop-submenu').addClass("open");
	         });
			$(document).on('click', '.shop-back', function () {
	        	$('.shop-submenu').removeClass("open");
	         });

	});
})(jQuery);


(function($) {
	$(document).ready(function(){

		$(document).on('click', '.learn-arrow', function () {
	        	$('.learn-submenu').addClass("open");
	         });
			$(document).on('click', '.learn-back', function () {
	        	$('.learn-submenu').removeClass("open");
	         });
	});
})(jQuery);