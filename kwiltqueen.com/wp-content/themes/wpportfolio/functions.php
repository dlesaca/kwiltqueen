<?php


//load the theme CSS
function theme_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Cutive+Mono' );

	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
	if( is_page( 'home' ) ) {
		wp_enqueue_style( 'flexslider' ); 
	}

}


//Load the theme JS
function theme_js() {

	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );
	if( is_page( 'home' ) ) {
		wp_enqueue_script( 'flexslider' ); 
	}
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true ); 

}
add_action('wp_enqueue_scripts', 'theme_js');

add_action( 'wp_enqueue_scripts', 'theme_styles' );


//enable custom menus
add_theme_support( 'menus' );

function create_widget( $name, $id, $description ){
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' );

	register_sidebar( $args );

}

create_widget( 'About Sub Nav', 'about-sub-nav', 'This is the about sub nav');
create_widget( 'Services Sub Nav', 'services-sub-nav', 'This is the services sub nav');
create_widget( 'TwiGet widget', 'twi_widget', 'TwiGet widget');
create_widget( 'IG widget', 'ig_widget', 'Instagram widget');	
create_widget( 'Sitemap', 'Sitemap', 'this is the sitemap');
create_widget( 'left footer nav', 'left-footer-nav', 'This is the left footer nav');
create_widget( 'middle footer nav', 'middle-footer-nav', 'This is the middle footer nav');
create_widget( 'right footer nav', 'right-footer-nav', 'This is the right footer nav');
create_widget( 'categories widget', 'categories-widget', 'This is the widget for the categories');
create_widget( 'Recent', 'recent-posts', 'This is the widget for recent posts');

function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> > </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> > </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> > </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator"> > </li>' . $output;
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

?>