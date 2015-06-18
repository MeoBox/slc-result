<!DOCTYPE HTML>
<html>
  <head>
    <title>Landed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie8.css" /><![endif]-->
  </head>
  <body class="landing">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header">
          <h1 id="logo"><a href="http://slcresult.com">SLC Results</a></h1>
          <nav id="nav">

          <?php wp_nav_menu(array('theme_location' => "primary", )); ?>
          <!--   <ul>
              <li><a href="index.html">Home</a></li>
              <li>
                <a href="#">Layouts</a>
                <ul>
                  <li><a href="left-sidebar.html">Left Sidebar</a></li>
                  <li><a href="right-sidebar.html">Right Sidebar</a></li>
                  <li><a href="no-sidebar.html">No Sidebar</a></li>
                  <li>
                    <a href="#">Submenu</a>
                    <ul>
                      <li><a href="#">Option 1</a></li>
                      <li><a href="#">Option 2</a></li>
                      <li><a href="#">Option 3</a></li>
                      <li><a href="#">Option 4</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="elements.html">Elements</a></li>
              <li><a href="#" class="button special">Sign Up</a></li>
            </ul> -->
          </nav>
        </header>