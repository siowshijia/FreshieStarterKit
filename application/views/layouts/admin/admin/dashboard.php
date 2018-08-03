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
    <div class="container-md">

        <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-info text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold">Upcoming Events</h3>
                        </div>
                        <div class="panel-body">
                            <div class="font-big"><?php echo $event_count; ?></div>
                        </div>
                    </div>
                    <div class="panel panel-info text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold">Available Quizzes</h3>
                        </div>
                        <div class="panel-body">
                            <div class="font-big"><?php echo $quiz_count; ?></div>
                        </div>
                    </div>
                    <div class="panel panel-info text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold">Redemptable Rewards</h3>
                        </div>
                        <div class="panel-body">
                            <div class="font-big"><?php echo $reward_count; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold">Adminstrator</h3>
                        </div>

                        <div class="panel-body text-center">
                            <img src="<?php echo base_url("assets/images/user.png"); ?>" alt="" class="img-responsive image-center">

                            <?php if($user) {?>
                                <div class="table-responsive m-t-md">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Name</th>
                                            <td><?php echo $user->staff_name; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Staff Number</th>
                                            <td><?php echo $user->staff_number; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $user->staff_email; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Contact Number</th>
                                            <td><?php echo $user->staff_contact_number; ?></td>
                                        </tr>
                                        <tr>
                                            <th>User Role</th>
                                            <td><?php echo $user->user_role; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php } ?>

                            <a href="<?php echo base_url('/admin/staff/edit/1'); ?>" class="btn btn-primary m-t-md">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
