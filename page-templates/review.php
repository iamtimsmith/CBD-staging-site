<?php /* Template Name: Review Page */ ?>
<?php get_header(); ?>

<div class="container">
  <!-- Review -->
  <div class="row border-bottom review pt-5">
    <div class="col-md-4">
      <img src="<?php the_field('product_image'); ?>" alt="<?php the_field('product_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('product_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('product_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'product_table' );
      if ( $table ) { ?>
        <table class="table">
        <?php if ( $table['header'] ) { ?>
          <thead>
            <tr>
              <?php foreach ( $table['header'] as $th ) { ?>
                <th>
                  <?php echo $th['c']; ?>
                </th>
              <?php  } ?>
            </tr>
          </thead>
        <?php } ?>
        <tbody>
          <?php foreach ( $table['body'] as $tr ) { ?>
            <tr>
              <?php foreach ( $tr as $td ) { ?>
                <td>
                  <?php echo $td['c']; ?>
                </td>
              <?php } ?>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } ?>

    <p class="button-row">
      <a href="<?php the_field('link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <div class="row">
    <div class="col-md-12">
      <p><?php the_field('product_text'); ?></p>
    </div>
  </div>
</div>

<script>
  var getRating = function(rating, selector) {
    var starTotal = 5;
    var starPercentage = (rating / starTotal) * 100;
    var starPercentageRounded = (Math.round(starPercentage / 10) * 10) + "%";
    document.querySelector(selector + " .stars-inner").style.width = starPercentageRounded; 
  }
  getRating(<?php the_field('product_rating'); ?>, ".review");
</script>

<?php get_footer(); ?>