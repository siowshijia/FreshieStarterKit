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
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Admission Number</th>
                        <th>Name</th>
                        <th>Attended Event</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $event) { ?>
                        <tr>
                            <td><?php echo $event->eventname; ?></td>   
                            <td><?php echo $event->studentNo; ?></td>
                            <td><?php echo $event->studentname; ?></td>
                            <td><?php echo $event->attendance; ?></td>       
                            <td><a href="<?php echo base_url('/admin_event/markAttendance/' )?><?php echo $event->eventId; ?>/<?php echo $event->studentId;?>" class="btn btn-primary">Mark Attendance</a></td>      
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center"
                <h4>Please login as Event Manager to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
