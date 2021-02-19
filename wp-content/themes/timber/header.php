<!DOCTYPE html>
<html lang="en">
 <?php wp_head(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php bloginfo('description');?>/</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/magnific-popup.css">-->
<!--    <link rel="stylesheet" href="css/normalize.css">-->
<!--    <link rel="stylesheet" href="css/style.css">-->       
</head>

<body>
    <header class="header" style="background-image: url(<?php the_field('header')?>);">
         <?php wp_head(); ?>
            <div class="header_inner">
            <img src="<?php bloginfo('template_url');?>/assets/img/home.png" alt="">
            <div class="header_name"> <?the_field('header_name')?> </div>
            <a class="phone" href="tel:+<?the_field('phone')?>"><?the_field('phone')?></a>
            <div class="header_tittle"><?the_field('header_tittle')?></div>
            <img class="header_sale" src="<?php the_field('header_sale')?>" alt="">
        </div>
        
    </header>