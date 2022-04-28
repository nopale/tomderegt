<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tomderegt
 */

?>

	<footer id="colophon" class="site-footer flex flex-wrap justify-center items-center w-100 relative">

		<div class="footer-tile w-100 w-third-l flex justify-center justify-around-l items-center pa4-ns relative h-100">
			<div class="w-100 w-50-ns flex justify-center justify-start-l flex-column tc tl-ns">
				<p class="ttu ma0 tc tl-ns">TOM DE REGT ©2020</p>
				<p class="ttu ma0 tc tl-ns credit-link"><a href="http://www.amatoalessandro.com/" target="_blank" class="link">site by Alessandro Amato</a></p>
			</div>
			<div class="w-50 h-100 dn db-l relative">
				<div class="line-1"></div>
				<div class="line-2"></div>
			</div>
			<div class="pseudo-border dn-l absolute absolute-bottom absolute-left"></div>
			<div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
			<div class="pseudo-border vertical absolute absolute-top absolute-left dn-l"></div>
		</div>
		<div class="footer-tile w-100 w-third-l flex justify-center pa4-ns relative h-100">

		<a href="<?php echo esc_url(home_url('/')); ?>" class="link link-hover" rel="home">
		<img src="<?php bloginfo('template_directory');?>/assets/tdr.svg" style="width: 72px;">
		</a>
			<div class="pseudo-border dn-l absolute absolute-bottom absolute-left"></div>
			<div class="pseudo-border vertical absolute absolute-top absolute-right"></div>
			<div class="pseudo-border vertical absolute absolute-top absolute-left dn-l"></div>
		</div>
		<div class="footer-tile w-100 w-third-l pa4-ns relative h-100 flex justify-center justify-end-l items-center tc tr-ns">
			<p class="ttu ma0 ">direction & design<br><a href="mailto:contact@tomderegt.com" class="link">contact@tomderegt.com</a></p>
			<a href="https://www.instagram.com/tomderegt/" target="_blank" class="link"><img src="<?php bloginfo('template_directory');?>/assets/insta.svg" style="min-width: 36px; margin-left: 16px;"></a>
			<div class="pseudo-border vertical absolute absolute-top absolute-right dn-l"> </div>
			<div class="pseudo-border vertical absolute absolute-top absolute-left dn-l"></div>
		</div>
		<div class="pseudo-border absolute absolute-bottom absolute-left">
			
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
