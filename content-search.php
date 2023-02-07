<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?>>
	<div class="mb-5">
		<header class="card-body">
			
			<?php
				if ( 'post' === get_post_type() ) :
			?>
				<div class="card-text entry-meta">
					<?php

						$num_comments = get_comments_number();
						if ( comments_open() && $num_comments >= 1 ) :
							echo ' <a href="' . get_comments_link() . '" class="badge badge-pill badge-secondary float-end" title="' . esc_attr( sprintf( _n( '%s Comment', '%s Comments', $num_comments, 'colegio-anglo' ), $num_comments ) ) . '">' . $num_comments . '</a>';
						endif;
					?>
				</div><!-- /.entry-meta -->
			<?php
				endif;
			?>
		</header>
		<div class="card-news border-bottom pb-4 mb-4">
			<div class="">
			<div class="box-title mb-0">
				<h2 class="news-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'colegio-anglo' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</div>
			<p class="news-date">
				<?php colegio_anglo_article_posted_on(); ?>
			</p>
				<?php
					// if ( has_post_thumbnail() ) :
					// 	echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					// endif;

					if ( is_search() ) :
						the_excerpt();
					else :
						the_excerpt();
					endif;
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'colegio-anglo' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->
			
			<footer class="entry-meta">
				
				<a href="<?php echo get_the_permalink(); ?>" class="saiba-mais">Leia mais <span class="icon-left"></span></a>
			</footer><!-- /.entry-meta -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
