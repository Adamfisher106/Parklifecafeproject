<?php get_header(); ?>

    <!-- Page Header -->

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         
<!-- start of the wordpress loop-->
<?php query_posts('order=DESC&orderby=date' ); ?>
        <?php while ( have_posts()) : the_post(); ?>
        <div class="post-preview">
            <a href="<?php the_permalink(); ?>"
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                    <?php echo get_post_meta($post->ID, 'sub_title', true); ?>
             </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#"><?php the_author(); ?></a>
                <?php the_date(); ?>  
            </p>
          </div>


<?php endwhile; ?>
<!-- end of the wordpress loop-->
        
        
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer();?>