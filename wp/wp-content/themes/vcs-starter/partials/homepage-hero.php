<section id="hero" class="hero-section">

	<?php

	// check if the repeater field has rows of data
	if( have_rows('hh_homepage_hero_repeater', 'option') ):

	 	// loop through the rows of data
	    while ( have_rows('hh_homepage_hero_repeater', 'option') ) : the_row();
	        // display a sub field value
	        $backgroun_image = get_sub_field('hh_hero_background');
	        $hero_btn = get_sub_field('hh_read_more_button_link');
	        ?>
				<div class="hero" style="background-image: url('<?php echo $backgroun_image["url"]; ?>')">
					<div class="container">
						<h1><?php the_sub_field('hh_hero_heading_part1'); ?><span><?php the_sub_field('hh_hero_heading_part2'); ?></span></h1>
						<a class="read-btn" href="<?php echo $hero_btn['url']; ?>" <?php echo ($hero_btn['target']!='') ? 'target="_blank"' : ''; ?>><?php echo $hero_btn["title"]; ?></a>
					</div>
				</div>

			<?php
	    endwhile;
	endif;

	?>
</section>		<!-- end of hero section -->