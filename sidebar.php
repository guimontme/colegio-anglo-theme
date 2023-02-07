<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="sidebar">
	<?php

		if ( is_archive() || is_single() ) :
	?>
		<div class="bg-faded sidebar-nav">
			<div id="primary-two" class="widget-area">
				<?php
					$output = '<ul class="recentposts">';
						$recentposts_query = new WP_Query( 'posts_per_page=3' ); // Max. 5 posts in Sidebar!
						$month_check = null;
						if ( $recentposts_query->have_posts() ) :
							$output .= '<li><h3>' . esc_html__( 'Últimas notícias', 'colegio-anglo' ) . '</h3></li>';
							while ( $recentposts_query->have_posts() ) :
								$recentposts_query->the_post();
								$output .= '<li>';
									// Show monthly archive and link to months.
									// $month = get_the_date( 'F, Y' );
									// if ( $month !== $month_check ) :
									// 	$output .= '<a href="' . esc_url( get_month_link( get_the_date( 'Y' ), get_the_date( 'm' ) ) ) . '" title="' . esc_attr( get_the_date( 'F, Y' ) ) . '">' . esc_html( $month ) . '</a>';
									// endif;
									// $month_check = $month;

								$output .= '<h4><a href="' . esc_url( get_the_permalink() ) . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'colegio-anglo' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark">' . esc_html( get_the_title() ) . '</a></h4>';
								$output .= '<p><time class="news_date">'.  get_the_date('j \d\e F \d\e Y', null ) .'</time></p>';
								$output .= '<p><a href="' . esc_url( get_the_permalink() ) . '" class="saiba-mais">Leia mais <span class="icon-left"></span></a></p>';
								$output .= '</li>';
							endwhile;
						endif;
						wp_reset_postdata();
					$output .= '</ul>';

					echo $output;
				?>
				<br />
			</div><!-- /#primary-two -->
		</div>
		<?php 
		if ( is_active_sidebar( 'primary_widget_area' ) ) :
	?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php
				dynamic_sidebar( 'primary_widget_area' );

				if ( current_user_can( 'manage_options' ) ) :
			?>
				<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php esc_html_e( 'Edit', 'colegio-anglo' ); ?></a></span><!-- Show Edit Widget link -->
			<?php
				endif;
			?>
		</div><!-- /.widget-area -->
	<?php
		endif;
		?>
	<?php
		endif;
	?>
	<?php if(!is_single() || is_page('ultimas-noticias')): ?>
		<?php
				dynamic_sidebar( 'noticias_widget_area' );

				if ( current_user_can( 'manage_options' ) ) :
			?>
				<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php esc_html_e( 'Edit', 'colegio-anglo' ); ?></a></span><!-- Show Edit Widget link -->
			<?php
				endif;
			?>
	<?php endif; ?>
</div><!-- /#sidebar -->
<?php
	endif;
?>
