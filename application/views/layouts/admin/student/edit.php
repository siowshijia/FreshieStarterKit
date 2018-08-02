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
<<<<<<< HEAD
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $user->student_name; ?>">
                </div>
                <div class="form-group">
                    <label for="admission_number" class="sr-only">Admission Number</label>
                    <input type="text" name="admission_number" id="admission_number" class="form-control" placeholder="Admission Number"  value="<?php echo $user->admission_number; ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address"  value="<?php echo $user->student_email; ?>">
                </div>
                <div class="form-group">
                    <label for="contact_number" class="sr-only">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number"  value="<?php echo $user->student_contact_number; ?>">
                </div>
                <div class="form-group">
                    <label for="user_role" class="sr-only">Interest</label>
                    <textarea name="interest" id="interest" class="form-control" rows="8" cols="80" placeholder="Interest"><?php echo $user->interest; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="points" class="sr-only">Points</label>
                    <input type="text" name="points" id="points" class="form-control" placeholder="Points" value="<?php echo $user->points; ?>">
=======
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $user->student_name; ?>">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="admission_number">Admission Number</label>
                    <input type="text" name="admission_number" id="admission_number" class="form-control" value="<?php echo $user->admission_number; ?>">
                    <span class="text-danger"><?php echo form_error('admission_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->student_email; ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo $user->student_contact_number; ?>">
                    <span class="text-danger"><?php echo form_error('contact_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="user_role">Interest</label>
                    <textarea name="interest" id="interest" class="form-control" rows="8" cols="80"><?php echo $user->interest; ?></textarea>
                    <span class="text-danger"><?php echo form_error('interest'); ?></span>
                </div>
                <div class="form-group">
                    <label for="points">Points</label>
                    <input type="text" name="points" id="points" class="form-control" value="<?php echo $user->points; ?>">
                    <span class="text-danger"><?php echo form_error('points'); ?></span>
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
                <a href="<?php echo base_url('/admin/student/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
