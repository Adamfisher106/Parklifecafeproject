<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php $site_title = get_bloginfo( 'name' ); ?></title>


  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/carousel.css" rel="stylesheet">

    
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- Bootstrap Scripts -->
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
  <div class="row contact-banner">
      <div class="col-sm-6 col-sm-push-55">
        <p>St.James'Park, St.James'Road, Southampton, SO15 55D - Contact Number: 02390 779763 - Email: xxx@xxx.xxx</p>
      </div>
    </div>
  <div class="row" id="noMargin">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" style="padding-bottom:5px;">
       <div class="nav-logo">   
        <a class="navbar-brand logo-margin" href="/home">

          <img src="<?php echo get_template_directory_uri(); ?>/img/logos/tree.png" alt="park life cafe logo">
        
      <!-- echo a post for header here-->
        </a>
       </div> 
      <div class="navbar-text-mobile">
          <h6>Park Life Community Cafe<br> and Comunity Room</h6>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <div class="navbar-text-nonstrap" style="width:300px;">
        <h5>Park Life Community Cafe and Comunity Room</h5>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/community-room">Community Room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>