<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_curso' );
function crb_attach_curso() {
    Container::make( 'post_meta', __( 'Curso', 'the_curso' ) )
    ->where( 'post_type', '=', 'curso')
    ->add_fields( array(
		Field::make( 'checkbox', 'destaque',  'Destaque' )
    		->set_option_value( 'yes' ),
		Field::make( 'textarea', 'resumo_curso', 'Resumo do Curso' )
			->set_required(),
        Field::make( 'textarea', 'objetivo_curso', 'Objetivo do Curso' )
			->set_required(),
        Field::make( 'textarea', 'publico_curso', 'Público-Alvo do Curso' )
            ->set_required(),
        Field::make( 'textarea', 'metodologia_curso', 'Metodologia' )
            ->set_required(),
		Field::make( 'complex', 'dados_curso', 'Outros dados sobre o Curso')
			->add_fields( array(
				Field::make( 'text', 'titulo', 'Titulo do Dado' ),
				Field::make( 'rich_text', 'texto', 'Texto do Curso' ),
				)
			),
        )
    );
}

function cptui_register_my_taxes_categoria_curso() {

	/**
	 * Taxonomy: Categorias de Cursos.
	 */

	$labels = [
		"name" => __( "Categorias de Cursos", "wp-dev-starter" ),
		"singular_name" => __( "Categoria de Cursos", "wp-dev-starter" ),
	];

	$args = [
		"label" => __( "Categorias de Cursos", "wp-dev-starter" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'categoria_curso', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "categoria_curso",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "categoria_curso", [ "curso" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_categoria_curso' );
