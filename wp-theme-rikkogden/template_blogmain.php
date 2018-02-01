<?php /* Template Name: CustomPageT1 */ ?>

<?php get_header("blog"); ?>

<div class="hero">
<img src="<?php echo get_bloginfo( 'wpurl' );?>/assets/images/bkg-phoneregular.jpg" class="hero__image hero__image--scale-pan" alt="hero image">
<div class="grid hero__content heading-group heading-group--white">
  <h1 class="heading-group__title hero-content"><?php the_title(); ?></h1>
  <hr class="hr">
  <h2 class="heading-group__subtitle">Websites, front end development & web graphics</h2>
</div>
</div>

<main>


<article class="page-section page-section--mgn-v-offset">
<div class="grid">
<section class="row row--gutters-xl  row--equal-heights">
  <?php $my_query = new WP_Query( 'posts_per_page=2' );
  while ( $my_query->have_posts() ) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
  <div class="col col--sm__6 col--md__6">
    <div class="ad ad--shadow ad--hover-animation feature-item">
      <div class="ad__image-wrapper">
        <div class="ad__image ad__image--websites"></div>
          <div class="ad__image-content ad__image-text heading-group heading-group--white heading-group--md">
            <h2 class="heading-group__title"> <?php the_title(); ?></h2>
            <hr class="hr">
            <h3 class="heading-group__subtitle"><?php echo get_the_date(); ?> by <?php the_author(); ?></h3>
              <p class="hide-md"><a class="button button--brand-1  button--open-websites">Find Out More <i class="ficon ficon-chevron-right" aria-hidden="true"></i></a></p>
          </div>
      </div>
      <div class="ad__content hide-sm">
        <p><?php the_excerpt(); ?></p>
          <hr class="hr hr--dark">
        <p class="ad__button-wrapper ad__button-wrapper--center hide-sm"><a class="button  button--open-websites">Read Full Post</a></p>
      </div>
    </div>
  </div>

<?php endwhile; ?>
</section>
</div>
</article>

<div class="page-section page-section--brand-3">
<div class="grid">
<section class="row row--gutters-xl">
<div class="col">
  <div class="heading-group">
    <h2 class="heading-group__title">Older Posts</h2>
    <hr class="hr">
    <h3 class="heading-group__subtitle">Check out my other posts and articles</h3>
  </div>
</div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  if ( $post->ID == $do_not_duplicate ) continue;?>
    <div class="col col--md__4 centered">
      <div class="heading-group heading-group--md">
        <h2 class="heading-group__title"><?php the_title(); ?></h2>
        <hr class="hr">
        <h3 class="heading-group__subtitle"><?php the_date(); ?> by <?php the_author(); ?></h3>
      </div>
    </div>
    <p><?php the_excerpt(); ?></p>
  <?php endwhile; endif; ?>

</section>
</div>
</div>




</main>

<?php get_footer(); ?>
</body>
</html>
