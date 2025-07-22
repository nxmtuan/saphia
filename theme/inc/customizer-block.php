<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('[Saphia] Khối giới thiệu sản phẩm'),
            'description'       => __('[Saphia] Khối giới thiệu sản phẩm'),
            'render_template'   => 'blocks/intro-product.php',
            'keywords'          => array('intro', 'quote'),
        ));
    }
}
