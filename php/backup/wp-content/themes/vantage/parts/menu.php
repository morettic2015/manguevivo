<?php
/**
 * Part Name: Default Menu
 */

$ubermenu_active = function_exists( 'ubermenu' );
$max_mega_menu_active = function_exists( 'max_mega_menu_is_enabled' ) && max_mega_menu_is_enabled( 'primary' );
$nav_classes = array( 'site-navigation' );
if ( ! $ubermenu_active && ! $max_mega_menu_active ) {
	$nav_classes[] = 'main-navigation';
}
$nav_classes[] = 'primary';

if ( siteorigin_setting( 'navigation_use_sticky_menu' ) ) {
	$nav_classes[] = 'use-sticky-menu';
}

if ( siteorigin_setting( 'navigation_mobile_navigation' ) ) {
	$nav_classes[] = 'mobile-navigation';
}
$logo_in_menu = siteorigin_setting( 'layout_masthead' ) == 'logo-in-menu';
?>

<nav role="navigation" class="<?php echo implode( ' ', $nav_classes) ?>">

	<div class="full-container">
		<?php if($logo_in_menu) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php vantage_display_logo(); ?></a>
		<?php endif; ?>

		<?php if( siteorigin_setting('navigation_menu_search') && ! $max_mega_menu_active ) : ?>
			<div id="search-icon">
				<div id="search-icon-icon"><?php echo vantage_display_icon( 'search' ); ?></div>				
				<?php get_search_form() ?>
			</div>
		<?php endif; ?>

		<div>
			<div id="telefone">(48) 3248-3030</div>
			<?php if( $ubermenu_active ): ?>
				<?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
			<?php else: ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'link_before' => '<span class="icon"></span>' ) ); ?>
			<?php endif; ?>
		</div>

	</div>
</nav><!-- .site-navigation .main-navigation -->

<style>


/** Desktop e tablet **/
#telefone{
	color: #45821A;
	font-family: Helvetica, Arial, sans-serif;
	font-size: 16pt;
	font-weight: 600;
	text-align: left;
	position: relative;
	top: 33px;
	right: 7%;
	float: right;
	width: auto;
}


/** Mobile **/
@media only screen and (max-width: 480px){
	#telefone{
		color: green;
		font-size: 16pt;
		text-align: center;
		position: relative;
		width: 100%;
		top: 5px;	
		right: 0;
		float: none;
	}

	.full-container .logo{
		width: 100%;
	}
}
</style>
