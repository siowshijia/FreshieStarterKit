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
        <form class="form-updateprofile" action="">
            <h2>Please update your profile:</h2>
            <div class="form-group">
                <label for="stud_name" class="sr-only">Name</label>
                <input type="text" id="stud_name" class="form-control" placeholder="Name" required="required" autofocus="" value="<?php echo $login_student[0]->student_name; ?>" readonly>
                <span class="text-danger"><?php echo form_error('stud_name'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_admin" class="sr-only">Admission No.</label>
                <input type="number" id="stud_admin" class="form-control" placeholder="Admission No." required="required" autofocus="" value="<?php echo $login_student[0]->admission_number; ?>" readonly>
                <span class="text-danger"><?php echo form_error('stud_admin'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" value="<?php echo set_value('stud_email', $login_student[0]->student_email); ?>" autofocus="">
                <span class="text-danger"><?php echo form_error('stud_email'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_contact" class="sr-only">Contact No.</label>
                <input type="number" id="stud_contact" class="form-control" placeholder="Contact No." required="" value="<?php echo set_value('stud_contact', $login_student[0]->student_contact_number); ?>" autofocus="">
                <span class="text-danger"><?php echo form_error('stud_contact'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_interest" class="sr-only">Interests</label>
                <textarea id="stud_interest" class="form-control" placeholder="Interests" required="" autofocus="" value="<?php echo set_value('stud_interest', $login_student[0]->interest); ?>" rows="10" cols="30">
                </textarea> 
                <span class="text-danger"><?php echo form_error('stud_interest'); ?></span>
            </div>
            <div class="form-group">
                <label for="stud_points" class="sr-only">Points</label>
                <input type="number" id="stud_points" class="form-control" placeholder="Points" required="" autofocus="" value="<?php echo $login_student[0]->points; ?>" readonly>
                <span class="text-danger"><?php echo form_error('stud_points'); ?></span>
            </div>
            
            <button class="btn btn-primary btn-block" type="submit">Update profile</button>
            <button class="btn btn-primary btn-block" type="reset">Cancel</button>

        </form>
    </div>
</section>
<!--/.section-base-->