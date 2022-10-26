<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_depoimentos_options' );
function crb_depoimentos_options() {
    // Depoimentos
    Container::make( 'theme_options', __( 'Depoimentos', 'depoimentos_anglo' ) )
    ->set_icon( 'dashicons-images-alt' )
    ->set_page_menu_position(7)
    ->add_fields( array(
        Field::make( 'complex', 'depoimentos_group', 'Links Anglo' )
            ->add_fields( array(
                Field::make( 'text', 'nome', 'Nome do Responsável' )
                    ->set_width( 30 )
                    ->set_required(),
                Field::make( 'text', 'ensino', 'Nivel do Ensino' )
                    ->set_help_text( 'Cargo ou Subtitulo abaixo do nome' )
                    ->set_width( 30 )
                    ->set_required(),
                Field::make( 'textarea', 'texto', 'Texto do Depoimento' )
                    ->set_help_text( 'Texto do Depoimento' )
                    ->set_width( 40 )
                    ->set_required(),
        ) ),
    ) );
}
