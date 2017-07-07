<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
    <?php wp_head(); ?>

	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=724983870970769";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

    <section id="hp-hero" class="carousel slide" data-ride="carousel">

      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="col-sm-2 navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" alt=" Logo" class="logo-img"></a>
              <div class="col-sm-5 flex">
                <div class="phone">
                  <p>FREDERICKSBURG LOCATION</p>
                  <a href="tel:5407100303">540-710-0303</a>
                </div>
                <div class="hours">
                  <p>
                    MON - WED 8A - 6P<br />
                    THU - FRI 8A - 7P<br />
                    SAT 8A - 5P
                  </p>
                </div>
              </div><!-- flex -->
            </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=" col-sm-5 collapse navbar-collapse">
           <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- row-->
      </div>
      </nav>

      <div class="nav-line"></div>

      <?php if(is_front_page()): ?>



      <div class="carousel-inner" role="listbox">
        <?php
        if( have_rows('home_slider') ):
           $i=1; while ( have_rows('home_slider') ) : the_row(); ?>
            <div class="item <?php if ($i == 1) echo 'active'; ?> ">
              <div id="mainPhoto" style="background-image: url(<?php  the_sub_field('slider_image'); ?>);"></div>
              <div class="caption-wrapper">
                <div class="caption">
                  <h1><?php the_sub_field('slider_title'); ?></h1>
                  <h3><?php the_sub_field('slider_sub-title'); ?></h3>
                </div><!-- caption -->
              </div><!-- caption-wrapper -->
            </div><!-- item -->
            <?php $i++;  endwhile;
            else :
          endif;
          ?>
          <div class="container">
            <div class="row">
              <div class="sliderButtons ">
                <div class="col-xs-6">
                  <div class="left">
                    <a href="<?php echo home_url(); ?>/our-work/" class="btn-main">OUR WORK</a>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="right">
                    <a href="<?php echo home_url(); ?>/virtual-designer/" class="btn-main">VIRTUAL DESIGNER</a>
                  </div>
                </div>
              </div><!-- sliderButtons -->
              <a href="#finance" id="scrollDown">
                <span class="glyphicon glyphicon-menu-down"></span>
              </a>
            </div><!-- row -->
          </div><!-- contaner -->
      </div><!-- carousel-inner -->
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
        <?php else: ?>
        <section id="heroSection">
        <div id="mainPhoto" style="background-image: url(<?php the_field('hero_image'); ?>);">
        <?php if(get_field('hero_title')): ?>
          <h1><?php the_field('hero_title'); ?></h1>
        <?php else: ?>
          <h1><?php echo get_the_title(); ?></h1>
        <?php endif; ?>
        <?php if(get_field('hero_sub-title')): ?>
          <?php the_field('hero_sub-title'); ?>
        <?php else: ?>
          <?php echo get_the_sub-title(); ?>
        <?php endif; ?>
      <?php endif; ?>
      </section><!-- heroSection -->
