<?php
queue_js_file('guest-user-password');
queue_css_file('skeleton');
$css = "form > div { clear: both; padding-top: 10px;} .two.columns {width: 30%;} ";
queue_css_string($css);
$pageTitle = get_option('guest_user_register_text') ? get_option('guest_user_register_text') : __('Register');
echo head(array('bodyclass' => 'register', 'title' => $pageTitle));
?>

<div id='primary'>
<h1><?php echo $pageTitle; ?></h1>
<div id='capabilities'>
<p>
<?php echo get_option('guest_user_capabilities'); ?>
</p>
</div>
<div class="register_form">
<?php echo flash(); ?>
<?php echo $this->form; ?>
</div>
<p id='confirm'></p>
</div>
<?php echo foot(); ?>
