<?php
/*
Template Name: Comunity Room Page

*/
?>

<?php get_header(); ?>

<div class="container" style="padding-top:60px;">
    <div class="row">
        <div class="col-sm-12 text-center" style="padding-bottom:30px;">
            <h1>ParkLife Community Room</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-push-1 text-left">
            <h3>
               <?php the_field('overview'); ?>   
            Overview
            </h3>
            <p>
                <?php the_field('overview_para'); ?>
            As well as a Café, the building in St.James' Park houses a Community Room, which is also operated by ParkLife. <br><br> 
            The Community Room opened for business on 17th July 2011, and can be hired out by individuals for birthday parties, by community organisations and educational groups for activities and training, or by private organisations. <br><br>
            Community organisations can also hire out the room in conjunction with organised events in St.James' Park,
            for example to provide safe storage during an event, for a wet weather option, or as a venue for related
            indoor activities.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-push-1 text-left">
            <?php/*
                echo get_Facilities();
                */
            ?>
            <h3>
                <?php the_field('facilities_head'); ?>
                Facilities
            </h3>
            <p> 
                <?php the_field('facilities_para')?>
            The Community Room has a floor area of 20m2 and a combination of tables and chairs offering different <br>
layouts according to requirements e.g:<br><br>
- Parties for up to 40 children and accompanying adults;<br>
- Meetings for up to 20 attendees seated at tables;<br>
- Lectures for up to 40 seated guests;<br>
- Extension of the ParkLife Café with up to 30 more seats.<br>
- For all hirings, a catering service is available from the ParkLife Café, and ParkLife can also offer the use of a
ceiling-mounted projector with a 1.5m screen.<br>
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-push-1 text-left">
            
                <h3>
                    <?php the_field('hire_Times');?>
                Hire Times &amp; Charges
                </h3>
                <p>
                    <?php the_field('hire_Times_para');?>
The Community Room is available for hire during normal working hours. A discount hire rate is normally
available for registered charities or other constituted community organisations. o find out about hiring the
Community Room and catering options from the ParkLife Café, please contact ParkLife on 023 8077 9763
(Mon‑Sun, 9am‑5pm) and ask to speak to the Café Manager.
                </p>
        </div>
    </div>

    <div class="container">
  <div class="row">
      <div id="myCarousel" class="carousel slide col-sm-push-2" style="max-width:1000px; height:500px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators carousel-indicators-community-room">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        
        <div class="container-carousel">
            <div class="row">
                <h1>Reviews</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Organisor of an Art Echibition</h3>
                </div>
                <div class=" col-sm-push-5 col-sm-3">
                    <ul class="circles">
                        <li class="circle full"></li>
                        <li class="circle full"></li>
                        <li class="circle full"></li>
                        <li class="circle full"></li>
                    </ul>
                </div>
            </div>
            <div class="row text-left">
                <p>
                "As a group of 8 local artists, we mounted our first exhibition in the Community Room over the August bank holiday. It
was a great experience. The Community Room was the perfect size for us, and the clean white walls and skylights made
it a beautiful space to show off our paintings. Jennette [ the ParkLife Café Manager at that time], was very helpful when
we first approached her and very flexible, letting us visit and measure the room as our plans progressed. We had to
provide our own stands to display the artworks, but there were tables and chairs available to complete the room setup.
Posters were put up all round the Park well in advance to advertise the show."
<br>
<br>
"When the show was open, all the Café staff were supportive and positive and made a great contribution to the smooth
running of the exhibition. We were able to put up lots of signs to attract passers by including people who were visiting
the Park, and the Café next door was a big attraction for our visitors. The room was busy nearly all the time and we
made more sales than we had expected."
<br>
<br>
"We all felt this was the perfect location for our exhibition and hope to be able to book it again next year. Many thanks
for all the support from the ParkLife Café!"
                </p>
            </div>
            <div class="row">
                <div class="col-sm-push-10 col-sm-2">
                    <h3 class="text-right">
                        August, 2016
                    </h3>
                </div>
            </div>
        </div>
      </div>

      <div class="item">
        <div class="container-carousel">
  
        </div>
      </div>
    
      <div class="item">
        <div class="container-carousel">
  
        </div>
      </div>

      <div class="item">
        <div class="container-carousel">
  
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

</div>



<?php get_footer(); ?>