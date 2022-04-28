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

<?php 
    
    $rand = array('d43d27', '7fa5c2', 'e2b31e', 'c4c5c7', 'b19eb8', '517362');
    $color = '#'.$rand[rand(0,5)];
?>

    <div class="clients-grid relative">
        <div class="pseudo-border vertical absolute absolute-top absolute-left"></div>
        <div class="pseudo-border absolute absolute-bottom"></div>
        
                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/daily-paper" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/daily-icon.png'); background-size: 20%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">daily paper</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>

                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/budweiser" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/bud-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">budweiser</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/puma" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/puma-icon.png'); background-size: 29%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">puma</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/alpha-industries" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/alpha-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">alpha<br>industries</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/nike" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/nike-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">nike</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/redbull" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/redbull-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">redbull</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/ua-icon.png');background-size: 25%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">under<br>armour</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/denham-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">denham</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a  class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/parley-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">parley</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/stedelijk-museum" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/stedelijk-icon.png'); background-size: 20%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">stedelijk<br>museum</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/yellow-claw" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/yc-icon.png'); background-size: 28%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">yellow<br>claw</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/sony-icon.png'); background-size: 20%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">sony<br>music</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/knvb-icon.png'); background-size: 25%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">knvb</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/bnn-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0">bnn</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/tony-chocolonely" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/tony-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">tony<br>chocolonely</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>

                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a class=" w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/gemeente-icon.png'); background-size: 10%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">gemeente<br>amsterdam</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>

                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/blood-for-mercy" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/blood-icon.png');">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">blood for<br>mercy</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>


                        <div class="client-icon-cont aspect-ratio aspect-ratio--1x1 relative">
                            <a href="/client/barong-family" class="link w-75 h-75">
                                <div class="aspect-ratio--object client-tile flex items-center justify-center" 
                                style="background-image: url('<?php bloginfo('template_directory');?>/assets/barong-icon.png'); background-size: 20%;">
                                </div>
                                <p class="absolute shadow-text f6 f5-ns ttu ma0 tc">barong<br>family</p>
                           </a>
 
                                <div class="pseudo-border absolute absolute-top"></div>
                                <div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
                        </div>



    </div>

    <?php get_template_part('template-parts/content-clients');?>

<?php get_template_part('template-parts/content-links');?>

</main>

<?php get_footer();?>    