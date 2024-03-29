<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">

<h2><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('title'); ?></a></h2>
<p><?php echo get_bloginfo('description'); ?></p>
 <div class="header-search">
			<?php get_search_form(); ?>
 </div>
<nav class="navbar navbar-default" role="navigation">
  <!-- Mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
 
  <!-- Collect the nav links for toggling -->
  <?php // Loading WordPress Custom Menu
     wp_nav_menu( array(
        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
        'menu_class'      => 'nav navbar-nav',
        'menu_id'         => 'main-menu',
        //'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
    ) );
  ?>
</nav>