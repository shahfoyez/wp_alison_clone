<?php

add_action('wp_enqueue_scripts', 'wplms_child_enqueue_styles');

function wplms_child_enqueue_styles()
{
    $theme = wp_get_theme();
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style'),
        $theme->get('Version')
    );

    // enque for dashboard 
    wp_enqueue_style('dash-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), true);
    wp_enqueue_style('course-card-style', get_stylesheet_directory_uri() . '/assets/css/foyStyle.css', array(), true);

    //wp_enqueue_style('dash-style-font', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css', array(), true);
    wp_enqueue_style('slick-style', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), true);
    wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array(), true);

    wp_enqueue_script('dashmain-srcipt', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), NULL, true);
    wp_enqueue_script('slick-min-srcipt', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), NULL, true);
}

function my_scripts_method()
{ ?>
    <script>
        (function($) {
            alert('hello');
        })(jQuery);
    </script>
<?php }

//add_action('wp_footer', 'my_scripts_method');
