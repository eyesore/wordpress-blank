<?php
/*
Template Name: Home
*/
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class="col-lg-12">
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php endwhile; endif;
get_footer(); ?>
