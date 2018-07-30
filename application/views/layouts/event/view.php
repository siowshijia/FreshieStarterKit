<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<section id="action" class="responsive">
    <div class="vertical-center">
         <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    
                        <?php echo $_SESSION['user_id']?>
                        <?php
                        foreach($events as $event)
                        {
                        ?>
                        <h3><?php echo $event->eventId; ?></h3>
                        <h3><?php echo $event->eventname; ?></h3>
                        By <strong><?php echo $event->studentName  ; ?></strong>
                        <?php
                        }
                        ?>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->
