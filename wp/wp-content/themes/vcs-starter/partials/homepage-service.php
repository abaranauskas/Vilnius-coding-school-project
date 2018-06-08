<section id="homepage-service" class="service">
	<div class="container">
		<h2><?php the_field('hs_service_heading'); ?></h2>
		<p><?php the_field('hs_service_content'); ?></p>		
	
		<ul class="flex">
			
			<?php

			// check if the repeater field has rows of data
			if( have_rows('hs_service_icon_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('hs_service_icon_repeater') ) : the_row();
			        // display a sub field value
			        $icon = get_sub_field('hs_icon');
			        // var_dump($icon);
			        // exit;
			        ?>
						<li><img src="<?php echo $icon['url']; ?>" alt="sass-logo"></li>
			        <?php
			    endwhile;
			endif;
			?>
		</ul>
	</div>
</section>		<!-- end of second section -->