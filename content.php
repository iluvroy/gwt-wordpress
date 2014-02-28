<?php
/**
 * @package gwt_wp
 */
?>

<div class="post-box">
<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<!--?php gwt_wp_posted_on(); ?-->
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'gwt_wp' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gwt_wp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<!--footer class="entry-meta">
		<!--?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<!--?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'gwt_wp' ) );
				if ( $categories_list && gwt_wp_categorized_blog() ) :
			?>
			<span class="cat-links">
				<!--?php printf( __( 'Posted in %1$s', 'gwt_wp' ), $categories_list ); ?>
			</span>
			<!--?php endif; // End if categories ?>

			<!--?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'gwt_wp' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<!--?php printf( __( 'Tagged %1$s', 'gwt_wp' ), $tags_list ); ?>
			</span>
			<!--?php endif; // End if $tags_list ?>
		<!--?php endif; // End if 'post' == get_post_type() ?>

		<!--?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><!--?php comments_popup_link( __( 'Leave a comment', 'gwt_wp' ), __( '1 Comment', 'gwt_wp' ), __( '% Comments', 'gwt_wp' ) ); ?></span>
		<!--?php endif; ?>

		<!--?php edit_post_link( __( 'Edit', 'gwt_wp' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
</div><!-- .post-box -->