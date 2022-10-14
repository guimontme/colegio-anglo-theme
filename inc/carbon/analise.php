<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_analise' );
function crb_attach_analise() {
    Container::make( 'post_meta', __( 'Análises', 'ref_artigos' ) )
    ->where( 'post_type', '=', 'analise')
    ->set_context( 'side' )
    ->add_fields( array(
        Field::make( 'text', 'autor_artigo', 'Autor do Artigo' ),
        Field::make( 'text', 'professor', 'Professor' ),
        Field::make( 'complex', 'analise_ref_bibliografica', 'Referências para Análises' )
                 ->add_fields( array(
                     Field::make( 'textarea', 'dados', 'Dados' )
                        ->set_help_text( 'Dados da Referência' )
                        ->set_required(),
                ) 
            )        
        )
    );
}