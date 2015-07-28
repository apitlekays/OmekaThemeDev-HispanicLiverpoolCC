<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>
<div id="primary">
<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php echo item_search_filters(); ?>

<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?>
<div class="dynamic-card-section">
<!--Start Dynamic Cards 
=================================================== -->
<?php foreach (loop('items') as $item): ?>

<div class="card-element clearfix">
    <div class="card-image">
	    <?php if (metadata('item', 'has thumbnail')): ?>
        <?php echo link_to_item(item_image('square_thumbnail')); ?>
        <?php endif; ?>
    </div>
    <div class="card-image-black-bar"></div>
    <div class="card-title">
	    <h2><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h2>
    </div>
    <div class="card-tags">
	    <?php if (metadata('item', 'has tags')): ?>
    <p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    <?php endif; ?>
    </div>
</div>
    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
<?php endforeach; ?>
<!-- End Dynamic Cards
=================================================== -->
</div>
<?php echo pagination_links(); ?>

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
</div>
<?php echo foot(); ?>
