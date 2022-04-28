<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tomderegt
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php if( have_rows('grid_items') ): while ( have_rows('grid_items') ) : the_row();
                                    
                                    if( get_row_layout() == 'grid_layout' ): ?>

                                    <?php if( get_sub_field('moksi') ): ?>

                                        <div class="grid center client-grid relative">
                                        <div class="pseudo-border absolute absolute-top "></div>
                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                <?php

                                                    $args5 = array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => -1,
                                                    'tag' => 'moksi',
                                                    'orderby' => 'ASC'
                                                    );

                                                    
                                                    $query5 = new WP_Query($args5);

                                                if ($query5->have_posts()): while ($query5->have_posts()): $query5->the_post();?>

                                                <?php get_template_part('template-parts/content-grid');?>

                                                <?php endwhile;endif;
                                                    wp_reset_postdata();
                                                ?>
                                        </div>

                                                <?php endif; ?>

                                                <?php if( get_sub_field('barong_family') ): ?>

                                                <div class="grid center client-grid relative">
                                                <div class="pseudo-border absolute absolute-top "></div>
                                                    <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                        <?php

                                                            $args6 = array(
                                                            'post_type' => 'post',
                                                            'posts_per_page' => -1,
                                                            'tag' => 'barong-family',
                                                            'orderby' => 'ASC'
                                                            );

                                                            
                                                            $query6 = new WP_Query($args6);

                                                        if ($query6->have_posts()): while ($query6->have_posts()): $query6->the_post();?>

                                                        <?php get_template_part('template-parts/content-grid');?>

                                                        <?php endwhile;endif;
                                                            wp_reset_postdata();
                                                        ?>
                                                </div>

                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('blood_for_mercy') ): ?>

                                                            <div class="grid center client-grid relative">
                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                    <?php

                                                                        $args7 = array(
                                                                        'post_type' => 'post',
                                                                        'posts_per_page' => -1,
                                                                        'tag' => 'bfm',
                                                                        'orderby' => 'ASC'
                                                                        );

                                                                        
                                                                        $query7 = new WP_Query($args7);

                                                                    if ($query7->have_posts()): while ($query7->have_posts()): $query7->the_post();?>

                                                                    <?php get_template_part('template-parts/content-grid');?>

                                                                    <?php endwhile;endif;
                                                                        wp_reset_postdata();
                                                                    ?>
                                                            </div>

                                                                    <?php endif; ?>


                                                        <?php if( get_sub_field('yellow_claw') ): ?>

                                                            <div class="grid center client-grid relative">
                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                    <?php

                                                                        $args8 = array(
                                                                        'post_type' => 'post',
                                                                        'posts_per_page' => -1,
                                                                        'tag' => 'yellow',
                                                                        'orderby' => 'ASC'
                                                                        );

                                                                        
                                                                        $query8 = new WP_Query($args8);

                                                                    if ($query8->have_posts()): while ($query8->have_posts()): $query8->the_post();?>

                                                                    <?php get_template_part('template-parts/content-grid');?>

                                                                    <?php endwhile;endif;
                                                                        wp_reset_postdata();
                                                                    ?>
                                                            </div>

                                                                    <?php endif; ?>

                                                                    <?php if( get_sub_field('daily_paper') ): ?>

                                                                <div class="grid center client-grid relative">
                                                                <div class="pseudo-border absolute absolute-top "></div>
                                                                    <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                        <?php

                                                                            $args9 = array(
                                                                            'post_type' => 'post',
                                                                            'posts_per_page' => -1,
                                                                            'tag' => 'daily',
                                                                            'orderby' => 'ASC'
                                                                            );

                                                                            
                                                                            $query9 = new WP_Query($args9);

                                                                        if ($query9->have_posts()): while ($query9->have_posts()): $query9->the_post();?>

                                                                        <?php get_template_part('template-parts/content-grid');?>

                                                                        <?php endwhile;endif;
                                                                            wp_reset_postdata();
                                                                        ?>
                                                                </div>

                                                                        <?php endif; ?>

                                                                        <?php if( get_sub_field('stedelijk_museum') ): ?>

                                                                    <div class="grid center client-grid relative">
                                                                    <div class="pseudo-border absolute absolute-top "></div>
                                                                        <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                            <?php

                                                                                $args13 = array(
                                                                                'post_type' => 'post',
                                                                                'posts_per_page' => -1,
                                                                                'tag' => 'stedelij-museum',
                                                                                'orderby' => 'ASC'
                                                                                );

                                                                                
                                                                                $query13 = new WP_Query($args13);

                                                                            if ($query13->have_posts()): while ($query13->have_posts()): $query13->the_post();?>

                                                                            <?php get_template_part('template-parts/content-grid');?>

                                                                            <?php endwhile;endif;
                                                                                wp_reset_postdata();
                                                                            ?>
                                                                    </div>

                                                                            <?php endif; ?>

                                                                            <?php if( get_sub_field('tony_chocolonely') ): ?>

                                                                                <div class="grid center client-grid relative">
                                                                                <div class="pseudo-border absolute absolute-top "></div>
                                                                                <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                    <?php

                                                                                        $args14 = array(
                                                                                        'post_type' => 'post',
                                                                                        'posts_per_page' => -1,
                                                                                        'tag' => 'tony',
                                                                                        'orderby' => 'ASC'
                                                                                        );

                                                                                        
                                                                                        $query14 = new WP_Query($args14);

                                                                                    if ($query14 ->have_posts()): while ($query14->have_posts()): $query14->the_post();?>

                                                                                    <?php get_template_part('template-parts/content-grid');?>

                                                                                    <?php endwhile;endif;
                                                                                        wp_reset_postdata();
                                                                                    ?>
                                                                                </div>

                                                                            <?php endif; ?>


                                                                            <?php if( get_sub_field('alpha_industries') ): ?>

                                                                                    <div class="grid center client-grid relative">
                                                                                    <div class="pseudo-border absolute absolute-top "></div>
                                                                                    <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                        <?php

                                                                                            $args15 = array(
                                                                                            'post_type' => 'post',
                                                                                            'posts_per_page' => -1,
                                                                                            'tag' => 'alpha-industries',
                                                                                            'orderby' => 'rand'
                                                                                            );

                                                                                            
                                                                                            $query15 = new WP_Query($args15);

                                                                                        if ($query15 ->have_posts()): while ($query15->have_posts()): $query15->the_post();?>

                                                                                        <?php get_template_part('template-parts/content-grid');?>

                                                                                        <?php endwhile;endif;
                                                                                            wp_reset_postdata();
                                                                                        ?>
                                                                                    </div>

                                                                                    <?php endif; ?>



                                                                            <?php if( get_sub_field('bnn') ): ?>

                                                                            <div class="grid center client-grid relative">
                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                <?php

                                                                                    $args16 = array(
                                                                                    'post_type' => 'post',
                                                                                    'posts_per_page' => -1,
                                                                                    'tag' => 'bnn',
                                                                                    'orderby' => 'ASC'
                                                                                    );

                                                                                    
                                                                                    $query16 = new WP_Query($args16);

                                                                                if ($query16 ->have_posts()): while ($query16->have_posts()): $query16->the_post();?>

                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                <?php endwhile;endif;
                                                                                    wp_reset_postdata();
                                                                                ?>
                                                                            </div>

                                                                            <?php endif; ?>

                                                                            <?php if( get_sub_field('sony_music') ): ?>

                                                                            <div class="grid center client-grid relative">
                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                <?php

                                                                                    $args17 = array(
                                                                                    'post_type' => 'post',
                                                                                    'posts_per_page' => -1,
                                                                                    'tag' => 'sony-music',
                                                                                    'orderby' => 'ASC'
                                                                                    );

                                                                                    
                                                                                    $query17 = new WP_Query($args17);

                                                                                if ($query17 ->have_posts()): while ($query17->have_posts()): $query17->the_post();?>

                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                <?php endwhile;endif;
                                                                                    wp_reset_postdata();
                                                                                ?>
                                                                            </div>

                                                                            <?php endif; ?>

                                                                            <?php if( get_sub_field('puma') ): ?>

                                                                            <div class="grid center client-grid relative">
                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                <?php

                                                                                    $args18 = array(
                                                                                    'post_type' => 'post',
                                                                                    'posts_per_page' => -1,
                                                                                    'tag' => 'puma',
                                                                                    'orderby' => 'ASC'
                                                                                    );

                                                                                    
                                                                                    $query18 = new WP_Query($args18);

                                                                                if ($query18 ->have_posts()): while ($query18->have_posts()): $query18->the_post();?>

                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                <?php endwhile;endif;
                                                                                    wp_reset_postdata();
                                                                                ?>
                                                                            </div>

                                                                            <?php endif; ?>

                                                                            <?php if( get_sub_field('redbull') ): ?>

                                                                            <div class="grid center client-grid relative">
                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                <?php

                                                                                    $args19 = array(
                                                                                    'post_type' => 'post',
                                                                                    'posts_per_page' => -1,
                                                                                    'tag' => 'redbull',
                                                                                    'orderby' => 'ASC'
                                                                                    );

                                                                                    
                                                                                    $query19 = new WP_Query($args19);

                                                                                if ($query19 ->have_posts()): while ($query19->have_posts()): $query19->the_post();?>

                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                <?php endwhile;endif;
                                                                                    wp_reset_postdata();
                                                                                ?>
                                                                            </div>

                                                                            <?php endif; ?>

                                                                            <?php if( get_sub_field('budweiser') ): ?>

                                                                                <div class="grid center client-grid relative">
                                                                                <div class="pseudo-border absolute absolute-top "></div>
                                                                                <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                    <?php

                                                                                        $args20 = array(
                                                                                        'post_type' => 'post',
                                                                                        'posts_per_page' => -1,
                                                                                        'tag' => 'budweiser',
                                                                                        'orderby' => 'ASC'
                                                                                        );

                                                                                        
                                                                                        $query20 = new WP_Query($args20);

                                                                                    if ($query20 ->have_posts()): while ($query20->have_posts()): $query20->the_post();?>

                                                                                    <?php get_template_part('template-parts/content-grid');?>

                                                                                    <?php endwhile;endif;
                                                                                        wp_reset_postdata();
                                                                                    ?>
                                                                                </div>

                                                                                <?php endif; ?>

                                                                                <?php if( get_sub_field('nike') ): ?>

                                                                                <div class="grid center client-grid relative">
                                                                                <div class="pseudo-border absolute absolute-top "></div>
                                                                                <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                    <?php

                                                                                        $args21 = array(
                                                                                        'post_type' => 'post',
                                                                                        'posts_per_page' => -1,
                                                                                        'tag' => 'nike',
                                                                                        'orderby' => 'ASC'
                                                                                        );

                                                                                        
                                                                                        $query21 = new WP_Query($args21);

                                                                                    if ($query21 ->have_posts()): while ($query21->have_posts()): $query21->the_post();?>

                                                                                    <?php get_template_part('template-parts/content-grid');?>

                                                                                    <?php endwhile;endif;
                                                                                        wp_reset_postdata();
                                                                                    ?>
                                                                                </div>

                                                                                <?php endif; ?>

                                                                                <?php if( get_sub_field('knvb') ): ?>

                                                                                    <div class="grid center client-grid relative">
                                                                                    <div class="pseudo-border absolute absolute-top "></div>
                                                                                    <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                        <?php

                                                                                            $args22 = array(
                                                                                            'post_type' => 'post',
                                                                                            'posts_per_page' => -1,
                                                                                            'tag' => 'knvb',
                                                                                            'orderby' => 'ASC'
                                                                                            );

                                                                                            
                                                                                            $query22 = new WP_Query($args22);

                                                                                        if ($query22 ->have_posts()): while ($query22->have_posts()): $query22->the_post();?>

                                                                                        <?php get_template_part('template-parts/content-grid');?>

                                                                                        <?php endwhile;endif;
                                                                                            wp_reset_postdata();
                                                                                        ?>
                                                                                    </div>

                                                                                    <?php endif; ?>

                                                                                    <?php if( get_sub_field('denham') ): ?>

                                                                                        <div class="grid center client-grid relative">
                                                                                        <div class="pseudo-border absolute absolute-top "></div>
                                                                                        <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                            <?php

                                                                                                $args23 = array(
                                                                                                'post_type' => 'post',
                                                                                                'posts_per_page' => -1,
                                                                                                'tag' => 'denham',
                                                                                                'orderby' => 'ASC'
                                                                                                );

                                                                                                
                                                                                                $query23 = new WP_Query($args23);

                                                                                            if ($query23 ->have_posts()): while ($query23->have_posts()): $query23->the_post();?>

                                                                                            <?php get_template_part('template-parts/content-grid');?>

                                                                                            <?php endwhile;endif;
                                                                                                wp_reset_postdata();
                                                                                            ?>
                                                                                        </div>

                                                                                        <?php endif; ?>


                                                                                        <?php if( get_sub_field('parley') ): ?>

                                                                                            <div class="grid center client-grid relative">
                                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                                <?php

                                                                                                    $args24 = array(
                                                                                                    'post_type' => 'post',
                                                                                                    'posts_per_page' => -1,
                                                                                                    'tag' => 'parley',
                                                                                                    'orderby' => 'ASC'
                                                                                                    );

                                                                                                    
                                                                                                    $query24 = new WP_Query($args24);

                                                                                                if ($query24 ->have_posts()): while ($query24->have_posts()): $query24->the_post();?>

                                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                                <?php endwhile;endif;
                                                                                                    wp_reset_postdata();
                                                                                                ?>
                                                                                            </div>

                                                                                            <?php endif; ?>

                                                                                            <?php if( get_sub_field('ronnie_flex') ): ?>

                                                                                            <div class="grid center client-grid relative">
                                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                                <?php

                                                                                                    $args25 = array(
                                                                                                    'post_type' => 'post',
                                                                                                    'posts_per_page' => -1,
                                                                                                    'tag' => 'ronnie-flex',
                                                                                                    'orderby' => 'ASC'
                                                                                                    );

                                                                                                    
                                                                                                    $query25 = new WP_Query($args25);

                                                                                                if ($query25 ->have_posts()): while ($query25->have_posts()): $query25->the_post();?>

                                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                                <?php endwhile;endif;
                                                                                                    wp_reset_postdata();
                                                                                                ?>
                                                                                            </div>

                                                                                            <?php endif; ?>

                                                                                            <?php if( get_sub_field('gemeente_amsterdam') ): ?>

                                                                                            <div class="grid center client-grid relative">
                                                                                            <div class="pseudo-border absolute absolute-top "></div>
                                                                                            <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
                                                                                                <?php

                                                                                                    $args26 = array(
                                                                                                    'post_type' => 'post',
                                                                                                    'posts_per_page' => -1,
                                                                                                    'tag' => 'gemeente-amsterdam',
                                                                                                    'orderby' => 'ASC'
                                                                                                    );

                                                                                                    
                                                                                                    $query26 = new WP_Query($args26);

                                                                                                if ($query26 ->have_posts()): while ($query26->have_posts()): $query26->the_post();?>

                                                                                                <?php get_template_part('template-parts/content-grid');?>

                                                                                                <?php endwhile;endif;
                                                                                                    wp_reset_postdata();
                                                                                                ?>
                                                                                            </div>

                                                                                            <?php endif; ?>
                                                                            
                                    <?php endif;
                         endwhile; endif; ?>


	
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_template_part('template-parts/content-links');?>
<?php get_footer();?>