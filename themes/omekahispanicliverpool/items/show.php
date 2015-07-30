<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>

<div id="primary-2">
	<div class="items-main-image">
		<?php $itemImage = files_for_item(array('imageSize' => 'fullsize')); ?>
		<?php if($itemImage){ ?>
		<!-- Files
=================================================== -->
<?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
<!-- END -->
		<?php } else { ?>
		<?php echo '<p class="noimage">There is no image for this dataset</p>' ?>
		<?php } ?>
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
			<?php 
				// START Document Metadata
				$contributorNameGen = metadata('item', array('Item Type Metadata',"Contributor's Name (general)"));
				$dateAdded = format_date(metadata('item', 'added'));
				$documentType = metadata('item', array('Item Type Metadata',"Document type"));
				$dateEvent = metadata('item', array('Item Type Metadata',"Date/s of event"));
				$location = metadata('item', array('Item Type Metadata',"Document - locations"));
				$peopleInvolve = metadata('item', array('Item Type Metadata',"Document - People"));
				$description = metadata('item', array('Item Type Metadata',"Description - what can you tell us about the item and what it shows?"));
				$additionalInfo = metadata('item', array('Item Type Metadata',"Additional Information"));
				// END Document Metadata
				// START Interview Metadata 
				$interviewee = metadata('item', array('Item Type Metadata',"Interviewee"));
				$interviewer = metadata('item', array('Item Type Metadata',"Interviewer"));
				$url = metadata('item', array('Item Type Metadata',"URL"));
				$dateInterview = metadata('item', array('Item Type Metadata',"Date of interview"));
				$locationInterview = metadata('item', array('Item Type Metadata',"Location"));
				$durationInterview = metadata('item', array('Item Type Metadata',"Duration"));
				$interviewSummary = metadata('item', array('Item Type Metadata',"Interview Summary and/or other relevant information"));
				// END Interview Metadata
				// START Photo Metadata
				$contributorName = metadata('item', array('Item Type Metadata',"Contributor's Name"));
				$photogName = metadata('item', array('Item Type Metadata',"Photographer's Name"));
				$photoDate = metadata('item', array('Item Type Metadata',"Date of the Photo"));
				$photoLocation = metadata('item', array('Item Type Metadata',"Location of the Photo"));
				$photoDesc = metadata('item', array('Item Type Metadata',"Description of the Photo"));
				// END Photo Metadata
				// START Drawing Metadata
				$drawArtistsName = metadata('item', array('Item Type Metadata',"Artist's/Creator's name"));
				$drawDate = metadata('item', array('Item Type Metadata',"When was this item drawn/created?"));
				$drawLocation = metadata('item', array('Item Type Metadata',"What location or locations are depicted?"));
				$drawMaterial = metadata('item', array('Item Type Metadata',"Materials used"));
				// END Drawing Metadata
			?>
			
			<h4>
			<?php if ($contributorNameGen){ ?>	
			Contributed by: 
			<!-- Contributor's Name (general)
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Contributor's Name (general)")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if ($contributorName){ ?>	
			Contributed by: 
			<!-- Contributor's Name - Photo
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Contributor's Name")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
						
			
			<?php if($dateAdded){ ?>
			Date added:
			<!-- Date Added
			=================================================== -->
			<?php echo format_date(metadata('item', 'added')); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			
			<?php if($photogName){ ?>
			Photographed by:
			<!-- Photographer's Name
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Photographer's Name")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($drawArtistsName){ ?>
			Artist's/Creator's name:
			<!-- Artist's Name
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Artist's/Creator's name")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($photoDate){ ?>
			Date of the photo:
			<!-- Photo's Date
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Date of the Photo")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($dateInterview){ ?>
			Date of interview:
			<!-- Date of Interview
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Date of interview")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($drawDate){ ?>
			Date of creation:
			<!-- Date drawn
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"When was this item drawn/created?")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($interviewee){ ?>
			Interviewee:
			<!-- Interviewee
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Interviewee")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($interviewer){ ?>
			Interviewer:
			<!-- Interviewer
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Interviewer")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($documentType){ ?>
			Document type:
			<!-- Document type
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document type")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($url){ ?>
			URL:
			<!-- URL
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"URL")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($dateEvent) { ?>
			Date of event:
			<!-- Date/s of event
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Date/s of event")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($location) { ?>
			Location:
			<!-- Document - locations
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document - locations")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($locationInterview) { ?>
			Location of the interview:
			<!-- Interview - locations
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Location")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($photoLocation){ ?>
			Location of the photo:
			<!-- Photo - locations
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Location of the Photo")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($drawLocation){ ?>
			Location(s) depicted:
			<!-- Drawing - locations
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"What location or locations are depicted?")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($peopleInvolve){ ?>
			People involved:
			<!-- Document - People
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Document - People")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($durationInterview){ ?>
			Duration:
			<!-- Interview - Duration
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Duration")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			<?php if($drawMaterial){ ?>
			Materials:
			<!-- Drawing - Materials used
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Materials used")); ?>
			<!-- END -->
			<br />
			<?php } ?>
			
			</h4>
		</div>
		<div class="items-stories-hz">
			<p>
			<?php if($description){ ?>
			<span style="font-style: italic; font-weight: 500;">Description: </span><br />
			<!-- Description - what can you tell us about the item and what it shows?
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Description - what can you tell us about the item and what it shows?")); ?>
			<!-- END -->
			<?php } ?>
			<?php if($interviewSummary){ ?>
			<span style="font-style: italic; font-weight: 500;">Interview Summary/ Other Information: </span><br />
			<!-- Interview Summary and/or other relevant information
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Interview Summary and/or other relevant information")); ?>
			<!-- END -->
			<?php } ?>
			<?php if($photoDesc){ ?>
			<span style="font-style: italic; font-weight: 500;">Description of the Photo: </span><br />
			<!-- Description of the Photo
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Description of the Photo")); ?>
			<!-- END -->
			<?php } ?>
			<br />
			<br />
			<?php if($additionalInfo){ ?>
			<span style="font-style: italic; font-weight: 500;">Additional information: </span><br />
			<!-- Additional Information
			=================================================== -->
			<?php echo metadata('item', array('Item Type Metadata',"Additional Information")); ?>
			<!-- END -->
			<?php } ?>
			
		</p>
		<ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


    
	</div>
</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
