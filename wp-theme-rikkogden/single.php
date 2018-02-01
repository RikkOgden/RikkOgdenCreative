<?php get_header("blog"); ?>

<div class="hero ">
  <?php
      the_post_thumbnail('post-thumbnail',
        array( 'class' => "hero__image "));
  ?>

<div class="grid hero__content heading-group heading-group--white">
  <h1 class="heading-group__title hero-content"><?php the_title(); ?></h1>
  <hr class="hr">
  <h2 class="heading-group__subtitle">
    <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_date(); echo' by '; echo'<b style="color:#fff;">';the_author(); echo'</b>';
        endwhile; endif;
        ?></h2>
</div>
</div>

<main>



  <div class="page-section page-section--mgn-v-offset">
  <div class="grid">

    <div class="row row--gutters-xl row--equal-heights">
    <div class="col col--md__8">
      <div class="ad ad--shadow ad--hover-animation feature-item">
        <div class="ad__content">
              <?php
              			if ( have_posts() ) : while ( have_posts() ) : the_post();

              				get_template_part( 'content-single', get_post_format() );

              			endwhile; endif;
              			?>
                  </div>
                </div>
  </div>
  <div class="col col--md__4">
  <?php get_sidebar(); ?>
  </div>
</div>
  </div>
  </div>





</main>

<?php get_footer(); ?>
</body>
</html>
