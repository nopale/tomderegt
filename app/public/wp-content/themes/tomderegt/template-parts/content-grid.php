
		<div class="grid-tile relative overflow-hidden">  
           
            <div class="bg-wrapper pa3 pa4-l relative">
                <a class="pop-out-trigger link w-100 h-100 ">
                    <div class="aspect-ratio aspect-ratio--1x1 bg-container overflow-hidden">
                        <div class="aspect-ratio--object bg-center flex items-center justify-center bg-tile" 
                        style="<?php nice_background('hero_image');?>">
                        </div>
                    </div>
                 

                            <h2 class="f3 f2-l absolute overlay-title"> <?php the_title();?></h2>
                            <?php if( have_rows('post_content_layouts') ): while ( have_rows('post_content_layouts') ) : the_row(); 
                                    if( get_row_layout() == 'category_display' ): ?>

                                    <div class="cat-display flex absolute">
                                        <p><?php the_sub_field('category_name_one'); ?></p>
                                        <?php if (get_sub_field('category_name_two') ):?>
                                        <p><?php the_sub_field('category_name_two'); ?></p>
                                        <?php endif;?>
                                        <?php if (get_sub_field('category_name_three') ):?>
                                        <p><?php the_sub_field('category_name_three'); ?></p>
                                        <?php endif;?>
                                    </div>

                                    <?php endif; endwhile; endif; ?>
                 
                </a>
                
            </div>
                <div class="pop-out absolute ">
                        <div class="absolute close-button flex justify-center items-center link"> 
                            <svg class="close-svg" width="100%" height="100%" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill=""/>
                                <g id="target" clip-path="url(#clip0)">
                                <g id="Layer 2">
                                <g id="Layer 1">
                                <g id="target_2">
                                <path id="Vector" d="M31.8 50C41.8516 50 50 41.8516 50 31.8C50 21.7484 41.8516 13.6 31.8 13.6C21.7484 13.6 13.6 21.7484 13.6 31.8C13.6 41.8516 21.7484 50 31.8 50Z" stroke="" stroke-width="3" stroke-miterlimit="10"/>
                                <path id="Vector_2" d="M63.7 31.8H0" stroke="" stroke-width="2.5" stroke-miterlimit="10"/>
                                <path id="Vector_3" d="M31.8 0V63.7" stroke="" stroke-width="2.5" stroke-miterlimit="10"/>
                                </g>
                                </g>
                                </g>
                                </g>
                            </svg>
                        </div>
                        <div class="absolute bottom-corner ">
                                <svg class="corner-svg rotate-90" width="20" height="20" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" />
                                    <g id="corner" clip-path="url(#clip0)">
                                    <g id="Layer 2">
                                    <g id="Layer 1">
                                    <path id="Vector" d="M38.2041 39V0.795929H0" stroke="" stroke-width="2.5" stroke-miterlimit="10"/>
                                    </g>
                                    </g>
                                    </g>
                                </svg>
                        </div>
                    
                        <div class="post-content flex flex-wrap w-100 h-100">
                            <div class=" w-100 h-50 w-50-ns h-100-ns relative " >
                                <div class="carousel relative " data-flickity='{  }'>

                                <?php if( have_rows('post_content_layouts') ): while ( have_rows('post_content_layouts') ) : the_row();
                                    
                                    if( get_row_layout() == 'carousel_video' ): ?>

                                            <?php if( get_sub_field('carousel_video') ): ?>
                                            <div class="carousel-cell flex justify-center items-center">
                                                <div class="video-player">
                                                    <div id="player" class="videoplayers js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('carousel_video');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_sub_field('carousel_video_two') ): ?>
                                            <div class="carousel-cell flex justify-center items-center">
                                                <div class="video-player">
                                                    <div id="player" class="videoplayers js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('carousel_video_two');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_sub_field('carousel_video_three') ): ?>
                                            <div class="carousel-cell flex justify-center items-center">
                                                <div class="video-player">
                                                    <div id="player" class="videoplayers js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('carousel_video_three');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_sub_field('carousel_video_four') ): ?>
                                            <div class="carousel-cell flex justify-center items-center">
                                                <div class="video-player">
                                                    <div id="player" class="videoplayers js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('carousel_video_four');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            

                                    <?php elseif( get_row_layout() == 'gallery_for_case_carousel' ): ?>
                                        
                                            <?php $images = get_sub_field('gallery'); ?>
                                            <?php  foreach($images as $image) : ?>
                                                <div class="carousel-cell flex justify-center items-center">
                                                    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
                                                </div>
                                            <?php endforeach ?>
                                          
                                        <?php endif; 
                                    endwhile; endif; ?>
                                
                                </div>
                                <div class="pseudo-border absolute absolute-bottom db dn-ns"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                            </div>

                            <div class="w-100  h-50 w-50-ns h-100-ns flex justify-center items-center ">
                                <div class="w-100 text-container pa4 pa5-ns pa5-l tl">
                                        <h2 class="f3 f2-ns f1-l post-title ttu mb3 mb4-l"> <?php the_title(); ?> </h2>
                                        <!-- <p class=" post-description"> </p> -->
                                        <div class="description mb3 mb4-l">
                                            <?php the_content(); ?>
                                        </div>

                                     <?php if( get_field('credits_paragraph') ): ?>
                                            <div class="credits">
                                            
                                                <?php the_field('credits_paragraph');?>
                                            
                                            </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                        
                    <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                    <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                    <div class="pseudo-border absolute absolute-bottom"></div>
                    <div class="pseudo-border absolute absolute-top"></div>
                </div>
            <div class="pseudo-border absolute absolute-bottom"></div>
            <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
        </div>
