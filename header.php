<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="WEB DEVELOPMENT COMPANY">
	<meta name="keywords" content="">
    <!--<title> <?php bloginfo('name'); ?> </title>-->
	
	<!--Google font api nova mono open sans-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nova+Mono|Open+Sans" rel="stylesheet">-->
	<!-- Responsive meta tag -->
    <?php wp_head(); ?>
</head>
<body>
	<section class="bg-light">
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<span class="navbar-brand text-dark">
						<img src="<?php bloginfo('template_directory');?>/assets/images/hedgehog-logo.png" 	alt="Compra de criptomonedas" class="img-fluid" > 
					</span>
				</div>
				<br/>
			</div>  
		</div>
		<br/>
	</section>
	<header class="bg-primary">  
		<div class="container">
			<nav id="" class="navbar navbar-expand-lg navbar-dark" role="navigation">  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>    
				</button>
				<?php 
					wp_nav_menu( array(
					 'theme_location'	=> 'primary',
					 'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
						'container'			=>	'div',
						'container_class'	=>	'collapse navbar-collapse',
						'container_id'		=>	'navbarSupportedContent',
						'menu_class'		=>	'navbar-nav mr-auto',
						'menu-item'			=>	'nav-item active',
					  'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
					  'walker'			=> new WP_Bootstrap_Navwalker()
					) );
				?>

			</nav>
		</div>
	</header>
	<!--<div class="text-center">
		<img src="<?php bloginfo('template_directory');?>/assets/images/jorge-multimedia.jpeg" class="img-fluid img-full-width" alt="Image header Jorge Multimedia">
	</div>-->
	

