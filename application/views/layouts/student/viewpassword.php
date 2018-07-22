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
        <form class="form-viewpassword" action="">
            <h2>You are encouraged to change your password</h2>
            <h3>Here is your password:</h3>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" autofocus="" <?php echo $studpass[$i]->student_email; ?> readonly>
            </div>
            <div class="form-group">
                <label for="stud_pass" class="sr-only">Password</label>
                <input type="text" id="stud_pass" class="form-control" placeholder="Password" required="required" autofocus="" <?php echo $studpass[$i]->password; ?> readonly>
            </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Back to Login</button>
        </form>
    </div>
</section>
<!--/.section-base-->