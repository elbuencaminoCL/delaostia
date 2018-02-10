
<?php
/**
 * shven functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shven
 */

function my_acf_init() {

  acf_update_setting('google_api_key', 'AIzaSyCfd8BnhIxwOKgtPZU0jwuDudCNNrQh8f4');
}

add_action('acf/init', 'my_acf_init');


add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');


function load_posts_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
	$cat_id = $_POST[ 'cat' ];
	$args = array(
		'post_type' => 'menu',
		'cat'=> $cat_id,
		'post_status' => 'publish',
		'posts_per_page' => '1',
		'paged' => $paged,
	);
	$my_posts = new WP_Query( $args );
	if ( $my_posts->have_posts() ) :
		?>
		<?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
			<div class="row row-xs-3 row-sm-3 row-md-3 row-lg-3 middle-xs space-bottom menu-new-post menuPost">                    
        <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2 center-xs">
          <p><?php the_field('menu_price'); ?></p>                            
        </div>

        <div class="col-xs-6 col-sm-8 col-md-6 col-lg-8 menu-col-title-desc">
          <h6 class="F"><strong><?php the_field('menu_title_plate'); ?></strong></h6>
          <p><?php the_field('menu_desc'); ?></p>
        </div>

        <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
          <img src="<?php the_field('menu_image'); ?>" class="menu-image">
        </div>
      </div>
		<?php endwhile ?>
		<?php
	endif;

	
}

