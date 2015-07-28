<div class="featured-item clearfix">
    <p class="featured-text">Featured Item</p>
    <?php
    $title = metadata($item, array('Dublin Core', 'Title'));
    ?>
    <div class="img-base">
	    <?php if (metadata($item, 'has files')) {
        echo link_to_item(
            item_image('square_thumbnail', array(), 0, $item), 
            array('class' => 'image'), 'show', $item
        );
    }
    ?>
    </div>
    <p class="item-title">
	    <?php echo link_to($item, 'show', strip_formatting($title)); ?>
    </p>
    <div class="black-bar"></div>
</div>
