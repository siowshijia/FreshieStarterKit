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
            <h2>Please sign in:</h2>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
                <label for="stud_pass" class="sr-only">Password</label>
                <input type="password" id="stud_pass" class="form-control" placeholder="Password" required="">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</section>
