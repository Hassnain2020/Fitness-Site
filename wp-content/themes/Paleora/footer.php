<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

   <footer id="colophon" class="site-footer" role="contentinfo">
			
          <!-- ============================================================================================================================== -->
        
              
         <div class="Myfooter"><!-- Start Myfooter -->
           
           <div class="footer_top"><!-- Start footer_top -->
             <div class="Mycontainer"><!-- Start Mycontainer -->
              
                  <div class="nl_text_block">
                     
                     <?php dynamic_sidebar(2); ?><!-- Footer News Letter Heading Text -->
                     
                  </div>
                  <div class="nl_block">
                     
                      <?php dynamic_sidebar(3); ?><!-- News Letter -->
                      
                      <?php dynamic_sidebar(6); ?><!-- Respect Policy Text -->
                  </div>
                  
                  <div class="clr"></div>
                       
             </div> <!-- End Mycontainer -->
          </div> <!-- End footer_top -->
          
          <div class="footer_bottom"><!-- Start footer_bottom -->
             <div class="Mycontainer"><!-- Start Mycontainer -->
               
                 <?php dynamic_sidebar(4); ?><!-- Connect With Emily Text -->
                
                 <?php $args=array('menu'=>'Social_Menu','menu_class'=>'ft_social_menu'); ?>
                 <?php wp_nav_menu($args); ?><!--  Social_Menu --> 
                
                 <?php dynamic_sidebar(5); ?><!-- Copy Right Text -->
                       
             </div> <!-- End Mycontainer -->
          </div> <!-- End footer_bottom -->
          
      </div><!-- End Myfooter -->
           
           
        
        <!-- ============================================================================================================================== -->
            
		</footer><!-- #colophon -->
	
<?php wp_footer(); ?>

</body>
</html>
