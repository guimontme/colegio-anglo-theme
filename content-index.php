<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-6' ); ?>>
	<div class="mb-4">
		<div class="card-news">
			<div class="thumbnail">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;

					if ( is_search() ) :
						the_excerpt();
					// else :
					// 	the_excerpt();
					endif;
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'colegio-anglo' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->
			<div class="box-title">
				<h2 class="news-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'colegio-anglo' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</div>
			<p class="news-date">
				<?php colegio_anglo_article_posted_on(); ?>
			</p>
			<footer class="entry-meta">
				
				<a href="<?php echo get_the_permalink(); ?>" class="saiba-mais">Leia mais <span class="icon-left"></span></a>
			</footer><!-- /.entry-meta -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
