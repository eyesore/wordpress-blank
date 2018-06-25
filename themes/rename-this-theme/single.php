<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					<div class="entry">				
						<?php the_content(); ?>
					</div>			
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>