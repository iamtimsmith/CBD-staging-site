<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Tincture</h1>
    <p class="lead">Started by a group of individuals passionate about the power of CBD, Medterra believes CBD should be available to all those in need at an affordable price. Working directly with their farm in Kentucky, Medterra provides a variety of CBD products that are certified THC Free</p>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <a href="/">
        <div class="card">
          <img src="https://placeimg.com/300/200" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Topical</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="/">
        <div class="card">
          <img src="https://placeimg.com/300/200" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Capsule</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="/">
        <div class="card">
          <img src="https://placeimg.com/300/200" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Tincture</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container">
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
          <div class="mt-5 pt-5">
            <?php the_content(); ?>
          </div>
      <?php endwhile; ?>
  <?php endif; ?>

<div class="mt-5 pt-5">
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