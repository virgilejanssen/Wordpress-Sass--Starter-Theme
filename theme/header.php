<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	
	<title><?php wp_title( '|', true, 'left' ); ?></title>
	
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>	
		<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>

	</header>