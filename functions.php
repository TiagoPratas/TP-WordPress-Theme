<?php
/**
 * TP functions and definitions.
 *
 */

function tp_scripts() {
	wp_enqueue_style( 'tp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'tp-responsive', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_script( 'tp-script', get_template_directory_uri() . '/js/tp.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'tp-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'tp-modernizr', get_template_directory_uri() . '/js/modernizr-1.6.min.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'tp_scripts' );

function tp_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "<p>To view this protected Portfolio, enter the password below:</p>" ) . '
    <p><label for="' . $label . '">Password:</label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /></p><input type="submit" name="Submit" value="Enter" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'tp_password_form' );