<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_sections_home' );
function crb_attach_sections_home() {
    Container::make( 'post_meta', __( 'Sections Home', 'sections_home' ) )
    ->where( 'post_type', '=', 'home_section')
    ->set_context( 'side' )
    ->add_fields( array(
        Field::make( 'text', 'hs_id', 'ID da section' ),
        Field::make( 'text', 'hs_class', 'Classes da Section' ),
        Field::make( 'text', 'hs_bg_color', 'Cor de Fundo da Section' ),
        Field::make( 'image', 'hs_bg_image', 'Imagem de fundo da Section' )
            ->set_value_type( 'url' ),
        )
    );
}
