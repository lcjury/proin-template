<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'');
?>
</div>

<div id="post-<?php the_ID(); ?>" <?php post_class("container-fluid");?>>
  <div class="row">
    <div class="post-header parallax-window black-back"  data-speed="1.4" data-parallax="scroll" data-image-src="<?= $thumb_url[0]?>">
      <div class="col-lg-8 col-lg-offset-2">
        <br/><br/><br/>
        <?= the_title('<h1 class="text-center"><b>','</b></h1>'); ?>
        <div class="list-group pull-right author-meta post-meta">
          <div class="list-group-item">
            <div class="row-picture">
              <?= proin_author_avatar() ?>
            </div>
            <div class="row-content">
 	      <?= proin_post_author('<h4 class="list-group-item-text lead">', '</h4>') ?>
              <?= proin_posted_on('<p class="list-group-item-text">', '</p>') ?><br/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 article-body">
      <?php the_content(); ?>
    </div>
  </div><!-- row -->
</div><!-- container -->	
