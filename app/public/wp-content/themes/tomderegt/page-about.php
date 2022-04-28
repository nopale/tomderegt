
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

<?php if( have_rows('page_content') ): while ( have_rows('page_content') ) : the_row();
        
		if( get_row_layout() == 'two_columns_layout' ): ?>

					<div class="flex justify-center items-center flex-wrap relative">
							<div class="wrapper w-100 w-50-ns relative">
								<div class="w-100 aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
									<div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
									style="background-image: url('<?php the_sub_field('image_box');?>');">
									</div>
									<div class="pseudo-border vertical absolute dn db-ns absolute-top absolute-right"></div>
									<div class="pseudo-border absolute dn-ns absolute-bottom "></div>
								</div>
								<div class="photo-credit absolute absolute-bottom"><p class="">Photo: Calvin Pausania</p></div>
							</div>
							<div class="wrapper w-100 w-50-ns">
								<div class="flex flex-column items-start justify-center pa3 pa3-ns pa5-l">
                                        <?php the_sub_field('text_column'); ?>
                                </div>
							</div>
							<div class="pseudo-border  absolute absolute-bottom "></div>
					</div>
				
		<?php endif;
		endwhile;
		endif;?>
        
        <?php get_template_part('template-parts/content-marquee');?>

<?php get_template_part('template-parts/content-links');?>

</main>

<?php get_footer();?>