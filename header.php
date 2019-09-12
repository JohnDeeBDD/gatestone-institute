<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes();?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head();?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom-style.css">
<script>
    jQuery(document).ready(function(){
        jQuery('.start-button').click(function() {
            jQuery('.nav').toggle();
        })
    });
</script>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentyseventeen');?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="top clearfix">
            <a class="logo" href="https://www.gatestoneinstitute.org"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.gif" alt=
            "Gatestone Institute" title="Gatestone Institute"></a>
            <!-- <div class="banner">
                <h1 style="color: #CCC;">Some content goes here.</h1>
            </div> -->
        </div>

		<?php if (has_nav_menu('top')): ?>
            <?php get_template_part('template-parts/navigation/navigation', 'top');?>
		<?php endif;?>

	</header><!-- #masthead -->

	<?php

/*
 * If a regular post or page, and not the front page, show the featured image.
 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
 */
if ((is_single() || (is_page() && !twentyseventeen_is_frontpage())) && has_post_thumbnail(get_queried_object_id())):
	echo '<div class="single-featured-image-header">';
	echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image');
	echo '</div><!-- .single-featured-image-header -->';
endif;
?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
