<footer>
  <div id="darkBar">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="footer-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-new.png" alt=" Logo" class="logo-img"></a>
        </div>

        <div class="col-sm-5 col-md-4">
          <div class="footerSocials">
            <a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" class="twitter"></a>
            <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" class="instagram"></a>
            <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank" class="linkedIn"></a>
            <a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" class="facebook"></a>
          </div>
        </div>
        <div class="col-sm-7 col-md-5 footerInfo">
          <div class="row">
            <div class="col-sm-7">
              <h4>FREDERICKSBURG LOCATION</h4>
              <a href="tel:54071003003">540-710-0303</a>
            </div>
            <div class="col-sm-5 footerHours">
              <p>MON - WED: 8A-6P</p>
              <p>THUR - FRI: 8A-7P</p>
              <p>SAT:8A-5P</p>
            </div>
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
          <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => '', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
        </nav>
      </div>
      <div class="col-xs-12 footerBottom">
        <p>VIRGINIA BETTER BUSINESS BUREAU MEMBER<P>
        <p>
          &copy;<?php echo date('Y'); ?><?php bloginfo('name'); ?> ALL RIGHTS RESERVED. -WEBSITE CREATED BY

          <a href="https://childressagency.com" target="_blank">THE CHILDRESS AGENCY</a>
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
