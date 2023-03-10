<?php

// COURSE STATUS : 
// 0 : NOT STARTED 
// 1: STARTED 
// 2 : SUBMITTED
// > 2 : EVALUATED

// VERSION 1.8.4 NEW COURSE STATUSES
// 1 : START COURSE
// 2 : CONTINUE COURSE
// 3 : FINISH COURSE : COURSE UNDER EVALUATION
// 4 : COURSE EVALUATED


if ( ! defined( 'ABSPATH' ) ) exit;

do_action('wplms_before_start_course');

get_header( vibe_get_header() ); 
/**
* wplms_before_course_main_content hook.
*
* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
* @hooked woocommerce_breadcrumb - 20
*/
do_action('wplms_before_course_main_content');

?>
<h1>ami course status</h1>

<section id="content">
    <div class="<?php echo vibe_get_container(); ?>">
        <div class="row">
            <div class="col-md-9">
                <div class="unit_wrap <?php echo vibe_sanitizer($class,'text'); ?>">
            
                    <?php

                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        /**
                        * wplms_unit_content hook.
                        *
                        * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                        * @hooked woocommerce_breadcrumb - 20
                        */
                        do_action('wplms_unit_content');
                        endwhile;
                        endif;
                        
                        /**
                        * wplms_unit_controls hook.
                        *
                        * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                        * @hooked woocommerce_breadcrumb - 20
                        */
                        do_action('wplms_unit_controls');
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php 
                    /**
                    * wplms_course_action_points hook.
                    *
                    * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                    * @hooked woocommerce_breadcrumb - 20
                    */
                    do_action('wplms_course_action_points');
                ?>
            </div>
        </div>
    </div>
</section>
<?php

do_action('wplms_after_start_course');

get_footer( vibe_get_footer() );  