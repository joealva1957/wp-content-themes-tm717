<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="text-center">
				<img class="img-fluid" src="<?php echo wp_get_attachment_url(  get_post_thumbnail_id($post->ID),  'thumbnail'  );  ?>" />
			</div>
		</div>
	</div>
	<br/>
	<hr/>
	<br/>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<div class="text-center">
				<img src="<?php bloginfo('template_directory');?>/assets/images/header-image-contact.jpeg" alt="header-image-contact" class="img-fluid">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<div class="text-center">
				<h5>Centro de Trabajo</h5>
				<p>Reunimos talento de todos el país para destacarnos como empresa Esencial <br/> Costa Rica.</p>
				<address>
				<p>Distrito Espíritu Santo, Cantón Esparza <br/>
				Provincia de Puntarenas. <br/>
				Costa Rica.</p>
				<p>Mail to: <br/>
				<a href="mailto:wpadmintm717@nobank.com">Joe Alvarado</a>
				</p>
				<p>Call now: <br/>
				+506 8888 8888
				</p>
				</address>
			</div>
		</div>
	</div>
	<br/>
	<hr/>
	<br/>
	<section class="">
		<div class="row text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<img class="img-thumbnail" src="<?php bloginfo('template_directory');?>/assets/images/header-image-contact.jpeg" alt="Card image">	 
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="text-center"> 
					<?php
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<h2>
							<?php the_title(); ?> </h2>
						<p class="">
							<?php the_content(); ?>
						</p>
						<?php
					endwhile;
				else :
					echo "<p>No hay contenido que mostrar</p>";
				endif;
				?>
				</div>
			</div>
		</div>
	</section>
</div>

<br/>
<hr/>
<br/>

<?php get_footer(); ?>
