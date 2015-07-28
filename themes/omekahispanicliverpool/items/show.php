<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>

<div id="primary-2">
	<div class="items-main-image">
		<!-- Files
=================================================== -->
<?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
<!-- END -->
	</div>
	<div class="items-info">
		<div class="items-title-tags">
			<div class="items-title-hz">
			<!-- Title
			=================================================== -->
			<?php echo metadata('item', array('Dublin Core','Title')); ?>
			<!-- END -->
			</div>

			<div class="items-tags-hz">
			<!-- Tags
			=================================================== -->
			<h3>Tags: </h3><?php echo tag_string('item'); ?>
			<!-- END -->
			</div>
		</div>
		<div class="items-more-info">
			<h4>Contributed by: 
			<!-- Contributor's Name (general)
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Contributor's Name (general)")); ?>
			<!-- END -->
			<br />
			Date added:
			<!-- Date Added
			=================================================== -->
			<?php echo format_date(metadata('item', 'added')); ?>
			<!-- END -->
			<br />
			Document type:
			<!-- Document type
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document type")); ?>
			<!-- END -->
			<br />
			Date of event:
			<!-- Date/s of event
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Date/s of event")); ?>
			<!-- END -->
			<br />
			Location:
			<!-- Document - locations
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document - locations")); ?>
			<!-- END -->
			<br />
			People involved:
			<!-- Document - People
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document - People")); ?>
			<!-- END -->
			</h4><br />
		</div>
		<div class="items-stories-hz">
			<!-- Description - what can you tell us about the item and what it shows?
			=================================================== -->
			<h3><?php echo metadata('item', array('Item Type Metadata',"Description - what can you tell us about the item and what it shows?")); ?>
			<!-- END -->
			<br />
			<br />
			<span style="font-style: italic;">Additional information: 
			<!-- Additional Information
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Additional Information")); ?>
			<!-- END -->
			</span>
			</h3>
		</div>
		<ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


    
	</div>
</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
