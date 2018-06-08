<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>	
	<link href="https://fonts.googleapis.com/css?family=Cherry+Swash:400,700&amp;subset=latin-ext" rel="stylesheet">

	
	<?php wp_head(); ?>
			
	
</head>
<body>
	<header class="menu-header">
		<div class="container flex">
			<div class="logoandburger flex">
				<a href="<?php echo site_url(); ?>"><?php the_field('ts_main_logo', 'option');?></a>
				<div class="burger-menu">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<nav class="nav">
				<!-- menu isvedimas is admino i front end -->
				<?php
				$args = [
					'theme_location'=> 'primary-navigation',
					'menu_class' => 'flex',
					'container' =>false			
				];

				wp_nav_menu($args);

				?>
			</nav>
		</div>
	</header>		<!-- end of header -->

	