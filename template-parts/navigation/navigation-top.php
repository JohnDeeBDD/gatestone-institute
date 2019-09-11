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
<style type="text/css">
.navigation-top
{
	clear:both;
	position:relative;
	top:auto;
}

.site-navigation-fixed.navigation-top
{
	position:relative;
	width:100%;
}

.main-navigation
	{
	
	clear:right;
	margin-left: auto;
		width:100%;
		float:left;
	}
	
	.navigation-top a
	{
		margin-right: 0 !important;
		color:#fff !important;
	}


	#top-menu
	{
	 display: flex;
    flex-direction: row;
    margin: 0;
    padding: 0;
		color:#fff;
}


	
	#top-menu li
	{
	 list-style: none;
    flex-grow: 1;
    text-align: center;
		border-bottom: 3px solid #da521e;
		background-color:#353535 !important;
	color:#fff;
	font-size:0.9em;
	border-right:1px solid #b9b2b9;
	}
	
#top-menu li a
{
	 display: block;
color:white;
	margin-right:0px;
}




#top-menu li a:hover
{
	background-color:#d90a2b;
	color:white;
}

.navigation-top .wrap
{
	width:100% !important;
	margin-left:auto;
	margin-right:0px;
	max-width: 100%;
	padding:0px;
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
