<?php 
/**
 * The template for displaying course directory.
 *
 * Override this template by copying it to yourtheme/course/index.php
 *
 * @author 		VibeThemes
 * @package 	vibe-course-module/templates
 * @version     2.1
 */
 
if ( !defined( 'ABSPATH' ) ) exit;
do_action('wplms_before_course_directory');

get_header( vibe_get_header() ); 

$directory_layout = vibe_get_customizer('directory_layout');

// Modify WP_Query arguments to exclude courses from categories 1, 2, and 3
// $args = array(
//     'post_type' => 'course',
//     'post_status' => 'publish',
//     'tax_query' => array(
//         array(
//             'taxonomy' => 'course-cat',
//             'field' => 'term_id',
//             'terms' => array( 46 ),
//             'operator' => 'NOT IN',
//         ),
//     ),
// );

// $args = array(
//     'post_type' => 'course',
//     'post_status' => 'publish',
//     'order' => 'DESC',
//     'posts_per_page' => 2,
// );

// $foy_the_query = new WP_Query( $args );


global $wp_query;

// Modify the query to exclude courses with certain categories
$wp_query->set( 
    'tax_query', array(
    array(
        'taxonomy' => 'course-cat',
        'field' => 'term_id',
        'terms' => array( 46 ),
        'operator' => 'NOT IN',

    ),
) );
// vibe_include_template("directory/course/index$directory_layout.php");  
vibe_include_template( "directory/course/index$directory_layout.php", array( 'the_query' => $foy_the_query ) );

do_action('wplms_after_course_directory');

get_footer( vibe_get_footer() );  