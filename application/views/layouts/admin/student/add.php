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
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="admission_number" class="sr-only">Admission Number</label>
                    <input type="text" name="admission_number" id="admission_number" class="form-control" placeholder="Admission Number">
                    <span class="text-danger"><?php echo form_error('admission_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="contact_number" class="sr-only">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number">
                    <span class="text-danger"><?php echo form_error('contact_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="interest" class="sr-only">Interest</label>
                    <textarea name="interest" id="interest" class="form-control" rows="8" cols="80" placeholder="Interest"></textarea>
                    <span class="text-danger"><?php echo form_error('interest'); ?></span>
                </div>
                <div class="form-group">
                    <label for="points" class="sr-only">Points</label>
                    <input type="text" name="points" id="points" class="form-control" placeholder="Points">
                    <span class="text-danger"><?php echo form_error('points'); ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
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
