<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  
  <?php // Load Fonts ?>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Raleway:700,100' rel='stylesheet' type='text/css'>

  <?php //Load Font Awesome ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php //Load Viewport Tag ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="row">
    <nav class="main">
      <a href="#" class="navIcon"><i class="fa fa-bars navIcon"></i></a>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </nav>
  <div class="container">
    
    <h1 class="blogTitle">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

  </div> <!-- /.container -->
</header><!--/.header-->

