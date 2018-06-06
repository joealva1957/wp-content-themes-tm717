<?php get_header(); ?>

<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-center">
					<img src="<?php bloginfo('template_directory');?>/assets/images/header-image-contact.jpeg" alt="header-image-contact" class="img-fluid" >
				</div>
			</div>
		</div>
	<section class="s-about-1">
		<div class="row text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<?php
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
					<h2> <?php the_title(); ?> </h2>
					<p class=""> <?php the_content(); ?></p>
			   <?php
					endwhile;
				else :
					echo "<p>No hay contenido que mostrar</p>";
				endif;
				?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>