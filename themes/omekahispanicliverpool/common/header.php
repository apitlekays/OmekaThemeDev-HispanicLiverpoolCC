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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
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
	    <form class="searchbar" name="search-form">
		<a href="/items/browse?search=" id="baseUrl"><i class="fa fa-search fa-2x fa-inverse"></i></a>
        <input type="text" placeholder="Enter a search term and press the search icon" id="appendUrl">
	    </form>
        <p class="about-collection"><a href="/about">About the Collection</a></p>
        <p class="how-contribute"><a href="/contribute">How to Contribute</a></p>
        <button onclick="window.location.href='/contribution'">Contribute an Item</button>
      </div>
    </section>
  </header>
<!--- End of Header -->
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>