<?php /* Template Name: Review List */ ?>
<?php get_header(); ?>
<div class="container mt-5 mb-5">
  <h1><?= the_title(); ?></h1>

  
  <!-- Review #1 -->
  <?php if (get_field('review_1_title')) : ?>
  <div class="row border-bottom review-1 pt-5 pb-4">
    <div class="col-md-4">
      <img src="<?php the_field('review_1_image'); ?>" alt="<?php the_field('review_1_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('review_1_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('review_1_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'review_1_table' );
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

    <p><?php the_field('review_1_text'); ?></p>
    <p class="button-row">
      <a href="<?php the_field('review_1_link_to_review'); ?>" class="btn btn-primary btn-large">View Full Review</a>
      <a href="<?php the_field('review_1_link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <?php endif; ?>

  <!-- Review #2 -->
  <?php if (get_field('review_2_title')) : ?>
  <div class="row border-bottom review-2 pt-5">
    <div class="col-md-4">
      <img src="<?php the_field('review_2_image'); ?>" alt="<?php the_field('review_2_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('review_2_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('review_2_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'review_2_table' );
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

    <p><?php the_field('review_2_text'); ?></p>
    <p class="button-row">
      <a href="<?php the_field('review_2_link_to_review'); ?>" class="btn btn-primary btn-large">View Full Review</a>
      <a href="<?php the_field('review_2_link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <?php endif; ?>


  <!-- Review #3 -->
  <?php if (get_field('review_3_title')) : ?>
  <div class="row border-bottom review-3 pt-5">
    <div class="col-md-4">
      <img src="<?php the_field('review_3_image'); ?>" alt="<?php the_field('review_3_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('review_3_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('review_3_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'review_3_table' );
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

    <p><?php the_field('review_3_text'); ?></p>
    <p class="button-row">
      <a href="<?php the_field('review_3_link_to_review'); ?>" class="btn btn-primary btn-large">View Full Review</a>
      <a href="<?php the_field('review_3_link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <?php endif; ?>


  <!-- Review #4 -->
  <?php if (get_field('review_4_title')) : ?>
  <div class="row border-bottom review-4 pt-5">
    <div class="col-md-4">
      <img src="<?php the_field('review_4_image'); ?>" alt="<?php the_field('review_4_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('review_4_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('review_4_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'review_4_table' );
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

    <p><?php the_field('review_4_text'); ?></p>
    <p class="button-row">
      <a href="<?php the_field('review_4_link_to_review'); ?>" class="btn btn-primary btn-large">View Full Review</a>
      <a href="<?php the_field('review_4_link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <?php endif; ?>


  <!-- Review #5 -->
  <?php if (get_field('review_5_title')) : ?>
  <div class="row border-bottom review-5 pt-5">
    <div class="col-md-4">
      <img src="<?php the_field('review_5_image'); ?>" alt="<?php the_field('review_5_title'); ?>">
    </div><!-- .col-md-4 -->
    <div class="col-md-8">
      <div class="review-top">
        <span class="h4">CBD <?php the_field('product_type'); ?></span>
        <span class="h4">Price / Value: <?php the_field('review_5_value'); ?></span>
        <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>
        <span class="h4"><?php the_field('review_5_origin'); ?></span>
      </div>
      <?php
      $table = get_field( 'review_5_table' );
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

    <p><?php the_field('review_5_text'); ?></p>
    <p class="button-row">
      <a href="<?php the_field('review_5_link_to_review'); ?>" class="btn btn-primary btn-large">View Full Review</a>
      <a href="<?php the_field('review_5_link_to_product'); ?>" class="btn btn-primary btn-large">View Site</a>
    </p>
    </div><!-- .col-md-8 -->
  </div><!-- .row -->
  <?php endif; ?>




</div>

<script>
  var getRating = function(rating, selector) {
    var starTotal = 5;
    var starPercentage = (rating / starTotal) * 100;
    var starPercentageRounded = (Math.round(starPercentage / 10) * 10) + "%";
    document.querySelector(selector + " .stars-inner").style.width = starPercentageRounded; 
  }

  <?php if (get_field('review_1_title')) : ?>
    getRating(<?php the_field('review_1_rating'); ?>, ".review-1");
  <?php endif; ?>
  <?php if (get_field('review_2_title')) : ?>
    getRating(<?php the_field('review_2_rating'); ?>, ".review-2");
  <?php endif; ?>
  <?php if (get_field('review_3_title')) : ?>
    getRating(<?php the_field('review_3_rating'); ?>, ".review-3");
  <?php endif; ?>
  <?php if (get_field('review_4_title')) : ?>
    getRating(<?php the_field('review_4_rating'); ?>, ".review-4");
  <?php endif; ?>
  <?php if (get_field('review_5_title')) : ?>
    getRating(<?php the_field('review_5_rating'); ?>, ".review-5");
  <?php endif; ?>
</script>
<?php get_footer(); ?>