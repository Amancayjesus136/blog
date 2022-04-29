<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/estilos.css">


	
</head>
<body class="cuerpo">

	
	<title>Blogs</title>

	
		<header class="container">

			<div class="row">

				<div class="col-sm-3">
					<center><img class="imagen" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy-r7TUbdPxXZGj-1Kpxu-M4GYnY-_TRwIFQkoft9GClew8f2aBp0NmIH2wjY9-Nkvl1Y&usqp=CAU" width="100px"></center>
		<center><h2 class="nombre">Clinica Veterinaria LGsusVet</h2></center> 
				</div>


				<div class="col-sm-9">
					<ul class="menu">
			<li>
				<center><a href="#">Contactanos</a></center>
			</li> 
			<li>
				<center><a href="#">Servicios</a></center>
			</li> 
			<li>
				<center><a href="#">Trayectoria</a></center>
			</li> 
			<li>
				<center><a href="#">Nosotros</a></center>
			</li> 
			<li>
				<center><a href="#">Equipo</a></center>
			</li>


		</ul>
				</div>
			</div>

		
		<br>
		<br>
		

		

	</div>

	</header>

	
	<section class="container">
		
	
	<?php $articulos = new WP_Query([
		    'showposts' => 3
		]);

	while ($articulos->have_posts()) {
	$articulos->the_post(); ?>





	<?php the_post_thumbnail("medium"); ?>

	
	
	<?php the_excerpt(); ?>
	




	<?php } ?>

	

		



	<center><img class="foto1" src="https://www.purina-latam.com/sites/g/files/auxxlc391/files/styles/social_share_large/public/2020-12/purina-consulta-veterinaria-para-mascotas-lo-que-debes-saber.jpg?itok=-YoxixyF" width="400px"></center>

	<h2><?php the_title(); ?></h2>
	<center><h4 class="texto1">Esterilización de acuerdo a cada realidad social</h4></center>

	<hr>

	
	<hr>
	<br>

	</section>

	<footer class="container">

		<ul class="redes">
		
		<li>
		<center><h2 class="sociales">Redes sociales</h2></center> <br>
		</li>
		<li>
		<i class="fa fa-facebook-official" aria-hidden="true"></i>	<br>
		</li>
		<li>
		<i class="fa fa-instagram" aria-hidden="true"></i>	<br>
		</li>
		<li>
		<i class="fa fa-twitter" aria-hidden="true"></i>	<br>
		</li>
		<li>
		<i class="fa fa-whatsapp" aria-hidden="true"></i>	<br>


		</ul>

	</footer>

</body>
</html>

