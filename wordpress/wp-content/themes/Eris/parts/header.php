<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"  xmlns="http://www.w3.org/1999/xhtml" xmlns:shc="http://www.sears.com" <?php language_attributes(); ?> > <!--<![endif]-->
	<head>
  	
  	
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
    
    <?php wp_head(); ?>
      
  </head>

	<body <?php body_class(); ?>> 
		<?php get_template_part('parts/ribbon'); ?>
		
        
        <!-- SHC Header from SHC Header-Footer Plugin -->
        <div id="shc_header">
            <?php do_action('content-top'); ?>
        </div>
        
        <!-- #page-wrapper -->
        <div id="page_wrapper">

            <div id="wp_header">
                <a href="<?php echo site_url(''); ?>" id="logo"></a>
                <?php wp_nav_menu( array( 'theme_location' => 'main-navigation', 'menu_id' => 'main-nav') ); ?>
            </div>
            
            <nav>
                <ul id="header_nav" class="clearfix">
                  <li class="right_button">
                    <a href="#">Customer Care</a>
                  </li>
                  <?php
                    $a_navigation = array(
                      "Categories", "Q&A's", "Blog", "Buying Guides"
                    );                  
                  ?>
                  <?php foreach ( $a_navigation as $nav_item ): ?>
                  <li>
                    <a href="#"><span><?php echo htmlentities( $nav_item ); ?></span></a>
                    <ul>
                      <li><a href="#">Item 1</a></li>
                      <li><a href="#">Item 2</a></li>
                      <li><a href="#">Item 3</a></li>
                      <?php if ($nav_item != "Categories"): ?>
                        <li><a href="#">All <?php echo htmlentities( $nav_item ); ?><?php if ( $nav_item == "Blog" ) { echo " Posts"; } ?></a></li>
                      <?php endif; ?>
                    </ul>
                  </li>
                  <?php endforeach; ?>
                </ul>
            </nav>
            
            <!-- #page -->
            <div id="page">
                
                <?php //do_action('content-before'); ?>
                
                <div id="subheader">
                    <?php /* Subheaders */ ?>
                </div>
                
                <!-- #content -->
                <div id="content">