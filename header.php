<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

		<!-- Meta Tags -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>

		<!-- Scripts -->
		<script type="text/javascript" src="<?php print JS; ?>/js/creative+_js.js"></script>

		<!-- Fonts -->
		<link rel="stylesheet" href="<?php print FONTS; ?>/fonts/Helvetica/Helvetica.css" />
<?php wp_head(); ?>
	</head>

	<body>	
		<div class="header">
			<a name="top" href="#" id="bt"></a>
			<div class="header-top">
				<div class="logo">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>

				<nav class="menu">
					<?php wp_nav_menu(array(
                     'theme-location' => 'main-menu'
					)); ?>
				</nav>
				<div class="search-box">
	                <?php get_search_form(); ?>
				</div>
			</div>
		</div>