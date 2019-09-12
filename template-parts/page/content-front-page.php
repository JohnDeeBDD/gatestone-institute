<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<style type="text/css">

.site-content .wrap
{
	max-width:100%;
	
}
.panel-content
{
margin:0 auto;
width:100%;

border:1px solid #353535;
}

.panel-content .wrap
{
max-width:100%;

overflow:auto;
padding:5px;
margin:0 auto 10px auto;
}

.feature-border
{
margin-top:15px;
float:left;
width:254px;
height:154px;
border:1px solid #d90a2b;
}

.feature-img
{

background-repeat:none;
margin:1px 0px 0px 1px;
width:250px;
height:150px;

}

.feature-img img
{
	max-width:100%;
max-height:100%;
}


.blog-text
{
width:calc(100% - 270px);
float:right;
margin-left:10px;

}

.blog-text-full
{
margin-left:10px;

}

.blog-roll-footer
{
clear:both;
width:100%;
margin-top:10px !important;
padding-top:5px;
padding-bottom:5px;
background-color:#ececec !important;
overflow:auto;

}

.blog-roll-tags
{
width:45%;
float:left;
color:#d90a2b;
margin-left:10px;
}

.blog-roll-info
{
width:45%;
float:right;
text-align:right;
margin-right:10px;
}

.blog-roll-info a
{
color:#d90a2b;
}

.blog-separator
{
 border-top:none;
height:1px solid #d7d7d7;
margin-bottom:10px;
}

.panel-content .entry-title
{
	font-size:1.1em !important;
	font-weight:bold !important;
	color:#353535 !important;
	margin-top:15px;
}

.panel-content .entry-header
{
	margin-bottom:0px !important;
	padding:0px !important;
}

.panel-content .edit-link
{

margin-bottom:0px;
}

.panel-content .edit-link a
{
color:#d90a2b;

}

.blog-cont
{

}

</style>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

<div class="panel-content">
	<?php
	if ( has_post_thumbnail() ) {  ?>
	<div class="wrap">
<div class="blog-cont">
<div class="feature-border">
<div class="feature-img">
<?php
the_post_thumbnail();
?>
</div>
</div>
<div class="blog-text">
<header class="entry-header">
<?php the_title( '<h3 class="entry-title">', '</h3>' );  ?>
<?php twentyseventeen_edit_link( get_the_ID() ); ?>
</header>
<hr class="blog-separator">
<div class="entry-content">
<?php the_excerpt(); ?>
</div>
</div>

</div>

</div><!-- .wrap -->
<div class="blog-roll-footer">
<div class="blog-roll-tags">
<?php the_tags(); ?>
</div>
<div class="blog-roll-info">
Posted By <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>  on <?php the_date(); ?>
</div>

</div>
<?php }  
else
{
?>
<div class="wrap">
<div class="blog-cont">
<div class="blog-text-full">
<header class="entry-header">
<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>
</header>
<hr class="blog-separator">
<div class="entry-content">
<?php the_excerpt(); ?>
</div>
</div>
</div>

</div><!-- .wrap -->
<div class="blog-roll-footer">
<div class="blog-roll-tags">
<?php the_tags(); ?>
</div>
<div class="blog-roll-info">
Posted By <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>  on <?php the_date(); ?>
</div>

</div>
<?php } ?>
	
		
	</div><!-- .panel-content -->

</article><!-- #post-<?php the_ID(); ?> -->
