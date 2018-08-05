<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- Hero section -->
<div class="jumbotron jumbotron-fluid" style="background-image:url('<?php the_field("hero_image"); ?>'); background-position:top center; background-size:cover;">
  <div class="container mt-5 mb-5 pt-5 pb-5">
    <h1 class="display-4"><?php the_field('hero_title'); ?></h1>
    <p class="lead"><?php the_field('hero_lead'); ?></p>
  </div>
</div>

<!-- Link section -->
<div class="container products mt-5">
  <div class="row">
    <div class="col-md-4">
      <a href="<?php the_field('column_one_link'); ?>">
        <div class="card">
          <img src="<?php the_field('column_one_image'); ?>" alt="<?php the_field('column_one_label'); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php the_field('column_one_label'); ?></h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php the_field('column_two_link'); ?>">
        <div class="card">
          <img src="<?php the_field('column_two_image'); ?>" alt="<?php the_field('column_two_label'); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php the_field('column_two_label'); ?></h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php the_field('column_three_link'); ?>">
        <div class="card">
          <img src="<?php the_field('column_three_image'); ?>" alt="<?php the_field('column_three_label'); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php the_field('column_three_label'); ?></h5>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- About Us -->
<div class="container">
  <div class="about-text row mt-5 pt-5">
    <div class="col-md-8">
      <h4><?php the_field('block_title'); ?></h4>
      <?php the_field('block_text'); ?>
    </div>
    <div class="col-md-4">
      <img src="<?php the_field('block_image'); ?>" alt="<?php the_field('block_image_alt_text'); ?>" />
    </div>
  </div>

<!-- Latest Blog Posts -->
<div class="mt-5 pt-5 mb-5 pb-5">
  <h4>Check out some of our latest blog posts!</h4>
  <div class="post-slider row">
  <?php
	$args = array( 'numberposts' => '6' );
	$recent_posts = wp_get_recent_posts( $args );
  foreach( $recent_posts as $recent ){
  
    echo '<div class="col-md-4"><a href="' . get_permalink($recent["ID"]) . '"><div class="card"><div class="card-img">' . get_the_post_thumbnail($recent['ID'],'large') . '</div><div class="card-body"><h5 class="card-title">' .  $recent["post_title"] . '</h5></div></div></a></div>';
    }
    wp_reset_query();
    ?>
  </div>
</div>

<?php get_footer(); ?>
<script>
  jQuery(document).ready(function($){
    $('.post-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrow:true
    });
  });
</script>