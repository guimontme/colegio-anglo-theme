<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

?>
<?php 
	$fancy_bg_news = carbon_get_theme_option('fancy_bg_news'); 
	$fancy_title_news = carbon_get_theme_option('fancy_title_news');
	$title_news = carbon_get_theme_option('title_news');
?>
<header class="fancy-title" style="background-image: url('<?php echo $fancy_bg_news; ?>');">
	<h1 class="title"><?php echo $fancy_title_news; ?></h1>
</header>
<!-- .entry-header -->
<?php echo do_shortcode( '[links_anglo]' ); ?>

<main class="container pb-5">
	<div class="row py-5 ">
		<h4 class="anglo-title text-start mx-auto ">
			<?php echo $title_news; ?>
		</h4>
	</div>
	<div class="row">
		<article class="col-md-8">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();

					get_template_part( 'content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				endwhile;
			endif;

			wp_reset_postdata();
		?>
		<?php
			$count_posts = wp_count_posts();

			if ( $count_posts->publish > '1' ) :
				$next_post = get_next_post();
				$prev_post = get_previous_post();
		?>

<?php /*
		if ( $prev_post ) {
			$prev_title = get_the_title( $prev_post->ID );
	?>
		<div class="pr-3">
			<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>">
				<span class="arrow">&larr;</span>
				<span class="title"><?php echo wp_kses_post( $prev_title ); ?></span>
			</a>
		</div>
	<?php
		}
		if ( $next_post ) {
			$next_title = get_the_title( $next_post->ID );
	?>
		<div class="pl-3">
			<a class="next-post btn btn-lg btn-outline-secondary" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>">
				<span class="title"><?php echo wp_kses_post( $next_title ); ?></span>
				<span class="arrow">&rarr;</span>
			</a>
		</div>
	<?php
		}
		*/
	?>
		</article>
		<aside class="col-md-4">
		<?php
			get_sidebar();
		?>
		</aside>
	</div>
</main>
<?php echo do_shortcode( '[depoimentos]' ); ?>
<!-- /.post-navigation -->
<?php
endif;

get_footer();
