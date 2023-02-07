<?php
/**
 * The template for displaying the archive loop.
 */

// colegio_anglo_content_nav( 'nav-above' );
?>



<?php


if ( have_posts() ) :
?>


	<div class="row" id="loop">
	<?php
		while ( have_posts() ) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', 'search' ); // Post format: content-index.php
			// get_template_part( 'components', 'noticias' ); // Post format: content-index.php
		endwhile;
	?>
	</div>
<?php
endif;

wp_reset_postdata();

?>
<div class="btn__wrapper d-grid px-lg-5">
  <a href="#!" class="btn btn-danger btn-large" id="load-more">Carregar mais</a>
</div>

<?php

// colegio_anglo_content_nav( 'nav-below' );
