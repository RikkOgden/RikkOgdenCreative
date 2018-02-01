<?php get_header("blog"); ?>

<div class="hero">
<img src="<?php echo get_bloginfo( 'wpurl' );?>/assets/images/bkg-phoneregular.jpg" class="hero__image " alt="hero image">
<div class="grid hero__content heading-group heading-group--white">
  <h1 class="heading-group__title hero-content">My Blog</h1>
  <hr class="hr">
  <h2 class="heading-group__subtitle">There's more interesting reads on the interwebs, but welcome anyway</h2>
</div>
</div>

<main>




<article class="page-section page-section--mgn-v-offset" id="featured">
<div class="grid">
<section class="row row--gutters-xl row--equal-heights">


  <?php $my_query = new WP_Query( 'posts_per_page=3' );
  while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
  <div class="col col--md__6">
    <div class="ad ad--shadow ad--hover-animation feature-item">
      <div class="ad__image-wrapper">
        <div class="ad__image ad__image--websites"><?php the_post_thumbnail(); ?></div>
          <div class="ad__image-content ad__image-text heading-group heading-group--white heading-group--md">
            <h2 class="heading-group__title"> <?php the_title(); ?></h2>
            <hr class="hr">
            <h3 class="heading-group__subtitle"><?php echo get_the_date(); ?></h3>
              <p class="hide-md"><a class="button button--brand-1  button--open-websites">Find Out More <i class="ficon ficon-chevron-right" aria-hidden="true"></i></a></p>
          </div>
      </div>
      <div class="ad__content hide-sm">
        <p><?php the_excerpt(); ?></p>
          <hr class="hr hr--dark">
        <p class="ad__button-wrapper ad__button-wrapper--center hide-sm"><a class="button" href="<?php the_permalink(); ?>">Read Full Post</a></p>
      </div>
    </div>
  </div>

<?php endwhile; ?>
</section>
</div>
</article>

<div class="page-section page-section--brand-3" id="allposts">
<div class="grid">
<section class="row row--gutters-xl">
<div class="col">
  <div class="heading-group">
    <h2 class="heading-group__title">Older Posts</h2>
    <hr class="hr">
    <h3 class="heading-group__subtitle">Check out my other posts and articles</h3>
  </div>
</div>
<?php $my_query2 = new WP_Query( 'offset=3' );
while ( $my_query2->have_posts() ) : $my_query2->the_post(); ?>
    <div class="col">
      <div class="heading-group heading-group--md">
        <h2 class="heading-group__title"><?php the_title(); ?></h2>
        <hr class="hr hr--dark">
        <h3 class="heading-group__subtitle"><?php echo get_the_date(); ?></h3>
      </div>
      <p><?php the_excerpt(); ?></p>
    </div>
  <?php endwhile; ?>

</section>
</div>
</div>




</main>

<?php get_footer(); ?>
</body>
</html>
