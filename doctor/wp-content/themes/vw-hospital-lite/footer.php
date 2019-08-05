<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Hospital Lite
 */
?>
    <div class="footer1">
      <div class="footer-content">
        <div class="container">
          <div class="row footer-sec">
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer-1' ); ?> 
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
        </div>
      </div>
      <div class="inner">
          <div class="copyright text-center">
             <p><?php echo esc_html(get_theme_mod('vw_hospital_lite_footer_copy',__('Design & Developed By','vw-hospital-lite'))); ?> <?php vw_hospital_lite_credit(); ?></p>          
          </div>
          <div class="clear"></div>           
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>