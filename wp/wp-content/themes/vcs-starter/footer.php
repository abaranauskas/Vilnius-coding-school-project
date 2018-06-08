	<footer class="footer">
		<div>
			<h2><?php the_field('ts_main_logo', 'option');?></h2>
		</div>
		<div class="container">			
			<nav>
				<?php
				$args1 = [
					'theme_location'=> 'footer-navigation',
					'menu_class' => 'flex',
					'container' =>false			
				];

				wp_nav_menu($args1);
				?>
			</nav>	
			<div>
				<ul>

					<?php

						// check if the repeater field has rows of data
						if( have_rows('ts_footer_contacts_repeater', 'option') ):

						 	// loop through the rows of data
						    while ( have_rows('ts_footer_contacts_repeater', 'option') ) : the_row();
						        // display a sub field value
						        the_sub_field('sub_field_name');
						        ?>
								
								<li><?php 
										$type = get_sub_field('ts_footer_address_type');
										$row = get_sub_field('ts_footer_contact_row');
										//var_dump($type);				

										if($type == "tel") {
											echo "<a href='tel:$row'>"; 
										} elseif ($type == "email") {
											echo "<a href='mailto:$row'>";
										}

										echo $row;

										if($type != "address") {
											echo "</a>";
										}
								?></li>

								<?php
						    endwhile;
						endif;
					?>
				</ul>
			</div>					
		</div>
		<div class="flex">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('ts_footer_social_menu_repeater', 'option') ):
					
			 	// loop through the rows of data
			    while ( have_rows('ts_footer_social_menu_repeater', 'option') ) : the_row();  //options del to kad per custom field theme settings susikuriau
			    	// display a sub field value
			    	$link = get_sub_field('ts_footer_menu_link');
			    	$icon = get_sub_field('ts_footer_menu_link_icon');			    	
			    	?>
			        
			        <div><a href="<?php echo $link['url']; ?>" <?php echo ($link['target']!='') ? 'target="_blank"' : ''; ?>><img src="<?php echo $icon["url"]; ?>" alt="<?php echo bloginfo('name'); echo " "; echo $icon["title"]; ?>"></a></div>

			        <?php
			    endwhile;
			endif;
			?>
			
		</div>
		<div>	
			<span>COPYRIGHT &copy; <?php echo date('Y'); ?>. 
			 <?php 
				_e("ALL RIGHTS RESERVED. ", "vcs-starter");  
				_e("DESIGNED BY", "vcs-starter"); 
				?>		<!-- rtimas vcs-starter is style.css sablono kur Text Domain: vcs-starte -->
			AiBDev</span>
		</div>
	</footer>    <!-- End of footer -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2XEDL8eR5EqM7DLy70qUMSQtJSq90GOA&callback=initMap"
    async defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

	 <?php wp_footer(); ?>
</body>		
</html>
