<?php
/*
Template Name: Home Page

*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Page Header -->
 <header class="masthead" style="height:370px;background-image: url('<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); echo $image; ?>')">
      <div class="container">
        <div class="post-heading">
    
          <div class="row">
            <div class="col-sm-push-45 text-center">
              <h3>Welcome to the official site of</h3>
            </div>
          </div>  
    
          <div class="row">  
            <div class="col-sm-push-45 text-center">
              <h5>the Parklife cafe and Community Room</h5>
            </div>
          </div>
    
        </div>
      </div>

</header>

    <!-- Post Content -->
<article>

  <div class="row carousel-page-position" style="padding-bottom:100px;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- Indicators -->
    <ol class="carousel-indicators carousel-indicators-main">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
         <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/park-life-logo.png" alt="ParkLife Cafe Logo"></a>
          </div>
          <div class="col-sm-8 fancyfont">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1>
                  Opening Times:
                </h1> 
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <p>10:00 - 18:00<p>
              </div>
              <div class="col-sm-4">
                <P>7 DAYS A WEEK</p>
              </div>
              <div class="col-sm-4">
                <P>(April - September)</P>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <P>10:00 - 16:30</p>
              </div>
              <div class="col-sm-4">
                <P>7 DAYS A WEEK</p>
              </div>  
              <div class="col-sm-4">
                <p>(October - March)</P>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fosjp-logo.png" style="height:60%; margin-top:27.5px;" alt="Friends of St.James Park"></a>
          </div>
         </div>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
        <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/park-life-logo.png" alt="ParkLife Cafe Logo"></a>
          </div>
          <div class="col-sm-8 fancyfont">
            <div class="row">
                <div class="col-sm-12">
                  <h1>
                    Menu:
                  </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <p>
                    From toasted sandwiches to beef burgers, we cater for all!
                  </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <a href="<?php echo get_site_url(); ?>/menu">
                    <button class="btn-primary">
                      <p>  View Full Menu </p>
                    </button>
                  </a>                  
                </div>
            </div>
          </div>
          <div class="col-sm-2">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fosjp-logo.png" style="height:60%; margin-top:27.5px;" alt="Friends of St.James Park"></a>
        </div>
         </div>
      </div>
      </div>
    
      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
        <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/park-life-logo.png" alt="ParkLife Cafe Logo"></a>
          </div>
          <div class="col-sm-8 fancyfont">
            <div class="row">
                <div class="col-sm-12">
                  <h1>
                    Latest News:
                  </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <p>
                    "Check out our news page for the latest articles"
                  </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <a href="<?php echo get_site_url(); ?>/news">
                    <button>
                     <p> Link to News </p>
                    </button>
                  </a>         
                </div>
            </div>
          </div>
          <div class="col-sm-2">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fosjp-logo.png" style="height:60%; margin-top:27.5px;" alt="Friends of St.James Park"></a>
        </div>
         </div>
      </div>
      </div>

      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
        <div class="row">
          <div class="col-sm-2">
            <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/park-life-logo.png" alt="ParkLife Cafe Logo"></a>
          </div>
          <div class="col-sm-8 fancyfont">
          <div class="row">
              <div class="col-sm-12">
                <h1>
                  Community Room
                </h1>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                <p>
                  Our Community Room is available for hire all year round!
                </p>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                <a href="<?php echo get_site_url(); ?>/community-room">
                  <button>
                  <p>  Find out more </P>
                  </button>
                </a>               
              </div>
          </div>
        </div>
          <div class="col-sm-2">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fosjp-logo.png" style="height:60%; margin-top:27.5px;" alt="Friends of St.James Park"></a>
        </div>
         </div>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
<div class="container">
  <div class="row" style="margin-top:100px;">
    <div class="col-sm-10 col-sm-push-1">
      <h1 class="text-center fancyfont">
        <?php the_field('indexheader'); ?>
        Welcome to the ParkLife Community Café
      </h1>
      <br>
      <p>
        <?php the_field('indexhomepara'); ?>
        Our menu is based on classic British cafe food, with a few twists and turns on the way - nothing challenging
        or complicated, just straightforward and tasty.
        <br><br>
        The Cafe is open from 10am until 4:30pm every day. We serve breakfast, lunch, a kids menu and a selection
        of cakes. Feel free to call in for anything from a mid morning coffee and pastry to an afternoon pot of tea with
        cake.
        <br><br>
        Everyone is welcome, whatever time of the day it is.
        <br><br>
      </p>
    </div>
  </div>
</div>
  <div class="row">
      <div class="col-sm-12" style="padding:0; border-top: solid, 3px, #555; border-bottom: solid, 3px, #555;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/outside-cafe.jpg" alt="" style="width:100%; margin-bottom:50px;">
      </div>
  </div>
<div class="container">  
  <div class="row">
      <div class="col-sm-10 col-sm-push-1">
          <h1 class="text-center fancyfont">
            <?php the_field('about_header')?>
            About the Café
          </h1>
          <br>
          <p  class="text-left">
            <?php the_field('about_para') ?>
            <h2>Introduction</h2>
            <br>
            The Café in St.James' Park is operated by ParkLife, a community interest company established by FoSJP to run
            the Café and Community Room as a social enterprise.
            <br><br>
            Any surplus profits made by ParkLife will be given to FoSJP who will use the money to further improve park
            facilities and services for the community.
            <br><br>
            The Café opened for business on 15th July 2011, replacing the popular volunteer‑run FoSJP Kiosk which
            operated in the Park from 2006 to 2010.
            <br><br>
            <h2>Opening Hours</h2>
            <br>
            The Café has an indoor area with 16 seats, and an outdoor covered terrace with 14 seats. It's open every day
            including weekends, offering a variety of good quality, freshly prepared food and drinks to suit most tastes
            and budgets. Our Opening times are as follows:
            <br><br>
            <strong>
            10:00 - 18:00 - 7 DAYS A WEEK (April - September)
            <br>
            10:00 - 16:30 - 7 DAYS A WEEK (October - March)
            </strong>
          </p>
      </div>
  </div>
  <div class="row">
  <div style="padding-bottom:100px;">
  <div id="myCarousel2" class="carousel slide col-sm-pull-1"data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators carousel-indicators-bottom">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item item-large active">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
      <div class="carousel-caption">
        <div class="row fancyfont">
            <div class="col-sm-3">
                <img src="<?php echo get_template_directory_uri()?>/img/laura-trotter.png" alt="Laura Trotter">
            </div>
            <div class="col-sm-7 text-left">
              <h1>
                Meet the Team
              </h1>
              <br>
              <h4>
                Laura Trotter - Cafe Manager
              </h4>
              <p>
                Our Café Manager, Laura Trotter, took over from her predecessor Jennette
                in October 2016. Before joining ParkLife, Laura had several years'
                experience in retail management, and is looking forward to working in a
                community‑based environment. Next time you're in St.James' Park, please
                drop into the Café and say "Hello" to Laura!
              </p>
            </div>
        </div>
      </div>
    </div>

    <div class="item item-large">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
    </div>

    <div class="item item-large">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
    </div>

    <div class="item item-large">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  </div>
  <div class="row">
        <div class="col-sm-10 col-sm-push-1">
              <h1 class="text-center fancyfont">
                <?php the_field('help_header'); ?> 
                How can you help the Café?
              </h1>
              <p class="text-left">
                <?php the_field('help_para'); ?>
                <h2>Donating</h2>
                <br>
                If every member of FoSJP bought one coffee each week, this would ensure that the Café made enough money
                to cover its operating costs over the winter.
                <br><br>
                The Café is looking to fill its bookshelf with secondhand books, particularly children's books. These books will
                be available free of charge or for a small donation if people can manage it.
                <br><br>
                Please bring along any unwanted books to the Café during normal opening hours - thank you!
                <br><br>
                <h2>Volunteering</h2>
                <br>
                If you have a spare couple of hours free and would like to be involved with helping to run a friendly
                community café, please get in touch with Marina or Laura on 023 8077 9763 or marina.murphy@fosjp.org.uk
                for more information. We'd love to hear from you!
                
              </p>
        </div>
  </div>
  <div class="container" style="margin-top:100px;">
  <div id="myCarousel1" class="carousel slide col-sm-push-2" style="width:94%"data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators carousel-indicators-bottom">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item item-large active">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
      <div class="carousel-caption fancyfont">
        <div class="row">
          <div class="col-sm-4">
            <h1>Testimonials</h1>
          </div>
          <div class="col-sm-4">
            <a href="">
              <button class="tripadvisor-btn">
                <p>
                  View on TripAdvisor
                </p>
              </button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 text-left">
            <h4>
              "Lovely little cafe, with good food and drinks"
            </h4>
          </div>
          <div class="col-sm-4">
            <ul class="circles">
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
            </ul>
          </div>
        </div>  
        <div class="row text-left">
          <div class="col-sm-12">
            <p>"Nice cosy place to pop into after playing with the kids in the park. Good food for a decent price. Cafe has books to keep the kids occupied and the staff are lovely with big smiles!"</p>
          </div>
        </div>
        <div class="row text-left">
          <div class="col-sm-12">
            <p><strong>-HildeGr</strong></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-push-6 col-sm-4">
            <p>20 November, 2016.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="item item-large">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
      <div class="carousel-caption fancyfont">
        <div class="row">
          <div class="col-sm-4">
            <h1>Testimonials</h1>
          </div>
          <div class="col-sm-4">
            <a href="">
              <button class="tripadvisor-btn">
                <p>
                  View on TripAdvisor
                </p>
              </button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 text-left">
            <h4>
              "Just right"
            </h4>
          </div>
          <div class="col-sm-4">
            <ul class="circles">
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
            </ul>
          </div>
        </div>  
        <div class="row text-left">
          <div class="col-sm-12">
            <p>"Sitting under the sheltered area, enjoyed my toastie with fresh salad and a good coffee while watching people coming and going in the park. Some interesting sounding burgers on the menu too."</p>
          </div>
        </div>
        <div class="row text-left">
          <div class="col-sm-12">
            <p><strong>-Joan C</strong></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-push-6 col-sm-4">
            <p>7 July, 2016.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="item item-large">
      <img src="<?php echo get_template_directory_uri();?>/img/carousel-bg-large.jpg" alt="">
      <div class="carousel-caption fancyfont">
        <div class="row">
          <div class="col-sm-4">
            <h1>Testimonials</h1>
          </div>
          <div class="col-sm-4">
            <a href="">
              <button class="tripadvisor-btn">
                <p>
                  View on TripAdvisor
                </p>
              </button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 text-left">
            <h4>
              "Quite Coffee in the autumn sun"
            </h4>
          </div>
          <div class="col-sm-4">
            <ul class="circles">
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
                <li class="circle full"></li>
            </ul>
          </div>
        </div>  
        <div class="row text-left">
          <div class="col-sm-12">
            <p>"This small cafe is situated in St.James park not far from Shirley high street. it has quite and country feel which is hard to find in any city. The staff are freindly and the premises are clean and inviting. For a quite break/lunch or tea would recommend a visit."</p>
          </div>
        </div>
        <div class="row text-left">
          <div class="col-sm-12">
            <p><strong>-FletchSouthampton</strong></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-push-6 col-sm-4">
            <p>4 October, 2016.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>

  <div class="container" style="padding-top:50px;">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-map-o fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.facebook.com/fosjp/">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://twitter.com/ParkLife_cafe">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://www.tripadvisor.co.uk/Restaurant_Review-g186299-d8836361-Reviews-The_ParkLife_Cafe-Southampton_Hampshire_England.html">               <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-tripadvisor fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
        
     <div class="row" style="padding-top:20px; padding-left:2.5%;">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2514.846159341269!2d-1.4313148849632518!3d50.926562760825924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4874742412ffb70f%3A0x6857f285cec9b616!2sParkLife+Cafe!5e0!3m2!1sen!2suk!4v1509105868970" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>

</article>

    <hr>

    <?php get_footer(); ?>