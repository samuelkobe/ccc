<?php /* Template Name: Home Page Template */ get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section id="exterior-wrap">
					<div id="exterior-wrap-child">
        <section class="container">

          <div id="introduction" class="row">
            <div class="twelve columns">
							<div class="logo-wrap">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cup.svg" alt="Colonial Coffee Company Logo" class="logo-img">
							</div>
              <div class="phone-content"><?php the_field('phone_content');?></div>
            </div>
          </div>

    			<div class="row">
            <div class="six columns">
              <div class="phone-title"><h3><?php the_field('phone_title');?><h3></div>
							<div class="phone-number"><?php the_field('phone_number');?></div>
              <div class="phone-info"><?php the_field('phone_information');?></div>
              <div class="fax-number"><?php the_field('fax_number');?></div>
							<?php

							$image = get_field('contact_image');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="contact-image" />

							<?php endif; ?>
            </div>
    				<div class="six columns">
              <div class="form-title"><h3><?php the_field('contact_form_title');?><h3></div>
    					<?php the_content(); ?>
    				</div>
    			</div>

        </section>
			</div>
		</section>

        <section id="map">
          <div class="row">
            <div class="twelve columns map">
              <?php the_field('google_map_content_area');?>
            </div>
          </div>
        </section>
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
