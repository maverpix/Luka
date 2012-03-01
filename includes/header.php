<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

	<head>
                <link href='http://fonts.googleapis.com/css?family=Exo:500,600,700,800,900' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">             
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/main.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
		<script>window.jQuery || document.write("<script src='/assets/js/jquery-1.7.1.min.js'>\x3C/script>")</script>
        
		<script>var base = '<?php echo theme_url(); ?>';</script>
        
		<script src="<?php echo theme_url('/assets/js/main.js'); ?>"></script>
		<script src="<?php echo theme_url('/assets/js/foundation.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
    
    <!-- container -->
	<div class="container">
	
		<!--Ends Header-->