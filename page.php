<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage TP
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

		<!-- Content Wrapper-->
		<section class="content_wrapper">
			<!-- Contextual Navigation -->
			<!-- Section Identifier -->
			<?php the_title('<h2 class="section_identifier">', '</h2><!-- end • Section Identifier -->'); ?>
			<nav class="contextual_navigation">
				
			</nav><!-- end • Contextual Navigation -->
			<!-- Content Container -->
			<section class="content_container">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>				

				<!-- Main Content -->
				<article>
					<?php /*get_template_part( 'content', 'page' );*/ ?>
					<?php the_title("<h1>","</h1>"); ?>	
					<?php the_content(); ?>	
				</article><!-- end • Main Content -->
			</section><!-- end • Content Container -->
			<div class="clear"></div><!-- Break it! -->
		</section><!-- end • Content Wrapper-->
<?php endwhile; // end of the loop. ?>

<?php /*get_sidebar( 'front' );*/ ?>
<?php get_footer(); ?>