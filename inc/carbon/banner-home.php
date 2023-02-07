<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_banner_options' );
function crb_attach_banner_options() {
    Container::make( 'theme_options', __( 'Banners da Home', 'banner-home' ) )
        ->set_icon( 'dashicons-images-alt' )
        ->set_page_menu_position(5)
        ->add_fields( array(
            Field::make( 'complex', 'crb_banners_home', 'Banners da Home' )
                ->add_fields( array(
                    Field::make( 'image', 'imagem', 'Imagem do Banner' ) 
                        ->set_width( 20 )
                        ->set_value_type('url')
                        ->set_required(),
                    Field::make( 'text', 'title', 'Título do Banner' )
                        ->set_help_text( 'Título do Banner' )
                        ->set_width( 40 )
                        ->set_required(),
                    Field::make( 'rich_text', 'texto', 'Texto do Banner' )
                        ->set_help_text( 'Texto do Banner' )
                        ->set_width( 40 )
                        ->set_required(),
                        Field::make( 'text', 'txt_btn', 'Texto do Botão do "Saiba +"' )
                        ->set_help_text( 'Caso precise colocar um link para as página internas...' )
                        ->set_width( 40 ),
                    Field::make( 'text', 'url_btn', 'Link do "Saiba +"' )
                        ->set_help_text( 'Caso precise colocar um link para as página internas...' )
                        ->set_width( 40 ),
                    Field::make( 'radio', 'target_btn', 'Destino do link' )
                        ->set_options( array( '' => 'Link para o site', '_blank' => 'Link externo' ))
                        ->set_width( 20 ),
            ) ),
    ) );
    //  Links do Grupo
    Container::make( 'theme_options', __( 'Links', 'links_anglo' ) )
        ->set_icon( 'dashicons-images-alt' )
        ->set_page_menu_position(6)
        ->add_fields( array(
            Field::make( 'html', 'crb_information_text' )
            ->set_html( '<p>Somente 4 links.</p>' ),
            Field::make( 'complex', 'crb_links_group', 'Links Anglo' )
                ->add_fields( array(
                    Field::make( 'image', 'imagem', 'Logo do Parceiro' ) 
                        ->set_width( 20 )
                        ->set_value_type('url')
                        ->set_required(),
                    Field::make( 'image', 'icon', 'Ícone do Parceiro' ) 
                        ->set_width( 20 )
                        ->set_value_type('url')
                        ->set_required(),
                    Field::make( 'text', 'title', 'Título do Parceiro' )
                        ->set_help_text( 'Título do Parceiro' )
                        ->set_width( 80 )
                        ->set_required(),
                    Field::make( 'text', 'url', 'Link do "Saiba +"' )
                        ->set_help_text( 'Caso precise colocar um link para as página internas...' )
                        ->set_width( 80 ),
                    Field::make( 'radio', 'target', 'Destino do link' )
                        ->set_options( array( '' => 'Link para o site', '_blank' => 'Link externo' ))
                        ->set_width( 20 ),
            ) ),
    ) );
}
