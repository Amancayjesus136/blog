<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>detalle</title>
</head>
<body>

		
		<header>

		
		<center><h2><?php the_title(); ?></h2></center> 
		
		
		<br>
		<br>
		<center><h4>Resumen: <?php the_field('resumen') ?></h4></center>
		<center><?php the_post_thumbnail("large"); ?></center>
		<?php the_content(); ?>

		<br>
		<br>

		<h4>Fuente: <?php the_field('fuente') ?></h4>
		

		

		
	</header>

	<section>
		

		

		
		<ul>
			<li>
				 
				<center><a href="#">Contactanos</a></center>	<br>
				<center><a href="#">Servicios</a></center>	<br>
				<center><a href="#">Trayectoria</a></center>	<br>
				<center><a href="#">Nosotros</a></center>	<br>
			</li>
		</ul> <hr>

	</section>

	<footer>
		
		
		<br>
		<br>
		<center><h2>Redes sociales</h2></center> 
		<center><a href="#">Facebook</a></center>	<br>
		<center><a href="#">Instagram</a></center>	<br>
		<center><a href="#">Twitter</a></center>	<br>
		<center><a href="#">Whatsapp</a></center>	<br>

	</footer>
</body>
</html>