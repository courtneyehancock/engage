<?php get_header(); ?>

<div class="main-content">
  <div class="container-fluid">
    <div class="internal-div">
      <h1 style="color: #00529b; font-size: 2em; text-align: right; margin-right: 2em;">OPWD INSIDER</h1>

      <hr />

    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>

          <div class="col-lg-5 posts">
            <?php the_post_thumbnail('medium'); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
            ?>
            <div class="post-info">
              <p class="font-italic">Published: <?php echo get_the_date(); ?></p>
            <!--  <p class="category-label font-italic">Category: <?php the_category(); ?></p>-->
            </div>
          </div>
    <?php } //ends while loop
      }//end if statement
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
