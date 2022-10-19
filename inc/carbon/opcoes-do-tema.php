<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {

    $basic_options_container = Container::make( 'theme_options', __( 'Opções do Tema', 'opcoes-do-tema' ) )
        ->set_icon( 'dashicons-image-filter' )
        ->add_fields( array(
            Field::make( 'image', 'logo_site', 'Logo do Topo' ) // We're only changing the label field to an image one
                ->set_width( 50 )
                ->set_value_type('url')
                ->set_required(),
            Field::make( 'image', 'logo_footer', 'Logo do Rodapé' ) // We're only changing the label field to an image one
                ->set_width( 50 )
                ->set_value_type('url')
                ->set_required(),

    ));

    // Add third options page under "Appearance"
    Container::make( 'theme_options', 'Top Bar' )
    ->set_page_parent( $basic_options_container ) // identificator of the "Appearance" admin section
    ->add_fields( array(
        Field::make( 'image', 'icon_whatsapp', 'Icone do WhatsApp' )
        ->set_value_type('url')
        ->set_width( 20 ),
        Field::make('text', 'text_whatsapp','Texto do WhatsApp')
            ->set_help_text( 'Pode escrever usando tag <strong></strong> (para negrito) e/ou <em></em> (para itálico)' )
            ->set_width( 40 ),
        Field::make('text', 'href_whatsapp','URL do Telefone do WhatsApp')
            ->set_help_text( 'Ex: 5581989877766' )
            ->set_width( 40 ),
        /* Material para o telefone */
        Field::make( 'image', 'icon_tel', 'Icone do Telefone' )
            ->set_value_type('url')
            ->set_width( 20 ),
        Field::make('text', 'text_tel','Texto Telefone')
            ->set_help_text( 'Pode escrever usando tag <strong></strong> (para negrito) e/ou <em></em> (para itálico)' )
            ->set_width( 40 ),
        Field::make('text', 'href_tel','URL do Telefone')
            ->set_help_text( 'Ex: 5581989877766' )
            ->set_width( 40 ),

        Field::make('text', 'text_btn_blue','Texto Botão Azul')
            ->set_help_text( 'Texto' )
            ->set_width( 40 ),
        Field::make('text', 'url_btn_blue','URL do Botão Azul')
            ->set_help_text( 'Ex: http://google.com' )
            ->set_width( 40 ),
        Field::make( 'checkbox', 'target_btn_blue', __( 'Link do Botão Azul é externo?' ) )
        ->set_width( 20 ),

        Field::make('text', 'text_btn_red','Texto Botão Vermelho')
            ->set_help_text( 'Texto' )
            ->set_width( 40 ),
        Field::make('text', 'url_btn_red','URL do Botão Vermelho')
            ->set_help_text( 'Ex: http://google.com' )
            ->set_width( 40 ),
        Field::make( 'checkbox', 'target_btn_red', __( 'Link do Botão Vermelho é externo?' ) )
        ->set_width( 20 ),

    ) );


 // Add second options page under 'Basic Options'
    Container::make( 'theme_options', 'Redes Sociais' )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
        Field::make( 'complex', 'crb_social_urls', 'Redes Sociais' ) // 
                 ->add_fields( array(
                     Field::make( 'image', 'icon', 'Icone' ) // We're only changing the label field to an image one
                         ->set_width( 20 )
                         ->set_required(),
                     Field::make( 'text', 'url', 'URL' )
                         ->set_help_text( 'Escreva o link da rede social. Ex.: https://redesocial.com/usuario/' )
                         ->set_width( 40 )
                         ->set_required(),
                     Field::make( 'text', 'title', 'Título' )
                         ->set_help_text( 'Título da rede. Ex.: Facebook, Twitter e ou Instagram' )
                         ->set_width( 40 )
                         ->set_required(),
     ))
 ));




// Fancy-Title Site
    Container::make( 'theme_options', 'Fancy Title' )
    ->set_page_parent( $basic_options_container ) // identificator of the "Appearance" admin section
    ->add_fields( array(
        Field::make( 'image', 'fancy_title', 'Background do Fancy Title' )
            // We're only changing the label field to an image one
            ->set_width( 100 )
            ->set_required(),
    ) );

// Rodapé
    Container::make( 'theme_options', 'Rodapé' )
    ->set_page_parent( $basic_options_container ) // identificator of the "Appearance" admin section
    ->add_fields( array(
        Field::make('text', 'text_newsletter', 'Texto sobre a Newsletter')
            ->set_width( 50 ),
        Field::make( 'text', 'contato_shortcode', 'Shortcode do Formulário' )
            ->set_width( 50 ),
        Field::make('textarea', 'description_footer', 'Descrição no Rodapé')
            ->set_width( 100 ),
        Field::make('textarea', 'adderess_footer', 'Endereço no Rodapé')
            ->set_width( 100 ),
        Field::make('text', 'email_footer', 'Email no Rodapé')
            ->set_width( 100 ),
            Field::make('text', 'text_whatsapp_footer','Texto do WhatsApp')
            ->set_help_text( 'Pode escrever usando tag <strong></strong> (para negrito) e/ou <em></em> (para itálico)' )
            ->set_width( 50 ),
        Field::make('text', 'href_whatsapp_footer','URL do Telefone do WhatsApp')
            ->set_help_text( 'Escreva o completo e tudo junto, e sem o "+" do DDI. Ex.: 552129999999' )
            ->set_width( 50 ),
        Field::make('text', 'text_phone_footer', 'Telefone no Rodapé')
            ->set_width( 50 ),
        Field::make('text', 'href_phone_footer', 'Telefone no Rodapé')
            ->set_help_text( 'Escreva o completo e tudo junto, e sem o "+" do DDI. Ex.: 552129999999' )
            ->set_width( 50 ),
        
        Field::make('textarea', 'map_code', 'Código do Mapa'),
	));
	 // Contato
	 Container::make( 'theme_options', 'Contato' )
	 ->set_page_parent( $basic_options_container )
	 ->add_fields( array(
	 	Field::make( 'html', 'contato_whatsapp' )->set_html( '<h2><b>Telefone de WhatsApp:</b></h2>' ),
	 		Field::make( 'image', 'logo_whatsapp', 'Logo do WhatsApp' )
			->set_value_type('url'),
			 Field::make('text', 'link_tel_whatsapp', 'Número do telefone Celular')
			 ->set_help_text( 'Escreva o completo e tudo junto, e sem o "+" do DDI. Ex.: 552129999999' ),
		//  Field::make('text', 'ddd_tel_whatsapp', 'DDI + DD')
		// 	 ->set_width( 20 )->set_help_text( 'Ex: +55 21' ),
		 Field::make('text', 'phone_tel_whatsapp', 'Telefone em bold')
			 ->set_width( 40 ),
	 ) );

    // Subtitulo das páginas
    Container::make( 'post_meta', __( 'Opções das Páginas', 'page-options' ) )
    ->where( 'post_type', '=', 'page' )
    ->set_context( 'side' )
    ->add_fields( array(
        Field::make( 'text', 'fancy_subtitle', 'Subtitulo do FancyTitle' )->set_visible_in_rest_api( $visible = true ),
    ) );

}
