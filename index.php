<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="wrap">
<?php	
 if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- blog section -->
			<!-- Check for posts 	 -->
<?php 
                if( have_posts()):
                while(have_posts()): the_post();
            ?>
                        <!-- blog post start  -->
						<article <?php post_class(); ?> > 
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2><a>
							
							<div class="meta-info" style="color: grey; font-size:0.9em;">
								<p>by<em> <?php the_author_posts_link(); ?></em> •  <?php echo get_the_date(); ?> </p>
								<!-- <p>Catagories: <?php //the_category(' '); ?></p> -->
								<p><?php the_tags('Tags: ',', ');?></p>
							</div>
                            <!-- Checking for post thumbmnail -->
							<?php if(has_post_thumbnail()) : ?>
								<div class="row" style="margin-top:20px">
									<div class="col-sm-4" style="padding-top:5px;">
									<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail(array(400,400));  //thumbnail,medium / large / full  ?> 
    								</a>
									</div>
									<div class="col-md-8">
								
							<?php else: ?>
							<div class="row"  style="margin-top:20px">
							<div class="container">
							<?php endif; ?>

							
							<p><?php the_excerpt(); ?></p>
							
							</div> <!-- col-8 -->
						</div><!-- row -->
						</article>

						<?php 
                            endwhile;
                        ?>

						<?php
                                else:
                        ?>
                        <p>There is nothing else to display</p>
                        <?php endif; ?>



					

				
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->


<?php
get_footer();
?>

