<?php if ($items): ?>
    <?php foreach ($items as $item): ?>
        <?php
        $title = metadata($item, array('Dublin Core', 'Title'));
        $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 150));
        ?>
		<p class="item-title">
	        <?php echo link_to($item, 'show', strip_formatting($title)); ?>
        </p>
        <div class="img-base">
	        <?php if (metadata($item, 'has thumbnail')) {
            echo link_to_item(
                item_image('square_thumbnail', array(), 0, $item), 
                array('class' => 'image'), 'show', $item
            );
        }
        ?>
        </div>
      </div>
    <?php endforeach; ?>
<?php else: ?>
    <p><?php echo __('No featured items are available.'); ?></p>
<?php endif; ?>
