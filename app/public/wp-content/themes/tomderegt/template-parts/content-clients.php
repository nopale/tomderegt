
<section class="clients " style="margin-top: -1px;">

<?php

$args3 = array(
    'post_type' => 'client',
    'post_status' => 'publish',
	'posts_per_page' => 5,
	'orderby' => 'ASC'
);

$query3 = new WP_Query($args3);
if ($query3->have_posts()):

    while ($query3->have_posts()): $query3->the_post();?>

		

			<div class="client-element relative">
			<a class="absolute w-100 h-100 link client-link" href="<?php the_permalink();?>"></a>
		        <h2 class="marquee-container ttu">
		                <div class="marquee-clients inline-flex items-center justify-center">
		                   <div class="relative flex items-center">
		                   	<?php the_post_thumbnail();?>
		                   </div>
		                   <div class="relative client-title">
		                   	<?php the_title();?>
		                   </div>
						</div>
		        </h2>
		      
		        <div class="pseudo-border absolute-bottom absolute-left"></div>
		    </div>

		
		  
		<?php
    endwhile;
endif;
wp_reset_postdata();?>
</section>