<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<?php wp_head(); ?>
<body>	
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
    	<div class="left-side">
	<div class="photo">
		<img src="<?php bloginfo('template_directory'); ?>/css/image.png">
	</div>

	<div class="name">
		<p class="full-name">HANNAH SMITH</p> 

		<p class="profession">INTERIOR DESIGNER</p>
		<div class="border">
			
		</div>
	</div>

	<div class="contact">
		<img src="<?php bloginfo('template_directory'); ?>/css/location.png" class="adress-pic">

		<p class="adress">715 Mataram City  New York, NY 35785</p>

		<img src="<?php bloginfo('template_directory'); ?>/css/phone.png" class="phone-pic">

		<p class="phone">+92 232 534 234</p>

		<img src="<?php bloginfo('template_directory'); ?>/css/email.png" class="email-pic">

		<p class="email">hannasmith@gmail.com</p>

		<div class="border2">
			
		</div>				
	</div>
				

	<div class="skills">

		<p class="head">SKILLS</p>

		<div>
			<span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span>

			<p>Photoshop</p>					
		</div>

		<div>
			<span class="inactive"></span><span class="inactive"></span><span class="active"></span><span class="active"></span><span class="active"></span>

			<p>Illustrator</p>			
		</div>

		<div>
			<span class="inactive"></span><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span>

			<p>Indesign</p>				
		</div>

		<div>
			<span class="inactive"></span><span class="inactive"></span><span class="active"></span><span class="active"></span><span class="active"></span>

			<p>Adobe XD</p>
		</div>

		<div>
			<span class="inactive"></span><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span>

			<p>Sketch</p>
		</div>					
	</div>

	<div class="bottom">
		<p>www.hannahsmith.com</p>
	</div>			
</div>

<img src="<?php bloginfo('template_directory'); ?>/css/frame.png" class="frame">

<div class="right-side">			
	<?php 
		wp_nav_menu( array( 
			'theme_location' => 'header-menu',
			'container_class' => 'menu_class' ) 
		);

		the_content(); 
	?>;		
</div>
    <?php endwhile; 
endif; 
?>
					
</body>
</html>