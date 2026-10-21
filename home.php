<?php get_header(); ?>

<div class="blog-index">
	<?php if ( have_posts() ) : ?>
	<div class="blog-grid">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
			<time class="blog-card-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="blog-card-summary"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40, '…' ) ); ?></p>
			<a class="blog-card-link" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Read article: %s', 'blankslate' ), get_the_title() ) ); ?>"><?php esc_html_e( 'Read article', 'blankslate' ); ?> <span aria-hidden="true">&rarr;</span></a>
		</article>
		<?php endwhile; ?>
	</div>
	<?php get_template_part( 'nav', 'below' ); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'No posts yet. Check back soon.', 'blankslate' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
