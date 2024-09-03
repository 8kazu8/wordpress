  <div class="content wrapper">
     <?php if(have_posts()): ?>
       <?php while(have_posts()):the_post(); ?>
         <h1 class="page-title"><?php the_title(); ?></h1>
         <div id="item">
           <div class="item-text">
             <?php the_content(); ?>
           </div>
         </div>
       <?php endwhile; ?>
     <?php endif; ?>
  </div>