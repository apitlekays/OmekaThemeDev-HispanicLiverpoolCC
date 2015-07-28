<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle, 'bodyclass'=>'items tags'));
?>
<div id="primary">
<h1><?php echo $pageTitle; ?></h1>

<nav class="navigation items-nav secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>
<div class="tags-divs">
<?php echo tag_cloud($tags, 'items/browse'); ?>
</div>
</div>
<?php echo foot(); ?>
