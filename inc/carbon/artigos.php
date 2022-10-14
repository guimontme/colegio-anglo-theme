<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_artigos' );
function crb_attach_artigos() {
    Container::make( 'post_meta', __( 'Refêrencia de artigos', 'ref_artigos' ) )
    ->where( 'post_type', '=', 'post')
    ->set_context( 'side' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_ref_bibliografica', 'Referências' )
                 ->add_fields( array(
                     Field::make( 'textarea', 'dados', 'Dados' )
                        ->set_help_text( 'Dados da Referência' )
                        ->set_required(),
                ) 
            )
        )
    );
}