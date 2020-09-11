<?php
/**
 * Template Name: Page Post Project
*/
global $user_ID;
get_header();
?>
<div class="fre-page-wrapper">
    <div class="fre-page-title">
        <div class="container">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="fre-page-section">
        <div class="container">
            <div class="page-post-project-wrap" id="post-place">

                <?php
                    // check disable payment plan or not
                    $disable_plan = ae_get_option('disable_plan', false);
                    if(!$disable_plan) {
                        // template/post-place-step1.php
                        get_template_part( 'template/post-project', 'step1' );
                    }

                    // template/post-place-step3.php
                    if( LIVE_MODE ){
                        get_template_part( 'template/post-project', 'step3' );
                    } else {
                        // Develop mode
                        fre_generator_project_form();
                    }

                    if(!$disable_plan) {
                        // template/post-place-step4.php
                        get_template_part( 'template/post-project', 'step4' );
                    }
                ?>
            </div>
            <?php do_action('right_post_project_form');?>
        </div>
    </div>
</div>
<?php
get_footer();