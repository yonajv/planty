<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}



  add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
  function add_extra_item_to_nav_menu( $items, $args ) {
	  if (is_user_logged_in() && $args->theme_location == 'primary') {
		$items .= '<li class = "admin_button"><a class="admin_a" href="' . admin_url() . '">Admin</a></li>';
    }
	return $items;
    }
	


	

?>