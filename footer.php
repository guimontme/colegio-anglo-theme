			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<?php get_template_part( 'components/footer/footer' ); ?>
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
