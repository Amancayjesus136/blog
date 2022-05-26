<?php get_header(); ?>

	
	<section class="container">
		
	
	<?php $articulos = new WP_Query([
		    'showposts' => 3,
		    'post_type' => 'empleos'
		]);

	while ($articulos->have_posts()) {
	$articulos->the_post(); ?>



	

	<div class="row">

		
		<div class="container">
		<div class="row caja">
		
		<div class="col-sm-3 fotoperro">

			<?php the_post_thumbnail("medium"); ?>
			
		</div>
		<div class="col-sm-9">
			
			<h2><a href="<?php the_permalink(); ?>;">
				<?php the_title(); ?></a></h2>

				<p>Publicado por el <?php the_author(); ?> el <?php the_time("d/m/Y"); ?></p>
			
			<?php the_excerpt(); ?>

		</div>
		</div>

		</div>


		</div>
		
	</div>



	<?php } ?>

	

		



	

	
	

	<hr>

	
	<hr>
	<br>

	</section>

	<?php get_footer(); ?>

</body>
</html>

