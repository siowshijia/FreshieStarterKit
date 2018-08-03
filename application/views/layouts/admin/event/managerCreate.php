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
    <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Event Manager')) { ?>
            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="name" class="sr-only">Event Name</label>
                    <input type="text" name="eventname" id="eventname" class="form-control" placeholder="Event Name">
                </div>
                <div class="form-group">
                    <label for="eventvenue" class="sr-only">Event Venue</label>
                    <input type="text" name="eventvenue" id="eventvenue" class="form-control" placeholder="Event Venue">
                </div>
                <div class="form-group">
                <label for="category" class="sr-only">Category</label>
                    <select name="category" class="form-control">
                        <option value="sports">Sports</option>
                        <option value="arts">Arts</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventDate" class="sr-only">Event Date</label>
                    <input type="text" name="eventDate" id="eventDate" class="form-control datepicker" placeholder="Event Date" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="eventDescription" class="sr-only">Event Description</label>
                    <textarea rows="5" type="text" name="eventDescription" id="eventDescription" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Event Manager to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
