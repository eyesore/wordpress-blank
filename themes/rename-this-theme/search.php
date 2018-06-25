<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if (have_posts()) : ?>
				<h2>Search Results</h2>

				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div class="entry">
							<h2><?php the_title(); ?></h2>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<?php the_excerpt(); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			<?php else : ?>
				<h2>No posts found.</h2>
			<?php endif; ?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>