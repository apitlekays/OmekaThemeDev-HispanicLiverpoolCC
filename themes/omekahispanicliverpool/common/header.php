<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <?php if ($description = option('description')): ?>
  <meta name="description" content="<?php echo $description; ?>" />
  <?php endif; ?>
  <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
  <title><?php echo implode(' &middot; ', $titleParts); ?></title>
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,400,100" rel="stylesheet" type="text/css">
  
<?php fire_plugin_hook('public_head',array('view'=>$this)); ?>

<!-- Stylesheets -->
    <?php queue_css_file('standardize'); ?>
	<?php queue_css_file('styles'); ?>
    <?php echo head_css();?>
<!-- JavaScripts-->
    <?php queue_js_file('jquery-min'); ?>
    <?php echo head_js(); ?>
 
</head>
<body id="home" class="body page-index clearfix admin-bar">
<!-- Start of Header -->
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
  <header>
    <div class="main_header">
	  <div class="warwick-logo-new"></div>
      <a href="/"><div class="site_title clearfix">
        <p class="main_title"><?php echo option('site_title'); ?></p>
        <p class="subtitle">COMMUNITY COLLECTION</p>
      </div></a>
      <div class="main_menu clearfix">
        <p class="home"><a href="/">Home</a></p>
        <p class="project_page"><a href="http://www2.warwick.ac.uk/fac/arts/modernlanguages/research/hispanic/hispanicliverpool/" target="_blank">Project Page</a></p>
        <p class="contact"><a href="/contact">Contact Us</a></p>
      </div>
    </div>
    <section class="search-contrib clearfix">
      <div class="sc-bar clearfix">
	    <form class="searchbar" name="search-form" action="/search" method="get">
        <input type="search" placeholder="Search the Collection">
        <input type="hidden" name="query" id="query" value title="Search">
        <input type="hidden" name="query_type" value="keyword"	id="query_type">
        <input type="hidden" name="record_types[]" value="Item" id="record_types">
        <input type="hidden" name="record_types[]" value="File"	id="record_types">
        <input type="hidden" name="record_types[]" value="Collection" id="record_types">
	    </form>
        <p class="about-collection"><a href="/about">About the Collection</a></p>
        <p class="how-contribute"><a href="/contribute">How to Contribute</a></p>
        <button onclick="window.location.href='/contribution'">Contribute an Item</button>
      </div>
    </section>
  </header>
<!--- End of Header -->
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>