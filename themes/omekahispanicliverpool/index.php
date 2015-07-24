<?php echo head(); ?>
<div id="isi">
<!-- Start of Front Page Body -->
  <section class="pro-desc-main">
    <div class="main-pro-desc clearfix">
      <div class="main-img"></div>
      <div class="pro-desc clearfix">
        <div class="project-desc clearfix">
          <p class="desc-title">Project Description</p>
          <p class="desc-text"><?php if ($description = option('description')): ?>
    <?php echo $description; ?>
    <?php endif; ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="number-collection clearfix">
    <div class="number-items">
      <button>Browse the Collection</button>
      <p class="number">There 
	      <?php if (total_records('Item') === 0){ ?>
	      <?php echo __('is'); ?>
	      <?php } else { ?>
	      <?php echo __('are'); ?>
	      <?php } ?>
	      <?php echo total_records('Item'); ?> 
	      <?php if (total_records('Item') === 0){ ?>
	      <?php echo __('item'); ?>
	      <?php } else { ?>
	      <?php echo __('items'); ?>
	      <?php } ?>
	       in our collection</p>
    </div>
  </section>
  <section class="featured-container-main clearfix">
    <div class="element"></div>
    <div class="featured-container">
      <div class="featured-item clearfix">
        <p class="featured-text">Featured Item</p>
        <div class="img-base"></div>
        <p class="item-title">Item Title</p>
        <div class="black-bar"></div>
      </div>
      <div class="featured-collection clearfix">
        <p class="collection-text">Featured Collection</p>
        <div class="img-base"></div>
        <p class="item-title2">Item Title</p>
        <div class="black-bar"></div>
      </div>
      <div class="tag-cloud-container clearfix">
        <p class="tags-cloud">Tags Cloud</p>
        <div class="insert-tag-cloud-here"></div>
      </div>
    </div>
<?php echo foot(); ?>
