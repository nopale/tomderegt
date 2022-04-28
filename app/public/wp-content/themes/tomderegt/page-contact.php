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
							</div>
							<div class="wrapper w-100 w-50-ns h-100 contact-text">
								<div class="flex flex-column items-center justify-center mt5 pa3 pa3-ns pa5-l">
									<div class="flex flex-column justify-center items-center">
										<a class="link" href="mailto:contact@tomderegt.com">
                                        <h1 class="f3 f2-l contact-title">contact@tomderegt.com</h1>
                                       </a>
							

									</div>							
								</div>
										   
								<div class="social-icons flex justify-center items-center w-100 mb5 mt3 mt4-ns mt6-l h-50">
										  <a href="https://www.instagram.com/tomderegt/" target="_blank" class="link" > <img src="<?php bloginfo('template_directory');?>/assets/insta.svg" style="width: 36px; margin-right: 24px;"></a>
										  <a href="https://www.linkedin.com/in/thomas-de-regt-7a766920/" target="_blank" class="link" > <img src="<?php bloginfo('template_directory');?>/assets/linkedin.svg" style="width: 36px; margin-bottom: 2px;"></a>
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