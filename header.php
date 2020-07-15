<?php
/**
 * Header file for the Mayor
 * package WordPress
 * @subpackage Mayor
 * @since Mayor 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

    <!-- plugin scripts -->

    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900%7CLibre+Baskerville:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/potisen-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
    <div class="page-wrapper">
        
        <header class="site-header site-header__header-one ">
             <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="<?php echo site_url(''); ?>">
                           <?php echo get_bloginfo( 'name' ); ?>
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <?php     if ( $menu_items = wp_get_nav_menu_items(3) ) {
   
   // Loop over menu items
   foreach ( $menu_items as $menu_item ) {

      // Compare menu object with current page menu object
      
           $current = ( $menu_item->object_id == get_queried_object_id() ) ? 'current' : '';
      
    
      
      
      // Print menu item
      echo '<li class="' . $current . '"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
   }
} ?>
						<!--	<li class="current">
                                <a href="<?php echo site_url(''); ?>">Home</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo site_url('about'); ?>">About</a>
                               
                            </li>
                           
                             <li>
                                <a href="<?php echo site_url('media'); ?>">Media</a>
                               
                            </li>

                            <li>
                                <a href="<?php echo site_url('visionandmission'); ?>">Vision & Mission</a>
                              
                            </li>
                            <li>
                                <a href="<?php echo site_url('contact'); ?>">Contact</a>
                            </li> -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                <!-- <div class="right-side-box">
                        <div class="header-social">
                            <a href="<?php echo get_field('face_book_url',7); ?>" target="_blank"  class="fa fa-facebook-square"></a>
                            <a href="<?php echo get_field('twitter_url',7); ?>" target="_blank" class="fa fa-twitter"></a>                        
                            <a href="<?php echo get_field('instagram_url',7); ?>" target="_blank" class="fa fa-instagram"></a>
							 <a href="<?php echo get_field('youtube_url',7); ?>" target="_blank" class="fa fa-youtube"></a>
                        </div>
                    </div> -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        
        
    