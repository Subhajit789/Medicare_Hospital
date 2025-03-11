<?php
function posttype()
{
	$labels = array(
		'name' => 'Helmets'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag')
	);
	register_post_type('Helmets',$args);
}
add_action('init','posttype');


function servicetype()
{
	$labels = array(
		'name' => 'Service'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag')
	);
	register_post_type('Service',$args);
}
add_action('init','servicetype');


function slider()
{
	$labels = array(
		'name' => 'slider'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag')
	);
	register_post_type('slider',$args);
}
add_action('init','slider');





function custommenus() {
	register_nav_menus(array(
		'header-menu' =>('Header Menu'),
		// 'main-menu'=> ('main menu'),
		'footer-menu' =>('Footer Menu')
	));
}
add_action('init','custommenus');


// ----------------page logo dynamic----------------
function amarlogo() {
	add_theme_support('custom-logo', array(
		'height'      => 100,     //set logo height
		'width'       => 300,    //set logo width
		'flex-width'  => true,   //set logo weght to flexible
		'flex-height' => true,   //set logo hidth to flexible
	));
}
add_action('after_setup_theme','amarlogo');





function theme_enqueue_styles() {
   
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),  'all');

    // Nice Select
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), 'all');

    // Font Awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), 'all');

    // icofont
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css', array(), 'all');

    // Slicknav
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), 'all');

    // Owl Carousel
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), 'all');

    // Datepicker
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', array(), 'all');

    // Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), 'all');

    // Magnific Popup
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 'all');

    // Medipro Styles
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



function amarEnquescript(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), null, true);
    wp_enqueue_script('colors', get_template_directory_uri() . '/assets/js/colors.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), null, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), null, true);
    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), null, true);
    wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/niceselect.js', array('jquery'), null, true);
    wp_enqueue_script('tilt', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), null, true);
    wp_enqueue_script('jquery.counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('steller', get_template_directory_uri() . '/assets/js/steller.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery','popper'), null, true);
    wp_enqueue_script('main-js',  get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts','amarEnqueScript');

?>





<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
?>


<?php
 comments_template();
?>