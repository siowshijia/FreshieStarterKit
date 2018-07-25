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
                    <label for="stud_name" class="sr-only">Name</label>
                    <input type="text" name="stud_name" id="stud_name" class="form-control" placeholder="Name" value="<?php echo $user->student_name; ?>">
                </div>
                <div class="form-group">
                    <label for="adm_number" class="sr-only">Admission Number</label>
                    <input type="text" name="adm_number" id="adm_number" class="form-control" placeholder="Admission Number" value="<?php echo $user->admission_number; ?>">
                </div>
                <div class="form-group">
                    <label for="stud_email" class="sr-only">Email address</label>
                    <input type="email" name="stud_email" id="stud_email" class="form-control" placeholder="Email address" value="<?php echo $user->student_email; ?>">
                </div>
                <div class="form-group">
                    <label for="contact_number" class="sr-only">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number" value="<?php echo $user->student_contact_number; ?>">
                </div>
                <div class="form-group">
                    <label for="interest" class="sr-only">Interest</label>
                    <textarea name="interest" id="interest" class="form-control" rows="8" cols="80" placeholder="Interest"><?php echo $user->interest; ?></textarea>
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
