<?php
/*
Template Name: News Page

*/
?>

<?php get_header(); ?>

<div class="container-fliud" style="padding-top:70px;">
    <div class="row">
        <div class="col-sm-12 text-center fancyfont">
            <h1>Latest News and Events</h1>        
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-push-1">
            
            <h3>
                <?php the_field('event_1_head');?>    
            </h3>
   
            <br>
            <p>
                <?php the_field('event_1_para');?>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque similique dignissimos nostrum fuga at? Est unde enim blanditiis aut atque doloribus, architecto magnam quaerat sunt minima odio sed earum pariatur.
            </p>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-push-1">
            
            <h3>
                <?php the_field('event_2_head');?>
                Event 2
            </h3>
  
            <br>
            <p>
                <?php the_field('event_2_para');?>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, corporis! Aliquam, tenetur. Reprehenderit, illo sed minima vero quod sapiente alias, dolores totam laboriosam iste mollitia. Ex maxime ab minima aspernatur.
            </p>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-push-1">
            
            <h3>
                <?php the_field('event_3_head');?>
                Event 3
            </h3>

            <br>
            <p>
                <?php the_field('event_3_para');?>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ad, dolor, ipsa quam sapiente laboriosam labore ratione non eaque officia mollitia nihil? Necessitatibus, est quaerat! Dolorem animi doloremque eos consequuntur.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 col-sm-push-2">
                <div class="white-container">
                    <div class="row icon-img">
                        <img src="" alt="">
                        <p>Daily Echo</p>
                    </div>
                    <div class="row article-img">
                        <img src="" alt="">
                    </div>
                    <div class="row">
                        <h2>

                        </h2>
                        <p>

                        </p>
                    </div>
                    <div class="row">
                        <a href="">Read the article on the Daily Echo ></a>
                    </div>
                </div>    
        </div>
    </div>
   
    <div class="row">
    <div class="col-sm-8 col-sm-push-2">
            <div class="white-container">
                <div class="row icon-img">
                    <img src="" alt="">
                    <p>Daily Echo</p>
                </div>
                <div class="row article-img">
                    <img src="" alt="">
                </div>
                <div class="row">
                    <h2>

                    </h2>
                    <p>

                    </p>
                </div>
                <div class="row">
                    <a href="">Read the article on the Daily Echo ></a>
                </div>
            </div>    
    </div>
</div>
</div>


<?php get_footer(); ?>