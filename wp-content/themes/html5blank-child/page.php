<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="container">
			    <h1 id="page-title"><?php the_title(); ?></h1>
          <div id="introduction" class="row">
            <div class="twelve columns">
              <div class="phone-content"><?php the_field('phone_content');?></div>
            </div>
          </div>

    			<div class="row">
            <div class="six columns">
              <div class="phone-title"><h3><?php the_field('phone_title');?><h3></div>
              <div class="phone-number"><?php the_field('phone_number');?></div>
              <div class="fax-number"><?php the_field('fax_number');?></div>
            </div>
    				<div class="six columns">
              <div><h3>Leave us your information</h3></div>
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

				<?php edit_post_link(); ?>

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
