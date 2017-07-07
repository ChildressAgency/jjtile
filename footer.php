<footer>
  <div id="darkBar">
    <div class="container">
      <div class="row">
        <div class="col-cs-12 col-md-3">
          <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" alt=" Logo" class="logo-img"></a>
        </div>

        <div class="col-cs-12 col-md-3 ">
          <div class="footerSocials">
            <a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><div class="twitter"></div></a>
            <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><div class="instagram"></div></a>
            <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><div class="linkedIn"></div></a>
            <a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><div class="facebook"></div></a>
          </div>
        </div>
        <div class="col-cs-12 col-md-5 col-md-offset-1 footerInfo">
          <div class="col-xs-6">
            <h4>FREDERICKSBURG LOCATION</h4>
            <a href="tel:54071003003">540-710-0303</a>
          </div>
          <div class="col-xs-6 footerHours">
            <h3>MON - WED: 8A-6P</h3>
            <h3>THUR - FRI: 8A-7P</h3>
            <h3>SAT:8A-5P</h3>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- darkBar -->

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 footerLeft">
        <p>
          Proudly Providing the Best Quality Brands od Italian Tile<br />
          Alfa, Arce, Azulev, Ceramica, Ceramiche, Ceridisa, Dal Tile, Edigres, Edilcoughi, EGE, Fondowalle, Piemme, Edilcoughi, Lodestan, Everstone,
          Mohawk, Piemmegres, Ragna, Regin, Prospera, Sassolnova, Sichenia, Traverlino, Tesora, TDF, Termal, Unicorn, Vilagres, American
          Clean, Laufen, Marazzi, Bayker
        </p>
        <p>
        Serving local and surrounding counties of:<br />
        Stafford, Spotsylvania, King George, Caroline, Fredericksburg, Ashland, Richmond, Hanover, Orange, Culpeper, Louden, Fauquier, Fairfax,
        Springfield, Annadale, Prince William, Woodbridge, Alexandria, Manassas, Warrenton, Arlington, Washington DC
      </p>
      </div>
      <div class="col-xs-12 col-sm-6 footerRight">
        <h2>NAVIGATION</h2>
        <nav class="footer-nav">
          <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
        </nav>
      </div>
      <div class="col-xs-12 footerBottom">
        <p>VIRGINIA BETTER BUSINESS BUREAU MEMBER<P>
        <p>
          &copy; <?php echo date('Y'); ?><?php bloginfo('name'); ?>ALL RIGHTS RESERVERED. -WEBSITE CREATED BY

          <a href="#" target="_blank">THE CHILDRESS AGENCY</a>
        </p>
      </div>
  </div><!-- row -->
</div><!-- container -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</footer>

</div> <!-- close main container -->
</body>
</html>
