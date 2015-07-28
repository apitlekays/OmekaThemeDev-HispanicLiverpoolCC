<?php echo head(); ?>
<div id="primary">
    <h1><?php echo html_escape(get_option('simple_contact_form_contact_page_title')); ?></h1>
<div id="simple-contact">
    <div id="form-instructions">
        <?php echo get_option('simple_contact_form_contact_page_instructions'); // HTML ?>
    </div>
    <?php echo flash(); ?>
    <form class="clearfix" name="contact_form" id="contact-form"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
    
    <fieldset class="_container-4 clearfix">
      
      <div class="field field-1 clearfix">
	      <?php echo $this->formLabel('name', 'Your Name: '); ?>
        <div class="inputs inputs-1">
	        <?php echo $this->formText('name', $name, array('class'=>'textinput')); ?>
        </div>
      </div>
      
      <div class="field field-2 clearfix">
	      <?php echo $this->formLabel('email', 'Your Email: '); ?>
        <div class="inputs inputs-2">
	        <?php echo $this->formText('name', $name, array('class'=>'textinput')); ?>
        </div>
      </div>
      
      <div class="field field-3 clearfix">
	      <?php echo $this->formLabel('message', 'Your Message: '); ?>
        <div class="inputs inputs-3">
	        <?php echo $this->formTextarea('message', $message, array('class'=>'textinput', 'rows' => '10')); ?>
        </div>
      </div>
    
    </fieldset>
    
    <fieldset class="_container-5 clearfix">
	<?php if ($captcha): ?>    
      <div class="field field-4">
	      <?php echo $captcha; ?>
      </div>
      		<?php endif; ?>
      <div class="field">
          <?php echo $this->formSubmit('send', 'Send Message'); ?>
        </div>
    </fieldset>
  
  	</form>
    

</div>

</div>
<?php echo foot();