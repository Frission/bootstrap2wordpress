<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package B2W
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="post-details">
                <i class="fa fa-user"></i> <?php the_author();?>
                <i class="fa fa-clock-o"></i> 
                <time><?php the_date(); ?></time>
                <i class="fa fa-folder"></i> <?php the_category(', '); ?>
                <?php the_tags( '<i class="fa fa-tags">',', ', '</i>' ); ?>

                <div class="post-comments-badge">
                	<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>
                </div>

				<?php edit_post_link(' Edit', '<i class="fa fa-pencil"></i>', ''); ?>
            </div>
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
