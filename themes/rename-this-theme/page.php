<?php get_header(); ?>
<div class="wrapper">
	<div class="row">
		<div class="col col-8">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="col col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>