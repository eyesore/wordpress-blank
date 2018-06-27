<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if (have_posts()) : ?>

					<h1>Search Results for <?php the_search_query(); ?></h1>

					<?php while (have_posts()) : the_post(); ?>
						<div class="indiv-search">
							<h3><?php the_title(); ?></h3>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div class="entry">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="button">Read More</a>
							</div>
						</div>						
					<?php endwhile; wp_pagenavi(); ?>

				<?php else : ?>
					<h2>No posts found.</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>