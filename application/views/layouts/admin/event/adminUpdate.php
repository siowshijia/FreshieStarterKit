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
    <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                <input type="hidden" name="eventId" id="eventId" class="form-control" 
                    value="<?php echo set_value('eventId'); echo $events[0]->eventId; ?>">
                    <label for="name" >Event Name</label>
                    <input type="text" name="eventname" id="eventname" class="form-control" 
                    value="<?php echo set_value('eventname'); echo $events[0]->eventname; ?>">
                </div>
                <div class="form-group">
                    <label for="eventvenue" >Event Venue</label>
                    <input type="text" name="eventvenue" id="eventvenue" class="form-control"
                    value="<?php echo set_value('eventvenue'); echo $events[0]->eventvenue; ?>">
                </div>
                <div class="form-group">
                <?php  $category =  $events[0]->eventCategory;?>
                <label for="category" >Category</label>
                    <select name="category" class="form-control" selected="<?php echo $events[0]->eventCategory; ?>">
                        <option value="Sports" <?php if( $category=="Sports"){ echo'selected="selected"';}?>>Sports</option>
                        <option value="Arts" <?php if( $category=="Arts"){ echo'selected="selected"';}?>>Arts</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventDate" >Event Date</label>
                    <input type="text" name="eventDate" id="eventDate" class="form-control datepicker" placeholder="Event Date"
                    value="<?php echo set_value('eventDatetime'); echo $events[0]->eventDatetime; ?>">
                </div>
                <div class="form-group">
                    <label for="eventDescription" >Event Description</label>
                    <textarea rows="5" type="text" name="eventDescription" id="eventDescription" class="form-control" 
                    value="<?php echo set_value('description');?>"><?php echo $events[0]->description; ?></textarea>
                    
                </div>
                <div class="form-group">
                    <?php  $status =  $events[0]->eventStatus;?>
                <label for="Status" >Status</label>
                    <select name="Status" class="form-control">
                        <option value="Active" <?php if($status=="Active"){ echo'selected="selected"';}?>>Active</option>
                        <option value="Inactive" <?php if( $status=="Inactive"){ echo'selected="selected"';}?>>Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="Approval" >Approval</label>
                    <select name="approval" class="form-control">
                        <option value="Approved">Approve</option>
                        <option value="Denied">Deny</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Update</button>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
