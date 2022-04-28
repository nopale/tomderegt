

<section class="featured-section">
	<div class="flex container relative flex-wrap-reverse">
		<?php

$args3 = array(
    'post_type' => 'feature',
    'post_status' => 'publish',
    'posts_per_page' => 1,
);

$query3 = new WP_Query($args3);
if ($query3->have_posts()):

    while ($query3->have_posts()): $query3->the_post();?>

							<div class="copy-container flex flex-column w-100 w-50-l justify-center" >

										<?php if (get_field('feature_content')): ?>
											<?php the_field('feature_content');?>
										<?php endif;?>

				            	<h2 class="feature-title"><?php the_title();?></h2>
				                <p class="feature-description"> <?php the_content();?></p>

								<a class="button relative overflow-hidden link" href="<?php the_permalink();?>"> view project
									<span class="absolute absolute-top h-100 w-100 flex justify-center items-center"> 
												
									</span>
									<svg class="target-group" width="100%" height="60%" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="20" height="20" fill=""/>
											<g id="target" clip-path="url(#clip0)">
											<g id="Layer 2">
											<g id="Layer 1">
											<g id="target_2">
											<path id="Vector" d="M31.8 50C41.8516 50 50 41.8516 50 31.8C50 21.7484 41.8516 13.6 31.8 13.6C21.7484 13.6 13.6 21.7484 13.6 31.8C13.6 41.8516 21.7484 50 31.8 50Z" stroke="#000000" stroke-width="3" stroke-miterlimit="10"/>
											<path id="Vector_2" d="M63.7 31.8H0" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10"/>
											<path id="Vector_3" d="M31.8 0V63.7" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10"/>
											</g>
											</g>
											</g>
											</g>
										</svg>		
								</a>
							</div>

							<div class="img-container w-100 w-50-l">
								<div class="w-100 h-100 flex justify-center items-center relative">

										<?php if( have_rows('features_content') ): while ( have_rows('features_content') ) : the_row();
								
										if( get_row_layout() == 'feature_video' ): ?>

											<?php if( get_sub_field('feature_video') ): ?>
											<div class="w-100 h-100">
												<video class="w-100 h-100" poster="<?php the_sub_field('feature_video_poster');?>" autoplay playsinline hideControls loop muted>
													<source src="<?php the_sub_field('feature_video');?>" type="video/mp4" />
													<!-- Captions are optional -->
												</video>
											</div>
											<?php endif; endif; endwhile; endif;?>

									<div class="pseudo-border vertical absolute dn db-ns absolute-left"></div>
									<div class="pseudo-border absolute db dn-ns absolute-bottom"></div>
								</div>
						</div>
				           
				<?php
endwhile;
endif;
wp_reset_postdata();?>
	</div>
</section>