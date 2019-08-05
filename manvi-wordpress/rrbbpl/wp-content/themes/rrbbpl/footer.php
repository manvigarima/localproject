<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<div class="footer_wrapper">
<div class="footer_container">
<div class="social_list">
<?php dynamic_sidebar('sidebar1');?>
<div class="footer_menu">
<?php dynamic_sidebar('sidebar2');?>
</div>
<div class="footer_contact_info">
<?php dynamic_sidebar('sidebar3');?>
</div>
</div>
</div>
<div class="footer_fixed_image">&nbsp; </div>


<?php wp_footer(); ?>
</body>
</html>
