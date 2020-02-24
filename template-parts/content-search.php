<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package B2W
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			bootstrap2wordpress_posted_on();
			bootstrap2wordpress_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if( has_post_thumbnail()) { ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>
    <div class="post-excerpt">
    	<?php the_excerpt(); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
