<?php

/**
Template Name: About - Lĩnh vực hoạt động
 */

get_header();
?>

<main>
    <?php echo get_template_part('/components/block_brand-intro') ?>

    <?php echo get_template_part('/components/block_core-values') ?>

    <?php echo get_template_part('/components/block_partner-slider') ?>
</main>

<?php
get_footer();