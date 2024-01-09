<!-- :::::::::::::::::::: custom post :::::::::::::::::::: -->

<?php
add_action('init','neuron_theme_custom_post');
function neuron_theme_custom_post(){
    register_post_type('slide',
        array(
            'labels' => array(
                'name' => __('Slides'),
                'singular_name' => __('Slide')
            ),
            'supports' => array('title','editor','custom-fields','thumbnail','page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );

}