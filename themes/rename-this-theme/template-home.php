<?php
// Template Name: Home
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="entry">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>	

<?php endwhile; endif;
get_footer(); ?>
