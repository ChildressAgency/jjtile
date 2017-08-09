<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>

	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=724983870970769";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="header-logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" alt=" Logo" class="logo-img">
          </a>
          <div class="header-contact-info">
            <div class="phone">
              <p>FREDERICKSBURG LOCATION</p>
              <a href="tel:5407100303">540-710-0303</a>
            </div>
            <div class="hours">
              <p>MON - FRI: 8A - 6P<br />SAT: 8A - 5P<br />SUN: closed</p>
            </div>
          </div><!-- flex -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
          <?php 
          wp_nav_menu( array(
            'menu' => 'Main', 
            'menu_class' => 'nav navbar-nav navbar-right', 
            'depth'=> 3, 
            'container'=> 'div', 
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbar',
            'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </div>
      <div class="nav-line"></div>
    </nav>

    <?php if(is_front_page()): ?>
      <section id="hp-hero" class="carousel slide" data-ride="">
        <div class="carousel-inner" role="listbox">
          <?php if( have_rows('home_slider') ): $i=1; while ( have_rows('home_slider') ) : the_row(); ?>
            <div class="item <?php if ($i == 1) echo 'active'; ?> ">
              <div class="background-wrapper" style="background-image: url(<?php  the_sub_field('slider_image'); ?>); <?php the_sub_field('slider_image_css'); ?>">
                <div class="caption-wrapper">
                  <div class="caption">
                    <h1><?php the_sub_field('slider_title'); ?></h1>
                    <h3><?php the_sub_field('slider_sub-title'); ?></h3>
                    <div class="slider-buttons ">
                      <a href="<?php echo home_url(); ?>/our-work/" class="btn-main">OUR WORK</a>
                      <a href="<?php echo home_url(); ?>/virtual-designer/" class="btn-main">VIRTUAL DESIGNER</a>
                    </div><!-- sliderButtons -->
                  </div><!-- caption -->
                </div><!-- caption-wrapper -->
              </div>
            </div><!-- item -->
          <?php $i++;  endwhile; endif; ?>
        </div>
        
        <a href="#finance" id="scrollDown">
          <span class="glyphicon glyphicon-menu-down"></span>
        </a>

          <!-- Controls -->
        <a class="left carousel-control" href="#hp-hero" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#hp-hero" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </section><!-- hp-hero -->
    <?php elseif(is_page('contact')): ?>
      <section id="heroSection" class="contact-hero">
        <h1>CONTACT US</h1>
      </section>
    <?php else: ?>
      <section id="heroSection" style="background-image: url(<?php the_field('hero_image'); ?>);">
        <?php if(get_field('hero_title')): ?>
          <h1><?php the_field('hero_title'); ?></h1>
        <?php else: ?>
          <h1><?php echo get_the_title(); ?></h1>
        <?php endif; ?>

        <?php if(get_field('hero_sub-title')): ?>
          <?php the_field('hero_sub-title'); ?>
        <?php endif; ?>
      </section><!-- heroSection -->
    <?php endif; ?>
