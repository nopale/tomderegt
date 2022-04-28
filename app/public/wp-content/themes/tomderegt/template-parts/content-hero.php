

<section class="hero-background  tc relative"
style="">

<div class="hero-icons flex justify-between absolute w-100 absolute-top">

        <svg class="rotate-270" width="20" height="20" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" />
        <g id="corner" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M38.2041 39V0.795929H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>

        </svg>
        <svg width="25" height="2" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="25" height="2" />
        <g id="segment" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M55.7 1.5H0" stroke="#D1D3D4" stroke-width="2" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>
        </svg>
        <svg width="20" height="20" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" />
        <g id="corner" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M38.2041 39V0.795929H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>

        </svg>

</div>

<div class="hero-icons flex justify-between absolute w-100 absolute-middle">

        <svg class="target-group" width="20" height="20" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" fill=""/>
        <g id="target" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <g id="target_2">
        <path id="Vector" d="M31.8 50C41.8516 50 50 41.8516 50 31.8C50 21.7484 41.8516 13.6 31.8 13.6C21.7484 13.6 13.6 21.7484 13.6 31.8C13.6 41.8516 21.7484 50 31.8 50Z" stroke="#D1D3D4" stroke-width="3" stroke-miterlimit="10"/>
        <path id="Vector_2" d="M63.7 31.8H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        <path id="Vector_3" d="M31.8 0V63.7" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>
        </g>

        </svg>

        <svg class="target-group" width="20" height="20" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" fill=""/>
        <g id="target" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <g id="target_2">
        <path id="Vector" d="M31.8 50C41.8516 50 50 41.8516 50 31.8C50 21.7484 41.8516 13.6 31.8 13.6C21.7484 13.6 13.6 21.7484 13.6 31.8C13.6 41.8516 21.7484 50 31.8 50Z" stroke="#D1D3D4" stroke-width="3" stroke-miterlimit="10"/>
        <path id="Vector_2" d="M63.7 31.8H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        <path id="Vector_3" d="M31.8 0V63.7" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>
        </g>

        </svg>

</div>

<div class="hero-icons flex justify-between absolute w-100 absolute-bottom items-end">

        <svg class="rotate-180" width="20" height="20" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" />
        <g id="corner" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M38.2041 39V0.795929H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>

        </svg>
        <svg width="25" height="2" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="25" height="2" />
        <g id="segment" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M55.7 1.5H0" stroke="#D1D3D4" stroke-width="2" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>
        </svg>
        <svg class="rotate-90" width="20" height="20" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="20" height="20" />
        <g id="corner" clip-path="url(#clip0)">
        <g id="Layer 2">
        <g id="Layer 1">
        <path id="Vector" d="M38.2041 39V0.795929H0" stroke="#D1D3D4" stroke-width="2.5" stroke-miterlimit="10"/>
        </g>
        </g>
        </g>

        </svg>

</div>

<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post__in' => [19]
);

// we can also do our options like this too
$query = new WP_Query($args);

if ($query->have_posts()): while ($query->have_posts()): $query->the_post();?>

		     <div class="img-background h-100 w-100" style="">
                        <video class="w-100 h-100" poster="<?php the_field('hero_video_poster');?>" autoplay playsinline hideControls muted>
                        <source src="<?php the_field('hero_video');?>" type="video/mp4" />
                        <!-- Captions are optional -->
                        </video>
		      </div>

		<?php endwhile;endif;
wp_reset_postdata();
?>

     <div class="scroll-down absolute ">
            <a class="arrow down link">
            </a>
        <a class="ghost link absolute" href="#main"></a>
        </div>
        <div class="pseudo-border absolute db dn-ns absolute-bottom"></div>
</section>
