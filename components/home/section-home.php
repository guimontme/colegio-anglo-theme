<?php

$id_url = carbon_get_post_meta( get_the_ID(), 'hs_id');
$class = carbon_get_post_meta( get_the_ID(), 'hs_class');
$bg_image = carbon_get_post_meta( get_the_ID(), 'hs_bg_image');

?>
<section
    <?php post_class($class); ?>
    <?php if($id_url) { echo "id=\"$id_url\""; } ?>
    <?php if($bg_image) { echo "style=\"background-image: url('$bg_image')\""; } ?>

>
<?php the_content(); ?>
</section>
