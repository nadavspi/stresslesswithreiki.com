<?php
/**
 * @package stressless
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
<?php //		<h1 class="entry__title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1> ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry__meta">
			<?php stressless_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry__content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'stressless' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page__links">' . __( 'Pages:', 'stressless' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry__meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'stressless' ) );
				if ( $categories_list && stressless_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'stressless' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'stressless' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'stressless' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'stressless' ), __( '1 Comment', 'stressless' ), __( '% Comments', 'stressless' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'stressless' ), '<span class="entry__edit">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
