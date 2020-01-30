<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W
 */

?>

	

<?php wp_footer(); ?>

		<!-- Scripts
        placed at the end to load the page faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/main.js"></script>

</body>
</html>
