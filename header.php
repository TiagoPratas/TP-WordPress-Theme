<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage TP
 */
?>
<!DOCTYPE html>
<!-- CONDITIONAL STYLESHEETS -->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>TP • Tiago Pratas</title>
	<!-- Meta -->
	<meta name="description" content="???">
	<meta name="author" content="Tiago Pratas | TP | hello@tiagopratas.pt">
	<meta name="robots" content="noodp,noydir">
	<meta name="keywords" content="tiago pratas, portfolio, design">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Link -->
	<link rel="canonical" href="http://tiagopratas.pt">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if IE]>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>

	<!-- Container -->	
	<div id="container">

		<!-- Header -->
		<header>
		<?php $header_image = get_header_image();
		/* Just to save the code */
		if ( ! empty( $header_image ) && False ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>	
			<div class="mensagem">
		<ul>
			<li>have questions?</li>
			<li style="margin-top: 102px;">Ask me!</li>
		</uL>	
	</div>	
		<!-- Logotipo TP -->
		<h1 id="logo" class="position"><a href="/" title="TP"></a></h1><!-- end • Logotipo TP -->
		<!-- Global_Navigation_ -->
		<nav class="global_navigation">
			<ul class="opened_global_navigation">
				<li class="close"><a href="/" title="Secções">SECÇÕES</a></li>

				<?php $args = array(
						'depth'        => 0,
						'show_date'    => '',
						'date_format'  => get_option('date_format'),
						'child_of'     => 0,
						'exclude'      => '',
						'include'      => '',
						'title_li'     => __(''),
						'echo'         => 1,
						'authors'      => '',
						'sort_column'  => 'menu_order, post_title',
						'link_before'  => '',
						'link_after'   => '',
						'walker'       => '',
						'post_type'    => 'page',
        				'post_status'  => 'publish'
					); 
					wp_list_pages( $args );
					?>
			</ul>
		</nav><!-- end • Global_Navigation -->
		
		</header><!-- end • Header -->

		<div class="clear"></div><!-- Break it! -->
