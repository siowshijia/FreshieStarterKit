<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="home-slider">
    <div class="container">
        <div class="main-slider">
            <div class="slide-text">
                <h1>Hey There!</h1>
                <h3 class="section-lead">Welcome to the NYPFreshmanStarterKit site! Another big welcome to you joining the NYP family! Lots of events and quizzes with rewards are waiting for you to participate and walk away with. Start exploring now!</h3>
                <a href="#" class="btn btn-common">LOGIN</a>
            </div>
            <img src="<?php echo base_url(); ?>assets/images/home/slider/hill.png" class="slider-hill" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/house.png" class="slider-house" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/sun.png" class="slider-sun" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->



<section id="action" class="responsive">
    <div class="vertical-center">
         <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    
                        <h1 class="title">Events in NYP</h1>
                        <p>Interesting events waiting for you to explore!</p>
                        <?php
                        foreach($events as $event)
                        {
                        ?>
                        <h3><?php echo $event->eventId; ?></h3>
                        <h3><?php echo $event->eventname; ?></h3>
                        By <strong><?php echo $event->eventvenue  ; ?></strong>
                        <a href="<?php echo base_url().'event/adminUpdate/'.$id = $event->eventId;?>" rel="stylesheet">Update</a>
                        <?php
                        }
                        ?>
                        </div>
                    <div class="text-center visible-xs">
                        <a href="#" class="btn btn-common">TAKE ME TO THE EVENTS</a>
                    </div>
                    <div class="col-sm-5 text-center wow fadeInRight hidden-xs" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="tour-button">
                            <a href="#" class="btn btn-common">TAKE ME TO THE EVENTS</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->
