<?php
/**
 * EighteenB functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Best_Made
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'eighteenB_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eighteenB_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 1920, 1200 );


		add_image_size( 'post-featured-image', 1920, 590, true );
		add_image_size( 'post-list-image', 230, 250, true );
		add_image_size( 'post-archive-image', 600, 400, true  );
		add_image_size( 'block-item-image', 510, 310 );
		add_image_size( 'more-item-image', 410, 310 );
		

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'eighteenB_setup' );



/**
 * Enqueue scripts and styles.
 */
function glowchip_css_styles() {

	wp_enqueue_style( 'eighteenB-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'eighteenB-iconfont', get_template_directory_uri() . '/assets/css/iconfont.min.css' , array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'eighteenB-plugins-styles', get_template_directory_uri() . '/assets/css/plugins.css' , array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'eighteenB-helper-styles', get_template_directory_uri() . '/assets/css/helper.css' , array(), wp_get_theme()->get( 'Version' ), 'all' );
	//wp_enqueue_style( 'eighteenB-styles', get_template_directory_uri() . '/assets/css/style.css' , array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'eighteenB-styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'glowchip_css_styles' );



function glowchip_js_scripts() {

	wp_enqueue_script( 'eighteenB-vendor-jquery',  get_template_directory_uri()  . '/assets/js/vendor/jquery-1.12.4.min.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'eighteenB-pooper-script',  get_template_directory_uri()  . '/assets/js/popper.min.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'eighteenB-bootstrap-script',  get_template_directory_uri()  . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'eighteenB-plugins-script',  get_template_directory_uri()  . '/assets/js/plugins.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'eighteenB-main-script',  get_template_directory_uri()  . '/assets/js/main.js', array( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'eighteenB-navigation-script',  get_template_directory_uri()  . '/assets/js/navigation-dropdown.js', array( 'jquery' ), '1.0', true);

}

add_action('wp_enqueue_scripts', 'glowchip_js_scripts', 999);

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }


 /*  add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles() {
	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );
	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');
} */


if ( ! function_exists('custom_post_type') ) {

	// Register Custom Post Type
	function custom_post_type() {
	
		$labels = array(
			'name'                  => _x( 'Products', 'Post Type General Name', 'eighteenB' ),
			'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'eighteenB' ),
			'menu_name'             => __( 'Products', 'eighteenB' ),
			'name_admin_bar'        => __( 'Products', 'eighteenB' ),
			'archives'              => __( 'Products Archives', 'eighteenB' ),
			'attributes'            => __( 'Products Attributes', 'eighteenB' ),
			'parent_item_colon'     => __( 'Parent Product:', 'eighteenB' ),
			'all_items'             => __( 'All Products', 'eighteenB' ),
			'add_new_item'          => __( 'Add New Product', 'eighteenB' ),
			'add_new'               => __( 'Add New', 'eighteenB' ),
			'new_item'              => __( 'New Product', 'eighteenB' ),
			'edit_item'             => __( 'Edit Product', 'eighteenB' ),
			'update_item'           => __( 'Update Product', 'eighteenB' ),
			'view_item'             => __( 'View Product', 'eighteenB' ),
			'view_items'            => __( 'View Products', 'eighteenB' ),
			'search_items'          => __( 'Search Product', 'eighteenB' ),
			'not_found'             => __( 'Not found', 'eighteenB' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'eighteenB' ),
			'featured_image'        => __( 'Featured Image', 'eighteenB' ),
			'set_featured_image'    => __( 'Set featured image', 'eighteenB' ),
			'remove_featured_image' => __( 'Remove featured image', 'eighteenB' ),
			'use_featured_image'    => __( 'Use as featured image', 'eighteenB' ),
			'insert_into_item'      => __( 'Insert into product', 'eighteenB' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'eighteenB' ),
			'items_list'            => __( 'Products list', 'eighteenB' ),
			'items_list_navigation' => __( 'Products list navigation', 'eighteenB' ),
			'filter_items_list'     => __( 'Filter products list', 'eighteenB' ),
		);
		$args = array(
			'label'                 => __( 'Product', 'eighteenB' ),
			'description'           => __( 'Bestmade featured products list.', 'eighteenB' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'revisions' ),
			'taxonomies'            => array(  ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-tickets-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'product', $args );
	
	}
	add_action( 'init', 'custom_post_type', 0 );
	
	}


function subscribe_newsletter_enqueue()
{
	wp_enqueue_script('subscriber-uploader', get_template_directory_uri() . '/assets/js/subscribe-newsletter.js', array(
		'jquery'
	) , '1.0', false);
	wp_localize_script('subscriber-uploader', 'subscriberUploader', array(
		'ajax_url' => admin_url('admin-ajax.php')
	));
}
add_action('wp_enqueue_scripts', 'subscribe_newsletter_enqueue');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Options',
		'menu_title'	=> 'Global Options',
		'menu_slug' 	=> 'theme-global-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}

function filter_plugin_updates( $value ) {
    unset( $value->response['advanced-custom-fields-pro/acf.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

remove_filter('term_description','wpautop');


/* add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
function prefix_load_cat_posts () {
	echo '<div class="row">';
	$cat_id = $_POST[ 'cat' ];
	if ($cat_id == 'all'){
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'order' => 'DESC',
			
			);	
	} else {
	$args = array(
		'post_type' => 'post',
		'cat' => $cat_id,
		'posts_per_page' => -1,
		'order' => 'DESC',
		
		);
	}
		// The Query
		$query = new WP_Query( $args );
		/* Start the Loop *
		$counter = 0;	
		while ( $query->have_posts() ) :
			$query->the_post();		 ?>

				<!-- Single Blog Start -->
				<div class="blog col-lg-6 col-md-6 col-sm-6 all <?php $hasComma = false; foreach((get_the_category()) as $category) { if ($hasComma){ echo " "; } echo ''.$category->slug.'';$hasComma = true;} ?> " style="transition: all 2s linear;">
					<div class="blog-inner mb-20">
					<?php $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-archive-image' ); ?>
                            <div class="media"><a href="<?php echo get_the_permalink();?>" class="image"><?php // the_post_thumbnail( 'post-archive-image' ); ?> <img src="<?php echo $feat_image[0];?>" ></a></div>
                            <div class="content">
							<h3 class="title"><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
							<span class="post-date pb-2 pt-2" style="text-transform:uppercase;font-size:13px;display:block;"><?php $hasComma = false; foreach((get_the_category()) as $category) { $category_link = get_category_link($category->cat_ID); if ($hasComma){ echo ", "; }echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($category->name).'">'.$category->name.'</a>';$hasComma = true;} ?></span>
							<span class="post-date"><?php echo get_the_date('M j, Y');?></span>
							<p>
								<?php 
									$excerpt = get_the_excerpt();
									echo wp_trim_words( $excerpt , '45' ); 
								?>
							</p>
							<!-- <a class="readmore" href="blog-details.html">Read more</a> -->
						</div>
					</div>
				</div>
								<!-- Single Blog End -->
										<?php  if ( $counter == 3 ) {  ?>
                                                    <div class="single-deal-product mb-60" style="transition: all 2s linear;">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="deal-product-img">
                                                                   
                                                                        <img src="<?php echo get_field('newsletter_image', 'options');?>" alt="">
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="deal-product-title text-md-left text-sm-center pr-md-75 p-sm-20">
                                                                    <h3><?php echo get_field('newsletter_title', 'options');?></h3>
                                                                    <div class="single-input text-md-left text-sm-center">      
                                                                            <input name="subscriber-email" id="content-subscriber-email" type="text" placeholder="Enter your email"><button class="l2-center-white bg-dark-grey group-hover:l2-center-black group-hover:bg-white group-hover:border lg:w-16 w-20 border-t border-r border-b border-white border-r-0 lg:border-r content-subscribe-email-submit" data-v-1e526806=""></button>
                                                                            <div id="content-valid-email" class="error-message" style="margin-top: 10px;" >Please enter valid email address</div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
											<?php } ?> 
											

   <?php
   		$counter++;
		endwhile;
		
		//echo $query->post_count;
		if ( $query->post_count == 1 || $query->post_count == 2 || $query->post_count == 3 ){
		?>
		
					<div class="single-deal-product mb-60" style="transition: all 2s linear;">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-6">
									<div class="deal-product-img">
										
											<img src="<?php echo get_field('newsletter_image', 'options');?>" alt="">
										
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="deal-product-title text-md-left text-sm-center pr-md-75 p-sm-20">
										<h3><?php echo get_field('newsletter_title', 'options');?></h3>
										<div class="single-input text-md-left text-sm-center">      
												<input name="subscriber-email" id="content-subscriber-email" type="text" placeholder="Enter your email"><button class="l2-center-white bg-dark-grey group-hover:l2-center-black group-hover:bg-white group-hover:border lg:w-16 w-20 border-t border-r border-b border-white border-r-0 lg:border-r content-subscribe-email-submit" data-v-1e526806=""></button>
												<div id="content-valid-email" class="error-message" style="margin-top: 10px;" >Please enter valid email address</div>
										</div>
										
									</div>
								</div>
							</div>
					</div>
	
	<?php
	}
	
   $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
   echo "</div>";
   } */