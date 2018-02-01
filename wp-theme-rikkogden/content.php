<!--sidebar -->
<div class="page-section page-section">
<div class="grid grid--xsm">

  <section class="row row--gutters-xl feature-item">
  <div class="col col--md__12">
    <div class="heading-group heading-group--md heading-group--bottom-margin">
    <h2 class="heading-group__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <hr class="hr hr--dark">
    <h3 class="heading-group__subtitle"><?php the_date(); ?> by <?php the_author(); ?></h3>
    </div>
  <p>
  <?php the_excerpt(); ?>
</p?
  </div>
</section>
</div>
</div>
