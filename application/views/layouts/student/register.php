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
        <form class="form-signin" action="" method="post">
            <h2>Welcome! Register yourself here:</h2>
            <?php if (isset($error_msg)) { ?>
                <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
            <?php } ?>
            <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                <span class="text-danger"><?php echo form_error('name'); ?></span>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="sr-only">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</section>
