<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tomderegt
 */

?>

<div class="loading-screen">

<img src="<?php bloginfo('template_directory');?>/assets/scalpel.png">
<div class="absolute loader-display flex justify-center items-center"><p id="value-indicator" class="ma0"></p></div>
<div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
<div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
<div class="pseudo-border  absolute absolute-top "></div>
<div class="pseudo-border  absolute absolute-bottom "></div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



		<?php if( have_rows('features_content') ): while ( have_rows('features_content') ) : the_row();

				if( get_row_layout() == 'video_embed' ): ?>

					<div class="hero-video-embed relative"> 
						<?php if( get_sub_field('video_embed') ): ?>
									<div class=" flex justify-center items-center">
										<div class="video-player">
											<div id="player" class="videoplayers js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('video_embed');?>">
											</div>
										</div>
									</div>
						<?php endif; ?>
						<div class="pseudo-border absolute absolute-bottom"></div>
					</div>

				<?php endif;?>

				<?php if( get_row_layout() == 'two_images' ): ?>

					<div class="flex justify-center items-center flex-wrap relative">
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100 aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box');?>');">
									</div>
								</div>
								<div class="pseudo-border absolute dn-ns absolute-bottom"></div>
								<div class="pseudo-border vertical dn db-ns absolute absolute-right absolute-top"></div>
							</div>
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100  aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box_second');?>');">
									</div>
								</div>
							</div>
							<div class="pseudo-border absolute absolute-bottom"></div>
					</div>
				<?php endif;
			endwhile;endif;?>

			<?php get_template_part('template-parts/content-bud-marquee');?>

			<?php if( have_rows('features_content') ): while ( have_rows('features_content') ) : the_row();
				 if( get_row_layout() == 'two_images_and_title' ): ?>

					<div class="flex justify-center items-center flex-wrap relative">
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100 aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box');?>');">
									</div>
								
									<div class="pseudo-border absolute dn-ns absolute-bottom"></div>
								</div>
								<div class="pseudo-border vertical dn db-ns absolute absolute-right absolute-top"></div>
							</div>
							<div class="wrapper w-100 w-50-ns">
								<div class="flex flex-column items-start justify-center pa3 pa3-ns pa5-l">
                                        <?php the_sub_field('text_column'); ?>
                                </div>
							</div>
							<div class="pseudo-border absolute absolute-bottom"></div>
					</div>
			<?php endif;
			endwhile;endif;?>
        
	
		
		<?php if( have_rows('features_content') ): while ( have_rows('features_content') ) : the_row();
        
			 if( get_row_layout() == 'two_images_second_row' ): ?>

					<div class="flex justify-center items-center flex-wrap relative">
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100 aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box');?>');">
									</div>
								</div>
								<div class="pseudo-border absolute dn-ns absolute-bottom"></div>
								<div class="pseudo-border vertical dn db-ns absolute absolute-right absolute-top"></div>
							</div>
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100  aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box_second');?>');">
									</div>
								</div>
							</div>
							<div class="pseudo-border absolute absolute-bottom"></div>
					</div>
				
			<?php endif; 
		endwhile; 
		endif;?>

<?php get_template_part('template-parts/content-links');?>
	
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer();?>