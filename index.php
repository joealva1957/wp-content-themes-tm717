<?php get_header(); ?>

<section>
		<ul class="slider">
			<?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 

            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li><img class='img-full-width' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" /></li>
                <?php endwhile;
            else :
                echo "<p>no hay contenido</p>";
            endif;
        ?>
		</ul>
	<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?php //bloginfo('template_directory');?>/assets/images/1920x480.jpeg" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h4>Servicios financieros</h4>
				<p>Las incluyen los préstamos de dinero, las acciones de las empresas de carácter mundial, trasnacionales o no, y el flujo de capital que impulsa el intercambio comercial.</p>
		  	</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php //bloginfo('template_directory'); ?>/assets/images/bitcoin-cover.png" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h4>Dinero</h4>
				<p>Es todo activo o bien generalmente aceptado como medio de pago por los agentes económicos para sus intercambios y que además cumple las funciones de ser unidad de cuenta y depósito de valor</p>
		  	</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php //bloginfo('template_directory'); ?>/assets/images/laser-blue-cover.png" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<h4>Tecnología</h4>
				<p>La tecnología es la ciencia aplicada a la resolución de problemas concretos. Constituye un conjunto de conocimientos científicamente ordenados, que permiten diseñar y crear bienes o servicios que facilitan la adaptación al medio ambiente y la satisfacción de las necesidades esenciales y los deseos de la humanidad.</p>
		  	</div>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>-->
</section>

<section class="bg-light">
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-left">
					<h1 class="text-primary">El banco del futuro</h1>
					<p class="text-dark">Este no es el banco como usted lo conocía. Hedgehog es una banco <br> para cualquiera, que trabaja con usted, y para usted.</p>
					<!-- <img src="<?php bloginfo('template_directory');?>/assets/images/header-img.jpg" alt="Compra de criptomonedas" class="img-fluid" > -->
					<!--<img src="<?php bloginfo('template_directory');?>/assets/images/jorge-multimedia.jpeg" alt="Compra de criptomonedas" class="img-fluid" >-->
					<!--<img src="http://lorempixel.com/g/1920/200/business" alt="Negocios" class="img-fluid">-->
				</div>
			</div>
		</div>
	</div>
	<br/>
</section>
<section class="bg-light">
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 1</a>
					<!--<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/ico-moneda-intercambio.svg" alt="Intercambio de criptomonedas" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 1</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 2</a>
					<!--<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/ico-caja-de-seguridad.svg" alt="Seguridad" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 2</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 3</a>
					<!--<img src="<?php bloginfo('template_directory');?>/assets/images/ico-crecimiento.svg" alt="Servicio al cliente" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 3</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 4</a>
					<!--<img src="<?php bloginfo('template_directory');?>/assets/images/ico-crecimiento.svg" alt="Servicio al cliente" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 4</h5>
			</div>
		</div>
	</div>
	<br/>
</section>

<br/>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/card.png" alt="Card image">
					<div class="card-body">
						<h5 class="card-title">PayPal</h5>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-8">
				<div class="text-justify">
					<h2>Pagos y Transacciones</h2>
					<p>Consiste en todas las plataformas para realizar consultas de saldo, pagos y transferencias a través de internet, sin acudir a la oficina física. Aunque hoy varios bancos ofrecen esta opción, en realidad son las startups fintech las que más innovan en el sector. El caso de éxito más destacado en esta área es PayPal, una compañía estadounidense que facilita el pago en Internet y que hace posible transferir dinero entre usuarios de forma rápida.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<br/>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-8">
				<div class="text-justify">
					<h2>Gestión de finanzas personales</h2>
					<p>En este ítem están las compañías especializadas que ofrecen a los bancos soluciones de marca genérica para sus clientes. La más importante es la estadounidense Mint, que permite a sus clientes consultar todos los saldos y transacciones juntos. Extrae de forma automática toda la información financiera de sus cuentas en un solo lugar y la muestra de un modo claro. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/card.png" alt="Card image">
					<div class="card-body">
						<h5 class="card-title">PayPal</h5>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<br/>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/card.png" alt="Card image">
					<div class="card-body">
						<h5 class="card-title">PayPal</h5>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-8">
				<div class="text-justify">
					<h2>Plataformas de consultoría y comercialización para inversiones</h2>
					<p>Se trata de plataformas basadas en la compraventa de acciones y de otros productos bursátiles. Destacan startups como las alemanas Vaamo o Moneymeets, cuyo trabajo es optimizar las carteras de inversión de sus clientes privados a través de la red, para ayudarles a conseguir sus objetivos de ahorro y de capital.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<br/>

<section class="bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-center">
					<h2>Fintech</h2>
					<p>Se trata de un nuevo concepto de negocio que revoluciona el mercado financiero a escala mundial ya que define a aquellos servicios financieros que usan la tecnología para facilitar la vida al cliente y mejorar la experiencia de usuario.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<br/>

<section class="">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 1</a>
					<!--<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/ico-moneda-intercambio.svg" alt="Intercambio de criptomonedas" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 1</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 2</a>
					<!--<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/images/ico-caja-de-seguridad.svg" alt="Seguridad" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 2</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 3</a>
					<!--<img src="<?php bloginfo('template_directory');?>/assets/images/ico-crecimiento.svg" alt="Servicio al cliente" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 3</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="text-center">
					<a href="#">CONTENT ITEM OF THE DAY 4</a>
					<!--<img src="<?php bloginfo('template_directory');?>/assets/images/ico-crecimiento.svg" alt="Servicio al cliente" class="img-fluid" width="150" height="150">-->
				</div>
				<h5 class="text-center">TITLE 4</h5>
			</div>
		</div>
	</div>
</section>

<br/>

<?php get_template_part('includes/recent_posts'); ?>

<br/>

<?php get_footer(); ?>
