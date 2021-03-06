<?php
$collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>
<div id="primary">
<h1><?php echo $collectionTitle; ?></h1>


<div id="collection-items">
    <h2><?php echo link_to_items_browse(__('Items in the %s Collection', $collectionTitle), array('collection' => metadata('collection', 'id'))); ?></h2>
    <?php if (metadata('collection', 'total_items') > 0): ?>
    
        <?php foreach (loop('items') as $item): ?>
        <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
		<div class="card-element-collection clearfix">
		    <div class="card-image">
			    <?php if (metadata('item', 'has thumbnail')): ?>
                <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
				<?php endif; ?>
		    </div>
		    <div class="card-image-black-bar"></div>
		    <div class="card-title">
			    <h2><?php echo link_to_item($itemTitle, array('class'=>'permalink')); ?></h2>
		    </div>
		</div>
        <?php endforeach; ?>
    <?php else: ?>
        <p><?php echo __("There are currently no items within this collection."); ?></p>
    <?php endif; ?>
</div><!-- end collection-items -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>
</div>
<?php echo foot(); ?>
