<!DOCTYPE html>
<html lang="hu-HU" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <!-- JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/respond.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/html5shiv.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>

    <!-- wp_head(); -->
    <?php wp_head(); ?>

    <!-- SEO -->
    <meta name="author" content="Tasnádi Márton (kistasi)">
    <meta name="description" content="Tasnádi Márton személyes és tech blogoldala.">
    <meta name="keywords" content="énblog, lélek, drupal, wordpress, linux, opensuse, ubuntu, debian, fedora, windows, mac, osx, waldorf, thinkpad, tasi, kistasi, tasnádi márton, weboldal készítés, unix, unix-like, webmester, webfejlesztés, webfejlesztő">
    <meta property="og:copyright" content="kistasiblog (c) 2010-2014">
    <meta property="og:title" content="kistasiblog">
    <meta property="og:type" content="blog">
    <meta property="og:url" content="http://team4world.hu/">
    <meta property="og:email" content="marton.tasnadi@gmail.com">
  </head>
  <body <?php body_class(); ?>>
    <header id="blog-header">
      
    </header>
    <div id="wrapper">
