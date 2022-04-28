
<?php get_header(); ?>

<div class="loading-screen">

	<img src="<?php bloginfo('template_directory');?>/assets/scalpel.png">
	<div class="absolute loader-display flex justify-center items-center"><p id="value-indicator" class="ma0"></p></div>
	<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
	<div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
	<div class="pseudo-border  absolute absolute-top "></div>
	<div class="pseudo-border  absolute absolute-bottom "></div>
</div>

<main id="primary" class="site-main">

            <div class="cat-title ">

			

            </div>
       

<div class="grid center relative">
<div class="pseudo-border absolute absolute-top "></div>
		<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
			<?php

				$args2 = array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'category_name' => 'advertising',
				'orderby' => 'ASC'
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

<?php get_footer();?>