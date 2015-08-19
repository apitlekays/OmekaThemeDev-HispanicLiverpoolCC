<?php echo head(); ?>
<div id="isi">
<!-- Start of Front Page Body -->
  <section class="pro-desc-main">
    <div class="main-pro-desc clearfix">
      <div class="main-img"></div>
      <div class="pro-desc clearfix">
        <div class="project-desc clearfix">
          <!-- <p class="desc-title">Project Description</p> -->
          <p class="desc-text"><?php echo get_theme_option('HLCC Page Description'); ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="number-collection clearfix">
    <div class="number-items">
      <button onclick="window.location.href='/items/browse'">Click here to see all items</button>
      <p class="number">There 
	      <?php if (total_records('Item') <= 1){ ?>
	      <?php echo __('is'); ?>
	      <?php } else { ?>
	      <?php echo __('are'); ?>
	      <?php } ?>
	      <?php echo total_records('Item'); ?> 
	      <?php if (total_records('Item') <= 1){ ?>
	      <?php echo __('item'); ?>
	      <?php } else { ?>
	      <?php echo __('items'); ?>
	      <?php } ?>
	       in our community collection</p>
    </div>
  </section>
  <section class="featured-container-main clearfix">
    <div class="element"></div>
    <div class="featured-container">
	        <?php if (get_theme_option('Display Featured Item') == 1): ?>
  	<!-- Featured Item -->
        <?php echo random_featured_items(5); ?>
    <?php endif; ?>      
        <?php if (get_theme_option('Display Featured Collection')): ?>
    <!-- Featured Collection -->
        <?php echo random_featured_collection(5); ?>
    <?php endif; ?>

      <div class="tag-cloud-container clearfix">
        <p class="tags-cloud">Tags Cloud</p>
        <div class="insert-tag-cloud-here">
	        <?php $tags = get_records('Tag',array('sort_field' => 'count', 'sort_dir'=>'d', 'type'=>'Item'),200); ?>
		    <?php echo tag_cloud($tags, url('items/browse'),4,20); ?>
        </div>
      </div>
    </div>
<?php echo foot(); ?>
