<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="img/x-icon" rel="shortcut icon">
    <!-- Font css files are included here. -->
    <link data-n-head="true" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/styrene.css">
    <link data-n-head="true" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/lettera.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53N8STL');</script>
<!-- End Google Tag Manager -->

    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53N8STL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="main-wrapper">
<div class="sticky">
    <!--Header section start-->
    <header class="header header-transparent">
			<div class="header-top ">
				<div class="container-fluid ">
					<div class="row align-items-center">
								<div class="col-lg-12 col-md-12 col-12 d-flex justify-content-center">
								
												<!--Desktop Menu start-->
												<nav class="main-menu color-white d-blcok">
														<ul>
															<li><a id="hover-drop" href="">SHOP</a></li>
															<li><a href="https://www.eighteenb.com/silk-facial-moisturizer-story">OUR STORY</a></li>
															<li><a id="hover-drop2" href="#">LEARN</a></li>
															<li>
																<!--Logo start-->
																	<div class="logo">
																		<a href="https://www.eighteenb.com">
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
																		</a>
																	</div>
																<!--Logo end-->
															</li>
															<li><a href="https://www.eighteenb.com/contact-silk-moisturizer">CONTACT</a></li>
															<li><a href="https://www.eighteenb.com/login">LOGIN</a></li>
															<li><a href="https://www.eighteenb.com/silk-facial-moisturizers/"><div class="cart-badge__counter">0</div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart.svg" class="cart-badge__icon"></a></li>
														</ul>
												</nav>
												<!--Desktop Menu End-->
												
												
												
												<!--Mobile Menu start-->
												<nav class="mobile-d-menu color-white">
													<ul style="min-height:70px;">
														<li>
															<div class="toggle-bar">
																<a href="#" class="toggle-open-button">
																	<i class="fa fa-bars"></i>
																</a>
															</div>
														</li>
														<li>
															<div class="logo">
																<a href="https://www.eighteenb.com">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
																</a>
															</div>
														</li>
														<li>
															<div class="toggle-bar-close">
																<a href="#" class="toggle-close-button">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</li>
													</ul>
												</nav>
												<!--Mobile Menu end-->
												
												<!--Mobile Submenu Start-->
												<div id="nav-mobile-menu" class="flex flex-col lg:hidden open">
													<div class="flex flex-col">
														<div class="nav-links px-6">
															<div class="overflow-x-hidden overflow-y-auto">
																	<div class="nav-link">
																		<span class="shop-arrow">Shop 
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow pointing right" class="arrow shop-arrow">
																		</span>
																	</div>
																	<div class="nav-link">
																		<a href="https://www.eighteenb.com/silk-facial-moisturizer-story" class="">Our Story</a>
																	</div>
																	<div class="nav-link">
																		<span class="learn-arrow">Learn 
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow pointing right" class="arrow learn-arrow">
																		</span>
																	</div>
															</div>
															<div class="submenu shop-submenu">
																<div class="back shop-back">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow pointing left" class="back-arrow shop-back"> Back
															
																	</div>
																	<ul class="submenu-items list-reset">
																		<li class="submenu-item">
																			<a href="https://www.eighteenb.com/silk-facial-moisturizers" class="submenu-link">Shop all</a>
																		</li>
																	</ul>
																	<ul class="list-reset">
																	<li class="submenu-item flex-col">
																			
																				<span class="submenu-link__headline mb-2">Limited Edition
																				</span>
																			<a href="https://www.eighteenb.com/holidaysets" class="submenu-link flex-col">
																				Holiday Gift Sets
																			</a>
																		</li>
																	<li class="submenu-item flex-col">
																			<h2 class="text-xxs mb-1" style="font-size:10px;" >NEW!</h2> 
																				<span class="submenu-link__headline mb-2">B-silk<sup>™</sup> protein
																				</span>
																			<a href="https://www.eighteenb.com/silk-facial-moisturizers/firm-replenish-serum" class="submenu-link flex-col">
																				Firm + Replenish Serum
																			</a>
																		</li>
																		<li class="submenu-item flex-col">
																				<span class="submenu-link__headline mb-2">B-silk<sup>™</sup> protein
																				</span>
																			<a href="https://www.eighteenb.com/silk-facial-moisturizers/revitalizing-hydrogel-moisturizer" class="submenu-link flex-col">
																				Revitalizing Hydrogel Moisturizer
																			</a>
																		</li>
																		<li class="submenu-item flex-col">
																				<span class="submenu-link__headline mb-2">B-silk<sup>™</sup> protein
																				</span>
																			<a href="https://www.eighteenb.com/silk-facial-moisturizers/hydrate-restore-rich-cream" class="submenu-link flex-col">
																				Hydrate + Restore Rich Cream 
																			</a>
																		</li>
																		<li class="submenu-item flex-col">
																				<span class="submenu-link__headline mb-2">B-silk<sup>™</sup> protein
																				</span>
																			<a href="https://www.eighteenb.com/silk-facial-moisturizers/starter-set" class="submenu-link flex-col">
																				Starter Set
																			</a>
																		</li>
																	</ul>
																</div>
															<div class="submenu learn-submenu">
																<div class="back learn-back"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow pointing left" class="back-arrow learn-back"> Back</div>
																	<ul class="submenu-items list-reset">
																		<li class="submenu-item">
																			<a href="https://blog.eighteenb.com" class="submenu-link">Eighteen B Journal: The Lab</a>
																		</li>
																																			
																		<li class="submenu-item">
																			<a href="https://www.eighteenb.com/silk-facial-moisturizer-science" class="submenu-link">The Science</a>
																		</li>
																		<li class="submenu-item">
																			<a href="https://www.eighteenb.com/silk-facial-moisturizer-press" class="submenu-link">The Press</a>
																		</li>	
																		<li class="submenu-item">
																			<a href="https://www.eighteenb.com/silk-moisturizer-faqs" class="submenu-link">The FAQs</a>
																		</li>
																	</ul>
																	<!---->
																</div>
														</div>
														<div class="flex text-center text-xs font-styrenea text-center tracking-wide uppercase">
															<a href="https://www.eighteenb.com/contact-silk-moisturizer" class="flex-grow w-16 py-4 text-black no-underline border-r">Contact</a>
															<a href="https://www.eighteenb.com/account" class="flex-grow w-16 py-4 text-black no-underline">Account</a>
														</div>
													</div>
												</div>
												<!---Mobile Submenu End-->
												
												
												
												<!---Desktop Menu Dropdown Shop Start-->
												<div id="shop" class="dropdowns">
													<div id="sub-shop" class="dropdown" style="">
														<div class="dropdown__inner">
															<figure class="dropdown__figure" style="height: 450px;">
																<!-- <img src="https://www.eighteenb.com/navigation/shop.jpg" alt="sub-shop" class="dropdown__image visible" data-v-63085110="">  -->
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EighteenB-Product-x-The-House-That-Lars-Built-1024.jpg" alt="sub-shop" class="dropdown__image visible" data-v-63085110="">
																<img src="https://www.eighteenb.com/navigation/shop-all.jpg" alt="shop-all" class="dropdown__image shop-all-visibilty" data-v-63085110=""> 

																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EighteenB-Product-x-The-House-That-Lars-Built-1280.jpg" alt="1" class="dropdown__image product-5 image-1280" data-v-63085110="">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EighteenB-Product-x-The-House-That-Lars-Built-1024.jpg" alt="1" class="dropdown__image product-5 image-1024" data-v-63085110="">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/EighteenB-Product-x-The-House-That-Lars-Built-728.jpg" alt="1" class="dropdown__image product-5 image-728" data-v-63085110="">

																<img src="https://eighteenb-production-assets.s3.amazonaws.com/spree/images/attachments/000/000/016/large/20190727_DBaum_EighteenB_Editorial_1832_%282%29.jpg?1566513438" alt="6" class="dropdown__image product-4" data-v-63085110="">
																<img src="https://eighteenb-production-assets.s3.amazonaws.com/spree/images/attachments/000/000/031/large/crop.jpg?1566600858" alt="1" class="dropdown__image product-1" data-v-63085110="">
																<img src="https://eighteenb-production-assets.s3.amazonaws.com/spree/images/attachments/000/000/030/large/crop.jpg?1566600831" alt="2" class="dropdown__image product-2" data-v-63085110="">
																<img src="https://eighteenb-production-assets.s3.amazonaws.com/spree/images/attachments/000/000/041/large/EighteenB_Ecom_6_P_copy.jpg?1569426757" alt="5" class="dropdown__image product-3" data-v-63085110="">
															</figure>
															<div class="dropdown__content">
																<ul class="dropdown__list" style="margin-bottom: 1.2em !important;">
																	<li class="dropdown-item"><a data-v-6f1c3ca4="" href="https://www.eighteenb.com/silk-facial-moisturizers" class="dropdown-item__link shop-all-link-item" data-cy="desktop-sub-nav-shop-link">Shop all</a></li>
																</ul>
																<ul class="dropdown__list">
																<li class="dropdown-item gift-list">
																		 
																		<span class="dropdown-item__headline product-link-item-5 font-color-orange">Limited Edition</span> 
																		<a href="https://www.eighteenb.com/holidaysets" class="dropdown-item__link product-link-item-5 font-color-orange" >
																			Holiday Gift Sets
																		</a>
																	</li>
																	<li class="dropdown-item" >
																		<h2 class="text-xxs mb-1" style="font-size:10px;" >NEW!</h2> 
																		<span class="dropdown-item__headline product-link-item-4" >B-silk<sup>™</sup> protein</span> 
																		<a href="https://www.eighteenb.com/silk-facial-moisturizers/firm-replenish-serum" class="dropdown-item__link product-link-item-4" >
																			Firm + Replenish Serum
																		</a>
																	</li>
																	<li class="dropdown-item">
																		<span data-v-6f1c3ca4="" class="dropdown-item__headline product-link-item-1">B-silk<sup>™</sup> protein</span>
																		<a href="https://www.eighteenb.com/silk-facial-moisturizers/revitalizing-hydrogel-moisturizer" class="dropdown-item__link product-link-item-1">Revitalizing Hydrogel Moisturizer</a>
																	</li>
																	<li class="dropdown-item">
																		<span data-v-6f1c3ca4="" class="dropdown-item__headline product-link-item-2">B-silk<sup>™</sup> protein</span>
																		<a href="https://www.eighteenb.com/silk-facial-moisturizers/hydrate-restore-rich-cream" class="dropdown-item__link product-link-item-2">Hydrate + Restore Rich Cream</a>
																	</li>
																	<li class="dropdown-item">
																		<span data-v-6f1c3ca4="" class="dropdown-item__headline product-link-item-3">B-silk<sup>™</sup> protein</span>
																		<a href="https://www.eighteenb.com/silk-facial-moisturizers/starter-set" class="dropdown-item__link product-link-item-3">Starter Set</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!---Desktop Menu Dropdown Shop End-->
												
												<!---Desktop Menu Dropdown Learn Start-->
												<div id="sub-learn" class="dropdowns">
													<div id="sub-learn" class="dropdown">
														<div class="dropdown__inner">
															<figure class="dropdown__figure" style="height: 450px;">
																<img src="https://www.eighteenb.com/navigation/learn.jpg" alt="sub-learn" class="dropdown__image visible">
																<img src="https://www.eighteenb.com/navigation/blog-menu.png" alt="blog" class="dropdown__image the-blog">
																<img src="https://www.eighteenb.com/navigation/science.jpg" alt="science" class="dropdown__image the-science">
																<!-- <img src="https://www.eighteenb.com/navigation/faq.jpg" alt="press" class="dropdown__image the-press"> -->
																<img src="https://www.eighteenb.com/navigation/faq.jpg" alt="faq" class="dropdown__image the-faq">
															</figure>
															<div class="dropdown__content">
																<ul class="dropdown__list">
																	<li class="dropdown-item">
																		<a href="https://blog.eighteenb.com" class="dropdown-item__link the-blog-item">Eighteen B Journal: The Lab</a>
																	</li>
																	
																	<li class="dropdown-item">
																		<a href="https://www.eighteenb.com/silk-facial-moisturizer-science" class="dropdown-item__link the-science-item">The Science</a>
																	</li>
																	<li class="dropdown-item">
																			<a href="https://www.eighteenb.com/silk-facial-moisturizer-press"  class="dropdown-item__link the-press-item">The Press</a>
																		</li>
																	<li class="dropdown-item">
																		<a href="https://www.eighteenb.com/silk-moisturizer-faqs" class="dropdown-item__link the-faq-item">The FAQs</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!---Desktop Menu Dropdown Learn End-->
																																								
								</div>
								<!---Promobar Start-->
								<div class="promo-bar promo-bar-bg banner-text text-center"><span class="promo-highlight">SHOP HOLIDAY SETS</span>&nbsp;FOR OUR MOST FESTIVE SAVINGS YET, FREE DOMESTIC SHIPPING</div>
								<!---Promobar End-->
					</div>
				</div>
			</div>
	</header>
	<!--Header section end-->
</div>	
	<?php
		$args = array(
			'post_type' => 'page',
			'pagename' => 'home'
			);
		// The Query
		$query = new WP_Query( $args );
		/* Start the Loop */
		$counter = 0;	
		while ( $query->have_posts() ) :
			$query->the_post();	
	?>
			<div class="header-bottom menu-right" style="background: url('<?php echo get_field('banner_image'); ?>');background-repeat: no-repeat;background-position: center center;background-size: cover; <?php if( is_page('home')){ echo 'padding:5% 0 25px 0;'; } ?> ">

					<div class="container py-4 pl-75 pr-75 pl-lg-15 pr-lg-1style=5 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
						<div class="row align-items-center">

							<div class="col-lg-12 col-md-12 col-12 order-lg-1 order-md-1 order-1 <?php if (is_home()) { ?>pt-20 pb-20<?php } ?><?php if (is_single() OR is_archive()) { ?>pt-60 pb-60 <?php } ?>pt-xs-5">
									<div class="row px-0 mx-0">
										<div class="logo">
											<a class="logo-text" href="<?php echo get_home_url(); ?>">
												<?php echo get_field('banner_title');?>
											</a>
										</div>
										<div class="header-search">
											<button class="header-search-toggle color-dark"><i class="fa fa-search <?php if (is_home()) { echo " search-icon-stroke-color "; }?>"></i></button>
											<div class="header-search-form">
												<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_home_url(); ?>/">
													<input type="text" value="" name="s" id="s" placeholder="Type and hit enter" />
													<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
												</form>
											</div>
										</div>
									</div>
								<?php if (is_home()) { ?>
									<div class="logo-description col-lg-8 col-md-8 col-sm-6 mt-15 post-box all">

										<p>
											<?php echo get_field('banner_content');?>
										</p>

									</div>
									<?php
                                                foreach((get_categories(array(
                                                    'orderby' => 'term_order',
                                                    'order'   => 'ASC',
                                                    'hide_empty' => 1,
                                                    'exclude' => '6'
                                                ))) as $category) { 
													$category_link = get_category_link($category->cat_ID);
													
												echo '<div class="logo-description col-lg-8 col-md-8 col-sm-6 mt-15 post-box '.$category->slug.' disable-item"><p><strong>'. $category->name .': </strong>'. category_description( get_category_by_slug( "". $category->name ."" )->term_id ) .'</p></div>'; 
										} 
									?>
									<?php } ?>
							</div>
							
						</div>
					</div>
			</div>

	<?php endwhile; ?>