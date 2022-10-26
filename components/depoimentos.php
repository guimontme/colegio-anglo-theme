<?php
    $depoimentos = carbon_get_theme_option('depoimentos_group');
?>

<section class="depoimentos_section py-5">
 
    <div class="container">
        <div class="row">
            <h3 class="anglo-title-amarelo color-white">Depoimentos</h3>
            <small>O que nossos pais e alunos pensam sobre nós</small>
            <div id="carouselDepoimentos" class="carousel slide depoimentos_carousel" data-bs-ride="carousel"  data-bs-interval="100000">
                <div class="carousel-indicators">
                    <?php foreach ($depoimentos as $key => $depoimento) {
                        echo '<button type="button"';
                        echo 'data-bs-target="#carouselDepoimentos" ';
                        echo ($key == 0) ? 'class="active" ' : '';
                        echo "data-bs-slide-to='$key'";
                        echo "aria-label='Slide " . $key + 1 . "'>";
                    echo '</button>';
                    } ?>
                </div>
                <div class="carousel-inner">
                <?php foreach ($depoimentos as $key => $depoimento) { 
                    echo '<div class="carousel-item ';
                    echo ($key == 0) ? 'active' : '';
                    echo '">'; 
                    echo '<div class="depoimentos_carousel_text">';
                        echo '<h4 class="nome">'.$depoimento['nome'].'</h4>';
                        echo '<p class="ensino">'.$depoimento['ensino'].'</p>';
                        echo '<p class="text">'.$depoimento['texto'].'</p>';
                    echo '</div></div>';
                }    
                ?>
                </div>

            </div><!-- #carouselDepoimentos -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>