<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="container">
			    <!-- <h1 id="page-title"><?php the_title(); ?></h1> -->

    			<div class="row">
    				<div class="twelve columns">
    					<?php the_content(); ?>
    				</div>
    			</div>

        </section>

        <section id="map">
          <div class="row">
            <div class="twelve columns map">
              <?php the_field('google_map_content_area');?>
            </div>
          </div>
        </section>


				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
