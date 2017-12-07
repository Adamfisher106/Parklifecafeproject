<?php
/*
Template Name: Menu Page

*/
?>
<?php get_header(); ?>
<div class="row">
  <div class="col-sm-push-2 col-sm-8">
    <h2><?php the_field('menu_head');?></h2>
  </div>
</div>
<div class="row">
  <div class="col-sm-push-2 col-sm-8">
    <p><?php the_field('menu_Para');?></p>
  </div>
</div>
<div class="row" style="margin-top:60px;">
  <div class="col-sm-12 text-center">
    <div class="carousel-ed">
	    <figure>
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-1.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-2.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-3.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-4.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-5.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-6.jpg">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-7.jpg">
	    </figure>
	    <nav>
        <div class="row">
          <div class="col-sm-6 text-right">
            <button class="nav prev">Prev</button>
          </div>
          <div class="col-sm-6 text-left">
            <button class="nav next">Next</button>
          </div>
      </nav>
    </div>
  </div> 
</div>
<?php get_footer();?>
