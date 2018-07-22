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
        <form class="form-signup" action="">
            <h2>Please sign up:</h2>
            <div class="form-group">
                <label for="stud_name" class="sr-only">Name</label>
                <input type="text" id="stud_name" class="form-control" placeholder="Name" required="required" autofocus="" value="<?php echo set_value('stud_name'); ?>">
                <span class="text-danger"><?php echo form_error('stud_name'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_admin" class="sr-only">Admission No.</label>
                <input type="number" id="stud_admin" class="form-control" placeholder="Admission No." required="required" autofocus="" value="<?php echo set_value('stud_admin'); ?>">
                <span class="text-danger"><?php echo form_error('stud_admin'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" autofocus="" value="<?php echo set_value('stud_email'); ?>">
                <span class="text-danger"><?php echo form_error('stud_email'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_contact" class="sr-only">Contact No.</label>
                <input type="number" id="stud_contact" class="form-control" placeholder="Contact No." required="" autofocus="" value="<?php echo set_value('stud_contact'); ?>">
                <span class="text-danger"><?php echo form_error('stud_contact'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_interest" class="sr-only">Interests</label>
                <textarea id="stud_interest" class="form-control" placeholder="Interests" required="" autofocus="" rows="10" cols="30" value="<?php echo set_value('stud_interest'); ?>">
                </textarea> 
                <span class="text-danger"><?php echo form_error('stud_interest'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_points" class="sr-only">Points</label>
                <input type="number" id="stud_points" class="form-control" placeholder="Points" required="" autofocus="" readonly value="<?php echo set_value('stud_points'); ?>">
                <span class="text-danger"><?php echo form_error('stud_points'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_pass" class="sr-only">Password</label>
                <input type="password" id="stud_pass" class="form-control" placeholder="Password" required="required" autofocus="" value="<?php echo set_value('stud_pass'); ?>">
                <span class="text-danger"><?php echo form_error('stud_pass'); ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_stud_pass" class="sr-only">Confirm Password</label>
                <input type="password" id="confirm_stud_pass" class="form-control" placeholder="Confirm Password" required="required" autofocus="" value="<?php echo set_value('confirm_stud_pass'); ?>">
                <span class="text-danger"><?php echo form_error('confirm_stud_pass'); ?></span>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="agree"> By joining, you have agreed to the terms and conditions
                </label>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
            <button class="btn btn-primary btn-block" type="reset">Cancel</button>

        </form>
    </div>
</section>
<!--/.section-base-->