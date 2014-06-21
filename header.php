<!DOCTYPE html>
<html <?php language_attributies; ?> xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

    <script type="text/javascript" src="/js/jquery.jsj"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      
    </header>
