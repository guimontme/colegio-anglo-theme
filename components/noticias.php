<?php
$categories = get_the_category( get_the_ID() );
$category_bread = "";
if( $categories ){
    $output = "";

    //display all the top-level categories first
    foreach ($categories as $category) {
        if( !$category->parent ){
            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" >' . $category->name.'</a>';
        }
    }


    //now, display all the child categories
    foreach ($categories as $category) {
        if( $category->parent ){
            $output .= '><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" >' . $category->name.'</a>,';
        }
    }

    $category_bread = trim( $output, "," );
}
?>

<div class="col-md-4 news_col">
    <a href="<?php the_permalink(); ?>" class="thumbnail">
        <?php

        if(has_post_thumbnail()) {
            the_post_thumbnail( 'thumb-size', array('class'=>'img-fluid mb-4'));
        }
        else {
            $img_sample = get_template_directory_uri() . '/assets/images/noticia_sample-1.jpg';
            echo "<img src='{$img_sample}' alt='Notícia' class='img-fluid mb-4'>";
        }
        ?>
    </a>
    <a href="<?php the_permalink(); ?>"><?php the_title('<h3>','</h3>'); ?></a>
    <p class="news_date">
        <?php echo get_the_date('j \d\e F \d\e Y', null ); ?>
    </p>
    <p class="text-right mt-0">
        <a href="<?php the_permalink(); ?>" class="link_read_more">Leia mais <span></span></a>
    </p>
</div>
