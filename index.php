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
	
	<!-- #region Slider Begin -->
    <script src="wp-content/themes/amits/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/amits/assets/js/slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        
        #content {
            padding-top: 20px;
        }
        /*Slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}


    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:650px;overflow:hidden;visibility:hidden;margin-bottom:20px;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:650px;overflow:hidden;">

        	<?php
        		$args = array( 'posts_per_page' => '3' );
				$recent_posts = new WP_Query($args);
				while( $recent_posts->have_posts() ) { 

				   $recent_posts->the_post() ; 

				   if ( has_post_thumbnail() ) {
				      //echo '<div><img data-u="image" src="' . get_the_post_thumbnail_url() . '"></div>' ;
				   	?>

				   		<div>
			                <img data-u="image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
			                <div style="position:absolute;bottom:30px;left:30px;font-size:21px;color:#ffffff;line-height:1.5;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:rgba(0, 0, 0, 0.5);background-clip:padding-box;">
			                    <?php echo get_the_title(); ?>
			                </div>
			            </div>

			        <?php
				    }
				}
        	?>
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
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

