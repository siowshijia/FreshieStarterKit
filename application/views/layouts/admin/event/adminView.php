<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
                        <?php echo $event->studentName  ; ?>
                        <a href="<?php echo base_url().'admin_event/update/'.$id = $event->eventId;?>" rel="stylesheet">Update</a>
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
