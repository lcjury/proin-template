<?php
/**
 * Sidebar of the main widget area
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
$instagram = array(
"http://www.programadores.cl/img/nosotros/comunidad3.jpg",
"http://www.programadores.cl/img/nosotros/devcon.jpg",
"http://www.programadores.cl/img/nosotros/devcon3.jpg",
"http://www.programadores.cl/img/nosotros/devcon2.jpg",
"http://www.programadores.cl/img/nosotros/comunidad1.jpg",
"http://www.programadores.cl/img/nosotros/comunidad2.jpg"
);
?>

<div id="secondary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>


 <div class="widget">
        <div class="border-bottom"><strong class="text-muted">Nuestro Instagram</strong> <small class="text-muted">@prog.cl</small></div>
        <br/>
        <?php foreach($instagram as $inst): ?>
          <img class="img-responsive" style="padding: 1px; float:left; width:120px; height:128px;" src="<?= $inst?>">
        <?php endforeach; ?>  
</div>

</div><!-- #secondary -->
