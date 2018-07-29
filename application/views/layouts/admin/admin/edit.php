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
        <?php if (isset($user)) { ?>
            <form class="form-signin" action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $user->staff_name; ?>">
                </div>
                <div class="form-group">
                    <label for="staff_number" class="sr-only">Staff Number</label>
                    <input type="text" name="staff_number" id="staff_number" class="form-control" placeholder="Staff Number"  value="<?php echo $user->staff_number; ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address"  value="<?php echo $user->staff_email; ?>">
                </div>
                <div class="form-group">
                    <label for="contact_number" class="sr-only">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number"  value="<?php echo $user->staff_contact_number; ?>">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/admin/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
