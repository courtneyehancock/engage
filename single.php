<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="container">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="post-feature">
          <?php the_post_thumbnail(); ?>
        </div>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <p class="written-by"><?php echo "This post is written by: " . get_the_author(); ?></p>
        <p class="published"><?php echo "| Published: " . get_the_date(); ?></p>
        <?php the_content(); ?>

      </div>
        <?php
      }
    }
  /*  if (comments_open() || get_comments_number()):
      comments_template();
    endif;*/
  ?>
  </div>
</div>
<?php get_footer(); ?>
