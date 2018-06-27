<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if (have_posts()) :  ?>
					<h1>Blog</h1>
					<?php while (have_posts()) : the_post(); ?>
					
						<div class="indiv-post">
							<div class="post-img"><?php the_post_thumbnail(); ?></div>							
							<div class="post-inner">
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
								<div class="entry">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="button">Read More</a>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					<?php endwhile; wp_pagenavi(); ?>
				<?php else : ?>
					<h2>Nothing found</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>