<!DOCTYPE html>
<html lang="hu-HU">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/respond.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/html5shiv.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/analytics.js"></script>

    <meta name="author" content="Tasnádi Márton (kistasi) 2010-2014">
    <meta property="og:title" content="kistasiblog">
    <meta property="og:description" content="Tasnádi Márton személyes és tech blogoldala.">
    <meta property="og:url" content="http://team4world.hu/">
    <meta property="og:type" content="blog">
    <meta property="og:locale" content="hu-HU">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header id="blog-header">
      <h1 id="blog-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <span id="blog-tagline"><?php bloginfo('description'); ?></span>
    </header>
    <nav id="navigation">
        <ul>
            <li><a href="<?php bloginfo('url'); ?>">Blog</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?cat=61">Tech</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?cat=70">Fotó</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page-id=21">Archívum</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page-id=5">Rólam</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page-id=456">Kapcsolat</a></li>
        </ul>
    </nav>
    <main id="wrapper">
