<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>

<!-- O loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Container do artigo -->	
	<div class="container">	
		<!-- Conteúdo do post -->
		<?php the_content(); ?>
		
	</div>
	
<?php endwhile; ?>
<?php endif; ?>

<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>