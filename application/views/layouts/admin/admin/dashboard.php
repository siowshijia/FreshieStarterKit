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

        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
            <div class="categories">
                <h3>Admin Site Map</h3>
                <ul class="nav navbar-stacked">
                    <li><a href="<?php echo base_url('/admin/staff/dashboard'); ?>">Staff</a></li>
                    <li><a href="<?php echo base_url('/admin/quiz'); ?>">Quizzes</a></li>
                    <li><a href="<?php echo base_url('/admin/event'); ?>">Events</a></li>
                    <li><a href="<?php echo base_url('/admin/reward/dashboard'); ?>">Reward</a></li>
                </ul>
            </div>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
