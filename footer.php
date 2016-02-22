<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
// TODO: Send scripts to the queue on functions file
?>
<br/>
<br/>
<footer class="footer">
  <div class="container">
	<br/>
	<?php get_sidebar('footer'); ?>	
  </div>    
</footer>

<!-- Scripts -->
<!-- owl carousel -->
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>

<!-- Twitter Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.7/js/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.7/js/ripples.min.js"></script>

<!-- parallax -->
<script src="<?php echo get_template_directory_uri();?>/js/parallax.min.js"></script>
<script>
  jQuery.material.init();
</script>
<?php wp_footer(); ?>
</body>
</html>
