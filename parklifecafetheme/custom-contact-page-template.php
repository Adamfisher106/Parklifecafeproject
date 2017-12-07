<?php
/*
Template Name: Contact Page

*/
?>
<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-push-2 col-sm-8">
            <h2><?php the_field('contact_head');?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-push-2 col-sm-8">
           <p><?php the_field('contact_para');?></p>
        </div>
    </div>
    <?php the_post(); ?>
    
        <!-- Post Content -->
        <article>
          <div class="container">
            <div class="row" style="padding-top:100px; margin-left:0px; margin-right:0px;">
              <div class="col-sm-push-4 col-sm-4 col-sm-pull-4">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </article>
    
    
    <div class="row">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2514.846159341269!2d-1.4313148849632518!3d50.926562760825924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4874742412ffb70f%3A0x6857f285cec9b616!2sParkLife+Cafe!5e0!3m2!1sen!2suk!4v1509105868970" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer();?>