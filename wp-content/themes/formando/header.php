<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/main.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/owl.carousel.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<header class="Header <?php if (is_front_page()) echo 'Header-index' ?>">
    
</header>


<main>
