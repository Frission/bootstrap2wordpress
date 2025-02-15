<?php
/*
 *  Template Name: Home Page
*/

// Advanced Custom Fields

get_header();
?>

        <?php get_template_part( 'template-parts/content', 'hero' ); ?>

        <?php get_template_part( 'template-parts/content', 'optin' ) ?>

        <?php get_template_part( 'template-parts/content', 'stocks' ) ?>

        <?php get_template_part( 'template-parts/content', 'who-benefits' ) ?>

        <?php get_template_part( 'template-parts/content', 'course-features' ) ?>

        <?php get_template_part( 'template-parts/content', 'project-features' ) ?>

        <?php get_template_part( 'template-parts/content', 'video-featurette' ) ?>

        <?php get_template_part( 'template-parts/content', 'instructor' ) ?>

        <?php get_template_part( 'template-parts/content', 'testimonials' ) ?>

<?php
get_footer();
?>
