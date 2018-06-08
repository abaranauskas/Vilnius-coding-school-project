<section id="about-me" class="about-me">
	<div class="container">
		<div class="flex pic-name">
			<?php
				$picture = get_field('ha_about_me_picture');
			?>
			<div>
				<img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['title']; ?>">
			</div>
			<div class="name-owner">
				<h2><?php the_field('ha_about_me_name'); ?></h2>				
				<h3><?php the_field('ha_about_me_large_name'); ?></h3>
			</div>
		</div>

		<p><?php the_field('ha_about_me_content'); ?>.</p>
	</div>
</section>		<!-- end of third section -->