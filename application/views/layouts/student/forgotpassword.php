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
        <form class="form-forgotpassword" action="">
            <h2>Have you forgotten your password?</h2>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" autofocus="" value="<?php echo set_value('stud_email'); ?>">
                <span class="text-danger"><?php echo form_error('stud_email'); ?></span>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Retrieve Password</button>
            <button class="btn btn-primary btn-block" type="reset">Cancel</button>

        </form>
    </div>
</section>
<!--/.section-base-->