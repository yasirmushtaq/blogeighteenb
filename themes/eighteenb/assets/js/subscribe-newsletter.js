/*////////////////////////////////////*/        
/* Footer Newsletter SubscriptionBox */
/*////////////////////////////////////*/
(function($) {
       
        $(document).ready(function() {   
           $("#email_subscription").change(function(e){
             var emailaddress = $("#email_subscription").val(); 
             if(IsEmail(emailaddress) == false){
                  $('#valid-email').show();
                  return false;
                }else if(IsEmail(emailaddress) == true){
                  $('#valid-email').hide();
                  return true;
                }

            }); 
        });

       // Valid Email Address
       function IsEmail(emailaddress) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(emailaddress)) {
            return false;
          }else{
            return true;
          }
        }

})(jQuery);

(function($) {
       $(document).ready(function() {   
           $(".subscribe-email-submit").click(function(e){
            $('#subcriber-toast').show();
            var emailaddress = $("#email_subscription").val(); 
            if(IsEmail(emailaddress) == false){
                $('#subcriber-toast').hide();
                  $('#subcriber-toast-valid-error').show().delay(5000).fadeOut();
                  return false;
                }
            var data = JSON.stringify({
                    "email": $("#email_subscription").val(),
                    "source": "blog_footer"
                    });

                    var xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;

                    xhr.addEventListener("readystatechange", function () {
                    if (this.readyState === this.DONE) {
                       // console.log(this.responseText);
                        if (this.responseText === ''){
                            $('#subcriber-toast').hide();
                            $('#email_subscription').hide();
                            $('#subs-from-btn').hide();
                            $('#on-the-list').show().delay(5000).fadeIn();
                           // $('#subcriber-toast-success').show().delay(5000).fadeOut();
                           // window.location = "https://www.eighteenb.com/subscribe_thankyou";
                        }
                        if (this.responseText !== ''){
                            $('#subcriber-toast').hide();
                            $('#subcriber-toast-error').show().delay(5000).fadeOut();
                        }
                    }
                    });

                    xhr.open("POST", "https://api.staging.ecomm.18b.bol.tt/api/email_subscriptions");
                    xhr.setRequestHeader("content-type", "application/json");  
                    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');

                    xhr.send(data);
                     //console.log(xhr.response);


             }); 
        });

       // Valid Email Address
       function IsEmail(emailaddress) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(emailaddress)) {
            return false;
          }else{
            return true;
          }
        }
})(jQuery);


/*////////////////////////////////////*/        
/* Content Newsletter SubscriptionBox */
/*////////////////////////////////////*/
(function($) {
       $(document).ready(function() {   
           $("#content-subscriber-email").change(function(e){
             var emailaddress = $("#content-subscriber-email").val(); 
             if(IsEmail(emailaddress) == false){
                  $('#content-valid-email').show();
                  return false;
                }else if(IsEmail(emailaddress) == true){
                  $('#content-valid-email').hide();
                  return true;
                }

            }); 
        });
       // Valid Email Address
       function IsEmail(emailaddress) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(emailaddress)) {
            return false;
          }else{
            return true;
          }
        }

})(jQuery);

(function($) {
       $(document).ready(function() {   
           $(".content-subscribe-email-submit").click(function(e){
            $('#subcriber-toast').show();
            var emailaddress = $("#content-subscriber-email").val(); 
            if(IsEmail(emailaddress) == false){

                  $('#subcriber-toast-valid-error').show().delay(5000).fadeOut();
                  $('#subcriber-toast').hide();
                  return false;
                }
            var data = JSON.stringify({
                    "email": $("#content-subscriber-email").val(),
                    "source": "blog_content_box"
                    });

                    var xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;

                    xhr.addEventListener("readystatechange", function () {
                    if (this.readyState === this.DONE) {
                        //console.log(this.responseText);
                        if (this.responseText === ''){
                            $('#subcriber-toast').hide();
                            $('.content-subscriber-email').hide();
                            $('.content-subscribe-email-submit').hide();
                            $('.on-the-list-content').show().delay(5000).fadeIn();
                           // $('#subcriber-toast-success').show().delay(5000).fadeOut();
                           // window.location = "https://www.eighteenb.com/subscribe_thankyou";
                        }
                        if (this.responseText !== ''){
                            $('#subcriber-toast').hide();
                            $('#subcriber-toast-error').show().delay(5000).fadeOut();
                        }
                    }
                    });

                    xhr.open("POST", "https://api.staging.ecomm.18b.bol.tt/api/email_subscriptions");
                    xhr.setRequestHeader("content-type", "application/json");  
                    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');

                    xhr.send(data);
                     //console.log(xhr.response);


             }); 
        });
       // Valid Email Address
       function IsEmail(emailaddress) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(emailaddress)) {
            return false;
          }else{
            return true;
          }
        }
       
})(jQuery);



/*////////////////////////////////////*/        
/* PopUp Newsletter SubscriptionBox */
/*////////////////////////////////////*/
(function($) {
       $(document).ready(function() {   
           $("#popup-email").change(function(e){
             var emailaddress = $("#popup-email").val(); 
             if(IsEmail(emailaddress) == false){
                  $('#popup-valid-email').show();
                  return false;
                }else if(IsEmail(emailaddress) == true){
                  $('#popup-valid-email').hide();
                  return true;
                }

            }); 
        });

       // Valid Email Address
       function IsEmail(emailaddress) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(emailaddress)) {
            return false;
          }else{
            return true;
          }
        }

})(jQuery);

(function($) {
$(document).ready(function() {   
   $("#popup-email-subscribe").click(function(e){
    $('#subcriber-toast').show();
    var emailaddress = $("#popup-email").val(); 
    if(IsEmail(emailaddress) == false){

           $('#subcriber-toast-valid-error').show().delay(5000).fadeOut();
          $('#subcriber-toast').hide();
          return false;
        }
    var data = JSON.stringify({
            "email": $("#popup-email").val(),
            "source": "blog_poup"
            });

            var xhr = new XMLHttpRequest();
            xhr.withCredentials = false;

            xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                //console.log(this.responseText);
                if (this.responseText === ''){
                    $('#subcriber-toast').hide();
                    //$('#subcriber-toast-success').show().delay(5000).fadeOut();
                    var date = new Date();
                    var daysToLive = 90;
                    date.setTime(date.getTime()+(daysToLive*24*60*60*1000));
                    var expires = "; expires="+date.toGMTString();
                    //Set Cookie
                    document.cookie = "subscriber_info="+ emailaddress +"; expires="+ expires +"; domain=.eighteenb.com; path=/";
                   
                    //window.location = "https://www.eighteenb.com/subscribe_thankyou";
                    
                     $('#subcriber-toast').hide();
                    $('#popup-email').hide();
                    $('#popup-email-subscribe').hide();
                    $('.on-the-list-popup').show().delay(5000).fadeIn();
                }
                if (this.responseText !== ''){
                    $('#subcriber-toast').hide();
                    $('#subcriber-toast-error').show().delay(5000).fadeOut();
                }
            }
            });

            xhr.open("POST", "https://api.staging.ecomm.18b.bol.tt/api/email_subscriptions");
            xhr.setRequestHeader("content-type", "application/json");  
            xhr.setRequestHeader('Access-Control-Allow-Origin', '*');

            xhr.send(data);
             //console.log(xhr.response);


     }); 
});

// Valid Email Address
function IsEmail(emailaddress) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(emailaddress)) {
    return false;
  }else{
    return true;
  }
}
})(jQuery);

        