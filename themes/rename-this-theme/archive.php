<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if (have_posts()) : $post = $posts[0]; ?>
					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1>Archive for <?php the_time('F, Y'); ?></h1>
					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1 class="pagetitle">Author Archive</h1>
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1 class="pagetitle">Blog Archives</h1>			
					<?php } ?>

					<?php while (have_posts()) : the_post(); ?>
					
						<div class="indiv-post">
							<div class="post-img"><?php the_post_thumbnail(); ?></div>							
							<div class="post-inner">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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