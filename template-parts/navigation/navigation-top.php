<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<style>
	/* Navigation */
	.navigation-top {
		bottom: 0;
		font-size: 14px;
		font-size: 0.875rem;
		left: 0;
		position: absolute;
		right: 0;
		width: 100%;
		border-bottom:4px solid #CB4D1C;
		z-index: 3;
		background: #727177;
	}

	.navigation-top .wrap {
		max-width: 1000px;
		/* The font size is 14px here and we need 50px padding in ems */
		padding: 0.75em 3.4166666666667em;
	}

	.navigation-top nav {
		margin-left: -1.25em;
	}

	.site-navigation-fixed.navigation-top {
		bottom: auto;
		position: fixed;
		left: 0;
		right: 0;
		top: 0;
		width: 100%;
		z-index: 7;
		background: #727177;
	}

	.admin-bar .site-navigation-fixed.navigation-top {
		top: 32px;
	}

	/* Main Navigation */

	.js .menu-toggle,
	.js .dropdown-toggle {
		display: none;
	}

	.main-navigation {
		width: auto;
	}

	.js .main-navigation ul,
	.js .main-navigation ul ul,
	.js .main-navigation > div > ul {
		display: block;
	}

	.main-navigation ul {
		background: transparent;
		padding: 0;
	}

	.main-navigation > div > ul {
		border: 0;
		margin-bottom: 0;
		padding: 0;
	}

	.main-navigation li {
		border: 0;
		display: inline-block;
	}

	.main-navigation li a:hover{background: #CB4D1C;color:#fff !important;}
	.main-navigation li li {
		display: block;
	}

	.main-navigation a {
		padding: 1em 1.25em;
	}

	.main-navigation ul ul {
		background: #fff;
		border: 1px solid #bbb;
		left: -999em;
		padding: 0;
		position: absolute;
		top: 100%;
		z-index: 99999;
	}

	.main-navigation ul li.menu-item-has-children:before,
	.main-navigation ul li.menu-item-has-children:after,
	.main-navigation ul li.page_item_has_children:before,
	.main-navigation ul li.page_item_has_children:after {
		border-style: solid;
		border-width: 0 6px 6px;
		content: "";
		display: none;
		height: 0;
		position: absolute;
		right: 1em;
		bottom: -1px;
		width: 0;
		z-index: 100000;
	}

	.main-navigation ul li.menu-item-has-children.focus:before,
	.main-navigation ul li.menu-item-has-children:hover:before,
	.main-navigation ul li.menu-item-has-children.focus:after,
	.main-navigation ul li.menu-item-has-children:hover:after,
	.main-navigation ul li.page_item_has_children.focus:before,
	.main-navigation ul li.page_item_has_children:hover:before,
	.main-navigation ul li.page_item_has_children.focus:after,
	.main-navigation ul li.page_item_has_children:hover:after {
		display: block;
	}

	.main-navigation ul li.menu-item-has-children:before,
	.main-navigation ul li.page_item_has_children:before {
		border-color: transparent transparent #bbb;
		bottom: 0;
	}

	.main-navigation ul li.menu-item-has-children:after,
	.main-navigation ul li.page_item_has_children:after {
		border-color: transparent transparent #fff;
	}

	.main-navigation ul ul li:hover > ul,
	.main-navigation ul ul li.focus > ul {
		left: 100%;
		right: auto;
	
	}

	.main-navigation ul ul a {
		padding: 0.75em 1.25em;
		width: 16em;
	}

	.main-navigation li li {
		-webkit-transition: background-color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out;
	}

	.main-navigation li li:hover,
	.main-navigation li li.focus {
		background: #767676;
	}

	.main-navigation li li a {
		-webkit-transition: color 0.3s ease-in-out;
		transition: color 0.3s ease-in-out;
	}

	.main-navigation li li.focus > a,
	.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,
	.main-navigation li li a:hover,
	.main-navigation li li a:focus,
	.main-navigation li li.current_page_item a:hover,
	.main-navigation li li.current-menu-item a:hover,
	.main-navigation li li.current_page_item a:focus,
	.main-navigation li li.current-menu-item a:focus {
		color: #fff;
	}

	.main-navigation ul li:hover > ul,
	.main-navigation ul li.focus > ul {
		left: 0.5em;
		right: auto;
	}

	.main-navigation .menu-item-has-children > a > .icon,
	.main-navigation .page_item_has_children > a > .icon {
		display: inline;
		left: 5px;
		position: relative;
		top: -1px;
	}

	.main-navigation ul ul .menu-item-has-children > a > .icon,
	.main-navigation ul ul .page_item_has_children > a > .icon {
		margin-top: -9px;
		left: auto;
		position: absolute;
		right: 1em;
		top: 50%;
		-webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
		-ms-transform: rotate(-90deg); /* IE 9 */
		transform: rotate(-90deg);
	}

	.main-navigation ul ul ul {
		left: -999em;
		margin-top: -1px;
		top: 0;
	}

	.main-navigation ul ul li.menu-item-has-children.focus:before,
	.main-navigation ul ul li.menu-item-has-children:hover:before,
	.main-navigation ul ul li.menu-item-has-children.focus:after,
	.main-navigation ul ul li.menu-item-has-children:hover:after,
	.main-navigation ul ul li.page_item_has_children.focus:before,
	.main-navigation ul ul li.page_item_has_children:hover:before,
	.main-navigation ul ul li.page_item_has_children.focus:after,
	.main-navigation ul ul li.page_item_has_children:hover:after {
		display: none;
	}

	.site-header .site-navigation-fixed .menu-scroll-down {
		display: none;
	}

	/* Scroll down arrow */

	.site-header .menu-scroll-down {
		display: block;
		padding: 1em;
		position: absolute;
		right: 0;
	}

	.site-header .menu-scroll-down .icon {
		-webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
		-ms-transform: rotate(90deg); /* IE 9 */
		transform: rotate(90deg);
	}

	.site-header .menu-scroll-down {
		color: #fff;
		top: 2em;
	}

	.site-header .navigation-top .menu-scroll-down {
		color: #767676;
		top: 0.7em;
	}

	.menu-scroll-down:focus {
		outline: thin dotted;
	}

	.menu-scroll-down .icon {
		height: 18px;
		width: 18px;
	}
</style>


<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
