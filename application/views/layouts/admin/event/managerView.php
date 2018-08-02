<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $view_name; ?></h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-md">
        <?php if(validation_errors()) { ?>
            <div class="alert alert-danger"><?= validation_errors();?></div>
        <?php } ?>
        <?php if(isset($msg) && $msg != '') { ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php } ?>

        <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Event Manager')) { ?>
            <div class="m-b-md">
            <a href="<?php echo base_url('/admin_event/managerCreate')?>" class="btn btn-primary">Add Event</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Event Status</th>
                        <th>Approval Status</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach ($events as $event) { ?>
                        <tr>
                            <td><?php echo $event->eventname; ?></td>
                            <td><?php echo $event->eventvenue; ?></td>
                            <td><?php echo $event->eventDatetime; ?></td>
                            <td><?php echo $event->eventCategory; ?></td>
                            <td><?php echo $event->eventStatus; ?></td>
                            <td><?php echo $event->eventApproval; ?></td>
                            <td>
                            <a href="<?php echo base_url('/admin_event/managerUpdate') . '/' . $event->eventId; ?>" class="btn btn-primary">Edit</a>
                            
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
