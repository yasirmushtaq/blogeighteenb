(function ($) {
    "use strict";
/*--
Commons Variables
-----------------------------------*/
var windows = $(window);
    

 /*----------------------------------- 
    Newsletter Popup State 
----------------------------------*/ 

jQuery(document).ready(function() {

/*var referrer = document.referrer;
if(referrer === 'https://eighteenb.com/') {
     $("#newsletter-popup-area").addClass("d-none");
}*/

// Read cookie
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}

var popupMState = readCookie("subscriber_info");
var popupState = readCookie("popup_info");
//alert(popupMState);
//alert(popupState);
if(popupMState !== null && popupState === 'shown') {
     $("#newsletter-popup-area").css("display","none");
}
else if(popupMState !== null && popupState === null){
	$("#newsletter-popup-area").css("display","none");
}
else if(popupMState === null && popupState === 'shown'){
	$("#newsletter-popup-area").css("display","none");
}
else if(popupMState === null && popupState === null){
	$("#newsletter-popup-area").css("display","block");
}else{
	$("#newsletter-popup-area").css("display","block");
}


});


/*--
    Header Search 
-----------------------------------*/
var $headerSearchToggle = $('.header-search-toggle');
var $headerSearchForm = $('.header-search-form');
    
$headerSearchToggle.on('click', function() {
    var $this = $(this);
    if(!$this.hasClass('open')) {
        $this.addClass('open').find('i').removeClass('fa fa-search').addClass('fa fa-times');
        $headerSearchForm.slideDown();
    } else {
        $this.removeClass('open').find('i').removeClass('fa fa-times').addClass('fa fa-search');
        $headerSearchForm.slideUp();
    }
});
    
/*--
    - Background Image
------------------------------------------*/
var $backgroundImage = $('.bg-image');
$backgroundImage.each(function() {
    var $this = $(this),
        $bgImage = $this.data('bg');
    $this.css('background-image', 'url('+$bgImage+')');
});

/*--
    Mobile Menu
-----------------------------------*/
var mainMenuNav = $('.main-menu');
mainMenuNav.meanmenu({
    meanScreenWidth: '991',
    meanMenuContainer: '.mobile-menu',
    meanMenuClose: '<span class="menu-close"></span>',
    meanMenuOpen: '<span class="menu-bar"></span>',
    meanRevealPosition: 'right',
    meanMenuCloseSize: '0',
});
 
/*----------------------------------- 
    Newsletter Popup Active 
----------------------------------*/ 

$("#close-newsletter-popup").on("click", function(){
	var date = new Date();
    var daysToLive = 90;
    date.setTime(date.getTime()+(daysToLive*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();

    $("#newsletter-popup-area").css("display","none");
     document.cookie = "popup_info=shown; expires="+ expires +"; domain=.eighteenb.com; path=/";
});
$("#close-newsletter-popup-link").on("click", function(){
	var date = new Date();
    var daysToLive = 90;
    date.setTime(date.getTime()+(daysToLive*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();

    $("#newsletter-popup-area").css("display","none");
    document.cookie = "popup_info=shown; expires="+ expires +"; domain=.eighteenb.com; path=/";
});

/*------------------------------ 
    Nice Select Active
---------------------------------*/
$('select').niceSelect();

/* -------------------------
    Venobox Active
* --------------------------*/  
$('.venobox').venobox({
    border: '10px',
    titleattr: 'data-title',
    numeratio: true,
    infinigall: true
}); 

/*----------------------------------
    ScrollUp Active
-----------------------------------*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});


$(function () {
    $("div.post-item").slice(0, 10).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div.post-item:hidden").slice(0, 4).slideDown();
        if ($("div.post-item:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        
    });
});

$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed').fadeIn(700);
  else sticky.removeClass('fixed');
});

jQuery(document).ready(function() {
              $('.filter-trigger').on("click", function() {
                $('.filter').find('li').removeClass("active");
                $(this).addClass("active").fadeIn(1000);
                var theId = $(this).attr('id');
                var newElement = document.getElementsByClassName("post-item");
                $(newElement).each(function(index, item) {
                  $(this).addClass("hidden").fadeOut(1000);
                });
                lookFor(theId);
                function lookFor (id) {
                  var x = document.getElementsByClassName(id);
                  for (var i=0; i<=x.length; i++) {
                    $(x[i]).removeClass("hidden").addClass("showed").fadeIn(1000);
                  }
                 }
              });
            });

jQuery(document).ready(function() {
              $('.filter-triggers').on("click", function() {
                $('.filters').find('li').removeClass("active");
                $(this).addClass("active").fadeIn(1000);
                var theId = $(this).attr('id');
                var newElement = document.getElementsByClassName("post-box");
                $(newElement).each(function(index, item) {
                  $(this).addClass("hidden").fadeOut(1000);
                });
                lookFor(theId);
                function lookFor (id) {
                  var x = document.getElementsByClassName(id);
                  for (var i=0; i<=x.length; i++) {
                    $(x[i]).removeClass("hidden").addClass("showed").fadeIn(1000);
                  }
                 }
              });
            });
})(jQuery);	