<?php
/**
 * The template for displaying search forms.
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Pesquise por uma palagra', 'colegio-anglo' ); ?>" />
		<button type="submit" class="btn btn-danger" name="submit"><?php esc_html_e( 'Buscar', 'colegio-anglo' ); ?></button>
	</div><!-- /.input-group -->
</form>
