<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding container">
	<?php
	if ( is_front_page() && is_home() ) : ?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo("template_url"); ?>/images/header-logo.png" alt="<?php bloginfo( 'name' ); ?>"/></a></h1>
<?php else : ?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo("template_url"); ?>/images/header-logo.png" alt="<?php bloginfo( 'name' ); ?>"/></a></h1>
	<?php
	endif;

	// $description = get_bloginfo( 'description', 'display' );
	// if ( $description || is_customize_preview() ) : ?>
	<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
	<?php
	// endif; ?>
</div><!-- .site-branding -->
