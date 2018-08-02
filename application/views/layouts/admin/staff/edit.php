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
        <?php if (isset($user) && isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <form class="form-signin" action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $user->staff_name; ?>">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="staff_number">Staff Number</label>
                    <input type="text" name="staff_number" id="staff_number" class="form-control" placeholder="Staff Number"  value="<?php echo $user->staff_number; ?>">
                    <span class="text-danger"><?php echo form_error('staff_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address"  value="<?php echo $user->staff_email; ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number"  value="<?php echo $user->staff_contact_number; ?>">
                    <span class="text-danger"><?php echo form_error('contact_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="user_role">User Role</label>
                    <select class="form-control" name="user_role">
                        <option disabled>Select Role</option>
                        <option value="Admin" <?php echo ($user->user_role === 'Admin') ? 'selected' : '' ; ?>>Admin</option>
                        <option value="Event Manager" <?php echo ($user->user_role === 'Event Manager') ? 'selected' : '' ; ?>>Event Manager</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('user_role'); ?></span>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
                <a href="<?php echo base_url('/admin/staff/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
