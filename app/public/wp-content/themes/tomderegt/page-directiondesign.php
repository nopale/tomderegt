<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tomderegt
 */

get_header();
?>


<div class="loading-screen">

	<img src="<?php bloginfo('template_directory');?>/assets/scalpel.png">
	<div class="absolute loader-display flex justify-center items-center"><p id="value-indicator" class="ma0"></p></div>
	<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
	<div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
	<div class="pseudo-border  absolute absolute-top "></div>
	<div class="pseudo-border  absolute absolute-bottom "></div>
</div>

	<main id="primary" class="site-main overflow-hidden">

	<?php get_template_part('template-parts/content-hero');?>

	<!-- Marquee with Page title  -->
	<?php get_template_part('template-parts/content-altlinks');?>
  
	<!-- END Marquee with Page title  -->

	<!-- Home Grid Section -->
	<div id="main" class="grid center relative">
		<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
			<?php

				$args2 = array(
				'post_type' => 'post',
				'posts_per_page' => 9,
				'category_name' => 'covers,clothing,identity,typography',
				'orderby' => 'ASC'
				);

				$categories = get_the_category();

				$cat_name = $categories[0]->cat_name;

				// we can also do our options like this too
				$query2 = new WP_Query($args2);

			if ($query2->have_posts()): while ($query2->have_posts()): $query2->the_post();?>

			<?php get_template_part('template-parts/content-grid');?>


			<?php endwhile;endif;
				wp_reset_postdata();
			?>
	</div>
    

	<!-- END Home grid section -->

	  <!-- 4-by grid with links and ... -->
	
	  <?php get_template_part('template-parts/content-marquee');?>

	
<!-- END 4-by grid -->

	<!-- Featured Section  -->
	
	<?php get_template_part('template-parts/content-featured');?>

	<!-- END Featured Section -->

  

	<!-- CLIENTS Section -->

	<?php get_template_part('template-parts/content-clients');?>

	<!-- END CLIENTS Section -->

	<!-- Second grid Section  -->

	<div class="grid center relative">
		<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
			<?php

				$args11 = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'category_name' => 'covers,clothing,identity,typography',
				'post__in' => [ 453, 459, 456],
				'orderby' => ''
				);

				$categories = get_the_category();

				$cat_name = $categories[0]->cat_name;

				// we can also do our options like this too
				$query11 = new WP_Query($args11);

			if ($query11->have_posts()): while ($query11->have_posts()): $query11->the_post();?>

			<?php get_template_part('template-parts/content-grid');?>


			<?php endwhile;endif;
				wp_reset_postdata();
			?>
	</div>

	<!-- END second grid section -->
	
	</main><!-- #main -->

<?php
get_footer();