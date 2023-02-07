<?php
/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
?>
<?php 
	$fancy_background = carbon_get_the_post_meta('fancy_background'); 
	$fancy_subtitle = carbon_get_the_post_meta('fancy_subtitle');
?>
<header class="fancy-title" 
<?php if(!empty($fancy_background)) : ?>
	style="background-image: url('<?php echo $fancy_background; ?>');"
<?php endif; ?>
>
	<h1 class="title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'colegio-anglo' ),
			'after'  => '</div>',
		) );
		edit_post_link( __( 'Edit', 'colegio-anglo' ), '<span class="edit-link">', '</span>' );
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

get_footer();
