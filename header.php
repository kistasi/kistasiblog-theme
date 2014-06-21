<!DOCTYPE html>
<html <?php language_attributies; ?> xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="">
		<?php wp_head(); ?>
	</head>