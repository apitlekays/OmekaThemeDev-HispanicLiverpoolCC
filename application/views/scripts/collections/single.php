<div class="featured-collection clearfix">
	<?php
    $title = metadata($collection, array('Dublin Core', 'Title'));
    ?>
        <p class="collection-text">Featured Collection</p>
        <div class="img-base">
	        <?php if ($collectionImage = record_image($collection, 'square_thumbnail')): ?>
        <?php echo link_to($this->collection, 'show', $collectionImage, array('class' => 'image')); ?>
    <?php endif; ?>
        </div>
        <p class="item-title2"><?php echo link_to($this->collection, 'show', strip_formatting($title)); ?></p>
        <div class="black-bar"></div>
      </div>
