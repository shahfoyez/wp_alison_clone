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
$page_code =  1;
vibe_include_template("directory/course/index$directory_layout.php");  
// vibe_include_template( "directory/course/index$directory_layout.php", array( 'the_query' => $foy_the_query ) );

do_action('wplms_after_course_directory');

get_footer( vibe_get_footer() );  