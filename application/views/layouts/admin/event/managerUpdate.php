<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title text-center"><?php echo $view_name; ?></h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-xs">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                <input type="hidden" name="eventId" id="eventId" class="form-control" valueplaceholder="Event Name"
                    value="<?php echo set_value('eventId'); echo $events[0]->eventId; ?>">
                    <label for="name" class="sr-only">Event Name</label>
                    <input type="text" name="eventname" id="eventname" class="form-control" valueplaceholder="Event Name"
                    value="<?php echo set_value('eventname'); echo $events[0]->eventname; ?>">
                </div>
                <div class="form-group">
                    <label for="eventvenue" class="sr-only">Event Venue</label>
                    <input type="text" name="eventvenue" id="eventvenue" class="form-control" placeholder="Event Venue"
                    value="<?php echo set_value('eventvenue'); echo $events[0]->eventvenue; ?>">
                </div>
                <div class="form-group">
                <label for="category" class="sr-only">Category</label>
                    <select name="category" class="form-control">
                        <option value="sports">Sports</option>
                        <option value="arts">Arts</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventDate" class="sr-only">Contact Number</label>
                    <input type="text" name="eventDate" id="eventDate" class="form-control" placeholder="Event Date"
                    value="<?php echo set_value('eventDatetime'); echo $events[0]->eventDatetime; ?>">
                </div>
                <div class="form-group">
                    <label for="eventDescription" class="sr-only">Event Description</label>
                    <textarea rows ="5" type="text" name="eventDescription" id="eventDescription" class="form-control" placeholder="Description"
                    value="<?php echo set_value('description');?>"><?php echo $events[0]->description; ?></textarea>
                    
                </div>
                <div class="form-group">
                    <label for="eventDate" class="sr-only">Contact Number</label>
                    <input type="text" name="eventApproval" id="eventApproval" class="form-control" placeholder="Event Approval"
                    value="<?php echo set_value('eventApproval'); echo $events[0]->eventApproval; ?>" readonly>
                </div>
                <div class="form-group">
                <label for="Status" class="sr-only">Status</label>
                    <select name="Status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Update</button>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
