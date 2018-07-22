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
        <form class="form-changepassword" action="">
            <h2>Please change your password:</h2>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" autofocus="" value="<?php echo $studpass[0]->student_email; ?>" readonly>
                <span class="text-danger"><?php echo form_error('stud_email'); ?></span>
            </div>
            <div class="form-group">
                <label for="new_stud_pass" class="sr-only">New Password</label>
                <input type="password" id="new_stud_pass" class="form-control" placeholder="New Password" required="required" value="<?php echo set_value('new_stud_pass', $studpass[0]->password); ?>" autofocus="">
                <span class="text-danger"><?php echo form_error('new_stud_pass'); ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_new_stud_pass" class="sr-only">Confirm New Password</label>
                <input type="password" id="confirm_new_stud_pass" class="form-control" placeholder="Confirm New Password" required="required" value="<?php echo set_value('confirm_new_stud_pass', $studpass[0]->password); ?>" autofocus="">
                <span class="text-danger"><?php echo form_error('confirm_new_stud_pass'); ?></span>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Change Password</button>
            <button class="btn btn-primary btn-block" type="reset">Cancel</button>

        </form>
    </div>
</section>
<!--/.section-base-->