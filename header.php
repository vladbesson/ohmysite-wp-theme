<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ohmysite
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>HTML Starter Kit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

	<script src="https://use.fontawesome.com/e76d8ae019.js"></script>

	<?php wp_head(); ?>

</head>
<body>
<header class="page-header">
	<div class="page-header__wrapper clearfix">
		<div class="page-header__logo">
			<a href="/">OhMySite</a>
		</div>

		<div class="page-header__nav-toggle">
			<div id="toggle">
				<input type="checkbox">
				<span></span>
			</div>
		</div>

		<div class="page-header__nav">
			<div class="page-header__menu">
				<div class="menu">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'menu__list',
					) );
					?>
				</div>
			</div>

			<div class="page-header__lang">
				<ul>
					<li><a href="/">EN</a></li>
					<li><a href="/">RU</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
