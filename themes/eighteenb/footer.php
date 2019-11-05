<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	 <!--Footer section start-->
     <footer class="footer-section section bg-dark">

			<!--Footer Top start-->
			<div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
				<div class="container">
					<div class="row row-25">
			
						<!--Footer Widget start-->
						<div class="footer-widget col-lg-5 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
							<h4 class="title"><span class="text">---SHOPING---</span></h4>
							<ul class="ft-menu">
								<li><a href="https://www.eighteenb.com/holidaysets/">Holiday Gift Sets</a></li>								
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizers/firm-replenish-serum">Firm + Replenish Serum</a></li>
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizers/revitalizing-hydrogel-moisturizer">Revitalizing Hydrogel Moisturizer</a></li>
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizers/hydrate-restore-rich-cream">Hydrate + Restore Rich Cream</a></li>
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizers/starter-set">Starter Set</a></li>
							</ul>
							<div class="seperater"></div>
							<h4 class="title"><span class="text">-LEARN--</span></h4>
							<ul class="ft-menu">
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizer-story">The Story</a></li>
								<li><a href="https://blog.eighteenb.com/">Eighteen B Journal</a></li>								
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizer-science">The Science</a></li>
								<li><a href="https://www.eighteenb.com/silk-facial-moisturizer-press">The Press</a></li>								
							</ul>
						</div>
						<!--Footer Widget end-->
			
						
						<!--Footer Widget start-->
						<div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
							<h4 class="title"><span class="text">CONTACT</span></h4>
							<ul class="ft-menu">
								<li><a href="https://www.eighteenb.com/contact-silk-moisturizer">Contact</a></li>
								<li><a href="https://www.eighteenb.com/silk-moisturizer-faqs#returns">Returns</a></li>
							</ul>
							<div class="seperater"></div>
							<h4 class="title"><span class="text">SUPPORT</span></h4>
							<ul class="ft-menu">
								<li><a href="https://www.eighteenb.com/silk-moisturizer-faqs">FAQ</a></li>
								<li><a href="https://www.eighteenb.com/moisturizer-account">Account</a></li>
							</ul>
						</div>
						<!--Footer Widget end-->
			
						<!--Footer Widget start-->
						<div class="footer-widget subscribe col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
							<h4 class="title"><span class="text">SIGN UP FOR EMAILS</span></h4>
							<ul class="address">
								<li>Signup to receive 20% off your first order of $100 or more</li>
								<li>
									<?php wp_nonce_field( 'email_subscription' ); ?>
									<input name="Email address" placeholder="Email address" autocomplete="" class="text-input body-left-50-black border-dark-grey border-error-red" data-v-5b446622="" type="text" id="email_subscription"><button class="l2-center-white bg-dark-grey group-hover:l2-center-black group-hover:bg-white group-hover:border lg:w-16 w-20 border-t border-r border-b border-white border-r-0 lg:border-r subscribe-email-submit" id="subs-from-btn" data-v-1e526806=""></button>	
									<div id="on-the-list" class="success-message" data-v-5b446622=""> You're on the list! </div>
								</li>
								
								<li><div id="valid-email" class="error-message" data-v-5b446622="">Please enter valid email address</div></li>
							</ul>
			
							<div class="seperater"></div>
							<div class="footer-social">
								
								<a href="https://www.facebook.com/eighteenb/" class="facebook"><i class="fa fa-facebook"></i></a>                               
								<a href="https://www.instagram.com/eighteenb/" class="linkedin"><i class="fa fa-instagram"></i></a>
								<a href="https://twitter.com/eighteenb" class="twitter"><i class="fa fa-twitter"></i></a>
			
							</div>
							
							<ul class="ft-menu">
								<li><a href="mailto:contact@eighteenb.com">contact@eighteenb.com</a></li>
								<li><a href="mailto:press@eighteenb.com">press@eighteenb.com</a></li>
							</ul>
						</div>
						
						<!--Footer Widget end-->
					</div>
				</div>
			</div>
			<!--Footer Top end-->
			
			<!--Footer bottom start-->
			<div class="footer-bottom section">
				<div class="container-fluid">
					<div class="row justify-content-between align-items-center">
								<div class="copyright text-center  ft-border  fb-border pt-3 pb-3 pt-xs-20 pb-xs-20" style="color:#fff;width: 100%;">
									<a href="https://www.eighteenb.com/terms-conditions" class="body-center-white"  style="color:#fff;">Terms &amp; Conditions</a> •
									<a href="https://www.eighteenb.com/privacy-policy" class="body-center-white"  style="color:#fff;">Privacy Policy</a>
								</div>
							<div class="copyright text-center pt-2 pb-3 pt-xs-20 pb-xs-20" style="width: 100%;">
								<p>Eighteen B LLC. © 2019 Eighteen B. All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Footer bottom end-->


			<?php //if(is_tag()){ ?>
			<!-- Newsletter Popup Start -->
			<div class="newsletter-popup-area" id="newsletter-popup-area">
				<div class="newsletter-popup-content-wrapper">
						
						<div class="newsletter-popup-content text-center">
							<div class="w-50 float-left d-none d-md-block " style="background:#e8e8e8;">
								<img class="newsletter-image-class" src="<?php echo get_template_directory_uri(); ?>/assets/images/eighteenb_ecom_smaller.jpg" />
							</div>
							<div class="w-50 float-left w-sm-100">
								<div class="modal-header">
									<a href="javascript:void(0)" class="close-newsletter-popup" id="close-newsletter-popup">X</a>
									<h4 class=" d-none d-md-block"><img class="eighteenb-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
									</h4>
								</div>
								<div class="modal-body">
									
										
										<h2>Enjoy 20% Off</h2>
										<p>Signup to receive 20% off your first order of $100 or more and be the first to know about our latest product news and exclusive offers</p>
										<div class="subscription-form">
											<!-- <form  id="mc-form2" class="mc-form"> -->
												<input type="email" id="popup-email" placeholder="Email address" >
												<div id="popup-valid-email" class="error-message" style="margin: 0 auto 20px auto;" >Please enter valid email address</div>
												<button class="btn" id="popup-email-subscribe" type="submit">Subscribe</button>
												<div id="on-the-list-popup" class="on-the-list-popup success-message sm-cfsize" data-v-5b446622=""> You're on the list! </div>
											<!-- </form> -->
											<a href="javascript:void(0)" id="close-newsletter-popup-link"  class="" >
												NO THANKS, I’LL CONTINUE WITHOUT
											</a>
										</div>
									</div>
								
								
							</div>
						</div>
					
				</div>
        	</div>
        <!-- Newsletter Popup End -->
			
			<?php //}  ?>
	</footer>
  <!--Footer section end-->
  
</div>
	<div class="toasted-container bottom-right" aria-live="polite" aria-atomic="true">
	  <div id="subcriber-toast" class="toasted rounded action" >
		<div class="toast-body">
		  Subscribing ...!
		</div>
	  </div>
	</div>
	<div class="toasted-container bottom-right" aria-live="polite" aria-atomic="true">
	  <div id="subcriber-toast-success" class="toasted rounded success primary toasted-primary" >
		<div class="toast-body">
		  OK!
		</div>
	  </div>
	</div>
	<div class="toasted-container bottom-right" aria-live="polite" aria-atomic="true">
	  <div id="subcriber-toast-error" class="toasted rounded error" >
		<div class="toast-body">
		  Email has already been taken.
		</div>
	  </div>
	</div>
	<div class="toasted-container bottom-right" aria-live="polite" aria-atomic="true">
	  <div id="subcriber-toast-valid-error" class="toasted rounded error" >
		<div class="toast-body">
		  Enter valid email address.
		</div>
	  </div>
	</div>
<!-- Placed js at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133839063-4"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-133839063-4');
</script>
</body>
</html>