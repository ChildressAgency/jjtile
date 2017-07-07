<?php get_header(); ?><div id="main-container" ><section id="virtualDesigner">
  <div class="row">
    <div class="virtualDesignerContainer" >
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="kitchen">
          <div class="col-xs-12 col-md-8 col-md-push-4 designerBlock kitchenBlock">
            <div id="tileBackground"  class="tileBackground" style="background-image: url(
            <?php
            $rows = get_field('tile_patterns','options' );
            $first_row = $rows[0];
            $first_row_image = $first_row['kitchen_tile_pattern_image' ];
            ?>
            <?php echo $first_row_image; ?>
            ); background-color: <?php
            $rows = get_field('traditional_grout','options' );
            $first_row = $rows[0];
            $first_row_color = $first_row['traditional_grout_color_#' ];
            ?>
            <?php echo $first_row_color; ?>;">
              <div class="virtualDesignerBackground kitchenBackground" >
              </div>
          </div>
        </div><!-- designerBlock -->
      </div><!-- tabpanel -->
      <div role="tabpanel" class="tab-pane"  id="bath">
        <div class="col-xs-12 col-md-8 col-md-push-4 designerBlock bathroomBlock">
          <div id="tileBackground-2"  class="tileBackground" style="background-image: url(
          <?php
          $rows = get_field('tile_patterns','options' );
          $first_row = $rows[0];
          $first_row_image = $first_row['bathroom_tile_pattern_image' ];
          ?>
          <?php echo $first_row_image; ?>
          ); background-color: <?php
          $rows = get_field('traditional_grout','options' );
          $first_row = $rows[0];
          $first_row_color = $first_row['traditional_grout_color_#' ];
          ?>
          <?php echo $first_row_color; ?>;">
            <div class="virtualDesignerBackground bathroomBackground" >
            </div>
        </div>
      </div><!-- tabpanel -->
    </div><!-- tab-content -->
      <div class="col-xs-12 col-md-4 col-md-pull-8 virtualDesignerControls">
        <h3>ROOM</h3>
        <div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="roomSelector" role="presentation">
                <a href="#kitchen" aria-controls="kitchen" role="tab" data-toggle="tab">Kitchen</a>
           </li>
            <li class="roomSelector" role="presentation" class="active">
                <a href="#bath" aria-controls="bath" role="tab" data-toggle="tab">Bath</a>
            </li>
          </ul>

        </div>
        <div class="clearfix"></div>
        <h3>TILE COLOR</h3>
        <select id="backgrounds"  class="form-control">
          <?php if( have_rows('tile_patterns', 'options') ): ?>
            <?php while( have_rows('tile_patterns', 'options') ): the_row(); ?>
            <option data-kitchen-tile-image="<?php the_sub_field('kitchen_tile_pattern_image'); ?>" data-bathroom-tile-image="<?php the_sub_field('bathroom_tile_pattern_image'); ?>">
            <?php  the_sub_field('kitchen_tile_pattern_name'); ?>
            </option>
            <?php endwhile; ?>
            <?php endif; ?>
        </select>
        <h3>Grout Color</h3>
        <h4>TRADITIONAL &amp; <br />CLASSIC COLORS</h4>
          <?php if( have_rows('traditional_grout', 'options') ): ?>
            <ul>
            <?php while( have_rows('traditional_grout', 'options') ): the_row(); ?>
              <li><div data-grout-color="<?php the_sub_field('traditional_grout_color_#'); ?>" class="colorBox" style= "background-color:<?php  the_sub_field('traditional_grout_color_#'); ?> ;"></div>
            <p><?php  the_sub_field('traditional_grout_name'); ?></p></li>
            <?php endwhile; ?>
          </ul>
            <?php endif; ?>
            <div class="clearfix"></div>
        <h4>DESIGNER COLORS</h4>
        <?php if( have_rows('designer_grout', 'options') ): ?>
          <ul>
          <?php while( have_rows('designer_grout', 'options') ): the_row(); ?>
            <li><div data-grout-color="<?php the_sub_field('designer_grout_#'); ?>" class="colorBox" style= "background-color:<?php  the_sub_field('designer_grout_#'); ?> ;"></div>
          <p><?php  the_sub_field('designer_grout_name'); ?></p></li>
          <?php endwhile; ?>
        </ul>
          <?php endif; ?>
      </div><!-- virtualDesignerControls -->
    </div><!-- virtualDesignerContainer -->
  </div><!-- row -->
</section><!-- virtualDesigner -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <?php echo do_shortcode('[contact-form-7 id="30" title="Contact form 1"]'); ?>
      </div>
      <div class="col-xs-12 col-md-4 ">
        <div class="facebookPlugin">
          <div class="fb-page" data-href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/">J&amp;J Tile &amp; Marble Inc</a></blockquote></div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4 contactInfo">
        <ul>
          <li><a href="#"><span class="mailIcon"></span><span>jjtile123@verizon.net</span></a></li>
          <li><a href="tel:5407100303"><span class="phoneIcon"></span><span>540.710.0303 Phone</span></a><br />
          <a href="tel:5407100303"><span>540.7100377 Fax</span></a></li>
          <li><a href="https://www.google.com/maps/place/J+%26+J+Tile+%26+Marble+Inc/@38.261711,-77.5002987,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c113c4d9eed3:0x8dbc2edcfe751c71!8m2!3d38.261711!4d-77.49811" target="_blank"><span class="mapIcon"></span><span>4763 Jefferson Hwy<br /> Fredericksburg VA 22408</span></a></li>
          <li><a href="#"><span class="shopIcon"></span><span>Monday - Friday: 8am - 6pm<br />Saturdays: 8am - 5pm<br />Sundays: Closed</span></a></li>
        </ul>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section>
<?php get_footer(); ?>
