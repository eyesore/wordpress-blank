<?php
/*
Template Name: Home
*/
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col home-caption">
			<h1><?php the_title(); ?></h1>
			<?php the_field('home_caption_content'); ?>
		</div>
		<div class="col home-slider">
			<ul>
				<?php 
					$args = array(
						'post_type' => 'slider',
						'posts_per_page' => 5
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<li><?php the_post_thumbnail(); ?></li>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php endwhile; endif;
get_footer(); ?>
