<?php
/**
 * Template Name: Home
 *
 * 
 *
 * @package cards
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


<div class="map_bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="home_container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="center"><?php the_field('main_header'); ?></h1>
							<p class="center"><?php the_field('main_text'); ?></p>
							<?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="tile">
							<h3 class="center">Be the first to know.</h3>
							<p><?php the_field('tile_a'); ?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="tile">
							<h3 class="center">Get the best pricing.</h3>
							<p><?php the_field('tile_b'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
