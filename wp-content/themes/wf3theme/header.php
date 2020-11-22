<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php bloginfo('name') ?></title>

    <!-- Style Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/blog/blog.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- <link rel='stylesheet' href='<?php get_bloginfo('template_url') ?>/style.css'> -->
</head>

<body>
    <div class="container-fluid">
        <header class="blog-header text-center py-3">
            <a class="blog-header-logo text-dark" href="<? bloginfo('wpurl'); ?>">
                <?php bloginfo('name') ?>
            </a>
            <p><small><?php bloginfo('description') ?></small></p>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav>
                <?php wp_nav_menu(); ?>
            </nav>
        </div>