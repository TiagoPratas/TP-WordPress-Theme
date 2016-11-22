<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage TP
 */

get_header(); ?>

	<!-- Homepage Intro Container -->
	<div class="homepage_intro_container">
		<div class="home_page_intro_toggler">
			<section class="homepage_intro">
	
				<div class="video-container">
					<iframe src="http://player.vimeo.com/video/58194452?byline=0&amp;autoplay=1" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				
				</div>
			</section>
		</div>
		<div class="clear"></div><!-- Break it! -->
	</div><!-- end • Homepage Intro Container -->

		
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Main Content -->
		<article>
			<?php /*get_template_part( 'content', 'page' );*/ ?>
			<?php the_content(); ?>
		</article><!-- end • Main Content -->
	<?php endwhile; // end of the loop. ?>

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>