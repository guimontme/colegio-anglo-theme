<?php

/*
* ShortCodes
*
*/

function add_noticias() {
    ob_start();
    get_template_part( 'components/home/noticias' );
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'noticias', 'add_noticias' );

function add_section_noticias() {
    ob_start();
    get_template_part( 'components/section', 'noticias' );
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'section-noticias', 'add_section_noticias' );

function add_banner() {
    ob_start();
    get_template_part( 'components/home/banner' );
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'banner_home', 'add_banner' );


function add_links_anglo() {
    ob_start();
    get_template_part( 'components/header/links','anglo' );
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'links_anglo', 'add_links_anglo' );

function add_depoimentos() {
    ob_start();
    get_template_part( 'components/depoimentos','anglo' );
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'depoimentos', 'add_depoimentos' );

// function add_banner_english() {
//     ob_start();
//     get_template_part( 'components/english/banner' );
//     wp_reset_query();
//     return ob_get_clean();
// }
// add_shortcode( 'banner_english', 'add_banner_english' );

// function add_noticia_widget() {
//     ob_start();
//     get_template_part( 'components/noticias/widget' );
//     wp_reset_query();
//     return ob_get_clean();
// }
// add_shortcode( 'noticias_widget', 'add_noticia_widget' );

function add_section($atts, $content = null) {
		extract( shortcode_atts( array(
            'class' => false,
            'bg' => false,
            'bgcolor' => false,

		), $atts ) );

		$html = '<section class="full-cover';
		$html .= ( $class ) ? ' ' . esc_attr( $class ) . '"' : '"';
		$html .= ( $bg ) ? ' style="background: url(\'' . esc_attr( $bg ) . '\');"' : '';
		$html .= ( $bgcolor ) ? ' style="background-color:' . esc_attr( $bgcolor ) . ';"' : '';
		$html .= '>';
		$html .= do_shortcode( $content );
		$html .= '</section>';

		return $html;

}
add_shortcode( 'section', 'add_section' );

function add_fancy_title($atts, $content = null) {
    extract( shortcode_atts( array(
        'class' => false,
        'bg' => false,
        'title' => false,

    ), $atts ) );

    $html = '<section class="fancy-title';
    $html .= ( $class ) ? ' ' . esc_attr( $class ) . '"' : '"';
    $html .= ( $bg ) ? ' style="background: url(\'' . esc_attr( $bg ) . '\');"' : '';
    $html .= '>';
    $html .= ( $title ) ? '<h1 class="title">'. esc_attr( $title ) .'</h1>' : '';
    $html .= '</section>';

    return $html;

}
add_shortcode( 'fancy-title', 'add_fancy_title' );

function add_card_curriculos($atts, $content = null) {
    extract( shortcode_atts( array(
        'class' => false,
        'img' => false,
        'title' => false,
        'delay' => false,

    ), $atts ) );

    $html = '<div class="card card-curriculos';
    $html .= ( $class ) ? ' ' . esc_attr( $class ) . '">' : '">';
    $html .= '<div class="card-body">';
    $html .= ( $img ) ? '<h3 class="titulo-curriculo"><img src="'.esc_attr( $img ).'">': '';
    $html .= ( $title ) ? '<span class="texto">'. esc_attr( $title ) .'</span></h3>' : '';
    $html .= '<div class="card-text">';
    $html .= do_shortcode( $content );
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    return $html;

}
add_shortcode( 'card-curriculos', 'add_card_curriculos' );

function add_card_soluctions($atts, $content = null) {
    extract( shortcode_atts( array(
        'class' => false,
        'img' => false,
        'title' => false,
        'imgtitle' => false,
        'delay' => false,
        'id' => false,
    ), $atts ) );

    $html = '<div class="card card-solucoes card-solutions wow fadeIn';
    $html .= ( $class ) ? ' ' . esc_attr( $class ) . '"' : '"';
    $html .= ( $delay ) ? ' data-wow-delay="' . esc_attr( $delay ) . '">' : '>';
    $html .= ( $img ) ? '<img class="card-img-top" src="'. esc_attr( $img ) . '">' : '';
    $html .= '<div class="card-body">';
    $html .= ( $imgtitle ) ? '<h3 class="titulo-solucoes"><img src="'.esc_attr( $imgtitle ).'">': '';
    $html .= ( $title ) ? '<span class="texto">'. esc_attr( $title ) .'</span></h3>' : '';
    $html .= '<div class="card-text text-center">';
    $html .= do_shortcode( $content );
    $html .= '</div>';
    $html .= ( $id ) ? '<div class="text-center"><button class="btn show-more" title="show more" data-toggle="collapse" data-target="#'. esc_attr( $id ) .'"><span>show more</span></buton></div>': '';
    $html .= '</div>';
    $html .= '</div>';

    return $html;

}
add_shortcode( 'card-solutions', 'add_card_soluctions' );

function add_icon_solucoes($atts, $content = null) {
    extract( shortcode_atts( array(
        'class' => false,
        'img' => false,
        'caption' => false,
        'delay' => false,

    ), $atts ) );

    $html = '<div class="icon-solucoes wow bounceInUp';
    $html .= ( $class ) ? ' ' . esc_attr( $class ) . '"' : '"';
    $html .= ( $delay ) ? ' data-wow-delay="' . esc_attr( $delay ) . '">' : '>';
    $html .= '<figure class="text-center">';
    $html .= ( $img ) ? '<img class="" src="'. esc_attr( $img ) . '">' : '';
    $html .= '<div class="card-body">';
    $html .= ( $caption ) ? '<figcaption>' . esc_attr( $caption ).'</figcaption>': '';
    $html .= '</figure>';
    $html .= '</div>';

    return $html;

}
add_shortcode( 'icon-solucoes', 'add_icon_solucoes' );

function add_card_dicas($atts, $content = null) {
    extract( shortcode_atts( array(
        'class' => false,
        'img' => false,
        'titledica' => false,
        'title' => false,
        'delay' => false,

    ), $atts ) );

    $html = '<div class="row card-dicas wow fadeIn';
    $html .= ( $class ) ? ' ' . esc_attr( $class ) . '"' : '"';
    $html .= ( $delay ) ? ' data-wow-delay="' . esc_attr( $delay ) . '">' : '>';
    $html .= '<div class="col-sm-4 col-md-3 col-lg-2 text-center pb-3">';
    $html .= ( $titledica ) ? '<h3 class="titulo-dicas">'.esc_attr( $titledica).'</h3>': '';
    $html .= ( $img ) ? '<img class="img-dicas" src="'. esc_attr( $img ) . '">' : '';
    $html .= '</div><div class="col-sm-8 col-md-9 col-lg-10 pt-2">';
    $html .= ( $title ) ? '<h3 class="titulo-texto">'. esc_attr( $title ) .'</h3>' : '';
    $html .= do_shortcode( $content );
    $html .= '</div>';
    $html .= '</div>';

    return $html;

}
add_shortcode( 'card-dicas', 'add_card_dicas' );
