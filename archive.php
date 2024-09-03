<?php get_header(); ?>
<section id="content">
  <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">
      <h1>日付別アーカイブ</h1>
      <hr>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="mb-3" id="post-meta">
            <p>作成日時：<?php echo get_the_date(); ?></p>
            <?php the_category(); ?>
          </div>
          <hr>
      <?php
        endwhile;
      endif;
      ?>
    </div>
    <div id="sidebar" class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>