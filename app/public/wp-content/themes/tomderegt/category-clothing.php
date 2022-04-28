
<?php get_header(); ?>
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
				'category_name' => 'clothing',
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

