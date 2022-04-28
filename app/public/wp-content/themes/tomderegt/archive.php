<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tomderegt
 */

get_header();
?>

<main id="primary" class="site-main">

<div class="w-100 text-container pa4 pa5-ns pa5-l tl ">

<h2 class="f3 f2-ns f1-l post-title ttu mb3 mb4-l">  Page Doesn't Exist. </h2>

	<p> Something you might be looking for: </p>

</div>
       

<div class="grid center relative">
<div class="pseudo-border absolute absolute-top "></div>
		<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
			<?php

				$args2 = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'category_name' => 'covers,clothing,identity,typography',
				'orderby' => 'rand'
				);

				// we can also do our options like this too
				$query2 = new WP_Query($args2);

			if ($query2->have_posts()): while ($query2->have_posts()): $query2->the_post();?>


                                     

			<?php get_template_part('template-parts/content-grid');?>

		
			<?php endwhile;endif;
				wp_reset_postdata();
			?>
	</div>
	<?php get_template_part('template-parts/content-links');?>
</main>


<?php
get_footer();
