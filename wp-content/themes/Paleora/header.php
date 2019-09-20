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
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<title>Paleora</title>
<link href="<?php bloginfo('template_directory'); ?>/images/fav_icon.png" type="text/css" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery_files/bxslider-4-master/jquery.bxslider.min.css" />
<link href="<?php bloginfo('template_directory'); ?>/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" /> 
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery_files/slick/slick.css" />
<script src="<?php bloginfo('template_directory'); ?>/jquery_files/js/jquery_1.11.1_jquery.min.js" type="text/jscript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery_files/bxslider-4-master/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery_files/slick/slick.min.js" type="text/javascript"></script>


<script type="text/jscript">

$(document).ready(function(e) {
	
	
   $("#btn_toggle").click(function(e) {
	   
	   $(".main_nav").slideToggle("normal");
    
    }); 
	     
	   $(".slicker1").slick({
			  centerMode:false,
			  draggable:false,
			  arrows:true,
			  //autoplay:true,
			  autoplaySpeed:1500,
			  slidesToShow:2,
			  slidesToScroll:1,
			  responsive:[
					  {
						 breakpoint:700,
						 settings:{
							slidesToShow:1
						
						 }
					  }
					 ]
		});
		 $(".bxSlider1").bxSlider({
	   
	        mode:'horizontal', //mode: 'fade',            
            speed:1000,
            //auto:true,
			autoHover:true,
            infiniteLoop:true,
            hideControlOnEnd:true,
            useCSS:false,
			controls:true
		   });
  					
});


</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
 
        <!-- ============================================================================================================================== -->
        
        
       <div class="mainhead"><!--Start head portion -->
                     
          <div class="Mycontainer"><!-- Start Mycontainer -->
                 <div class="site_logo"><?php dynamic_sidebar(1); ?> <!-- Site Logo --> </div>
                 <div class="navigation_block"> <!-- Start navigation_block -->
                       <ul class="login_menu">
                          <li><a href="<?php echo wc_get_cart_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/shopping_icon.png"><span>Shopping Cart</span></a></li>
                          <li><a href="#"><i class="fa fa-sign-in"></i><span>Login</span></a></li>
                       </ul> 
                      <div class="menu_block"><!-- Start menu_block --> 
                       <button class="btn_toggle" id="btn_toggle" title="Menu"><i class=" fa fa-bars"></i></button> 
                       
                       <?php $args=array('menu'=>'Primary_Menu','container_class'=>'main_nav'); ?>
                        <?php wp_nav_menu($args); ?><!-- Primary_Menu --> 
                        
                     </div><!-- End menu_block -->  
                     <div class="clr"></div>
                </div> <!-- Start navigation_block --> 
                <div class="clr"></div> 
          </div><!-- End Mycontainer --> 
               
      </div><!-- End head Portion-->
      
      <?php if(is_front_page()) { ?>
      
      
      
            <div class="banner_slider"><!-- Start banner_slider -->
       
              <ul class="bxSlider1">
                 <?php
                     if( have_rows('banner_slider_data') ):
                     while ( have_rows('banner_slider_data') ) : the_row(); 
	             ?> 
                       <li>
                               <div class="banner_content"><!-- Start banner_content -->
                                   
                                          <?php the_sub_field('banner_text'); ?>
                                          
                               </div><!-- End banner_content -->
                           <img src="<?php the_sub_field('slider_back_image'); ?>">
                           
                       </li>
                       
                  <?php endwhile; endif; wp_reset_query(); ?>
                   
              </ul>
           
       </div><!-- End banner_slider -->
      
      
      
      <?php } ?>
       <?php if(!is_front_page() && !('product' == get_post_type())){  ?>
       
         <div class="inner_pages_bnner"><!--Start inner_pages_bnner -->
                   
                     <div class="banner_content"><!-- Start banner_content -->
                                   
                          <?php the_field('inner_banner_text'); ?>
                                          
                     </div><!-- End banner_content -->
                    <?php if(function_exists('show_media_header')){ show_media_header(); } ?>
                    
                    
        </div><!-- End inner_pages_bnner -->
         
      <?php }?>   
       <?php if('product' == get_post_type()){  ?>
       
         <div class="inner_pages_bnner"><!--Start inner_pages_bnner -->
                   
                     <div class="banner_content"><!-- Start banner_content -->
                                   
                          <?php dynamic_sidebar(7); ?><!-- Products Banner Text -->
                                          
                     </div><!-- End banner_content -->
                    <?php if(function_exists('show_media_header')){ show_media_header(); } ?>
                    
                    
        </div><!-- End inner_pages_bnner -->
         
      <?php }?>     
        
        <!-- ============================================================================================================================== -->

	</header><!-- #masthead -->

	