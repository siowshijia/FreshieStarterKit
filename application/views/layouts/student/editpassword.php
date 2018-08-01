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
    <div class="container-xs">
        <?php if (isset($user)) { ?>
            <form class="form-edit-student" action="" method="post">
                <div class="form-group">
                    <label for="new_stud_pass" class="sr-only">New Password</label>
                    <input type="password" name="new_stud_pass" id="new_stud_pass" class="form-control" placeholder="New Password">
                    <span class="text-danger"><?php echo form_error('new_stud_pass'); ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_new_stud_pass" class="sr-only">Confirm New Password</label>
                    <input type="password" name="confirm_new_stud_pass" id="confirm_new_stud_pass" class="form-control" placeholder="Confirm New Password">
                    <span class="text-danger"><?php echo form_error('confirm_new_stud_pass'); ?></span>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/student/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
