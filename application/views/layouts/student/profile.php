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
            <?php echo $this->session->flashdata('edit-profile-msg'); ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $user->student_name; ?></td>
                    </tr>
                    <tr>
                        <th>Admission Number</th>
                        <td><?php echo $user->admission_number; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $user->student_email; ?></td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td><?php echo $user->student_contact_number; ?></td>
                    </tr>
                    <tr>
                        <th>Interest</th>
                        <td><?php echo $user->interest; ?></td>
                    </tr>
                    <tr>
                        <th>Points</th>
                        <td><?php echo $user->points; ?></td>
                    </tr>
                </table>
            </div>

            <?php if ($transactions) { ?>
                <div class="table-responsive m-t-md">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Product Name</th>
                            <th>Amount</th>
                        </tr>

                        <?php foreach ($transactions as $transaction) { ?>
                            <tr>
                                <td><?php echo $transaction->reward_name; ?></td>
                                <td><?php echo $transaction->amount ? '-'.$transaction->amount : '+'.$transaction->amount; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            <?php } ?>

            <div class="text-center m-b-md">
                <a href="<?php echo base_url('/student/edit'); ?>" class="btn btn-common">Edit Profile</a>
            </div>

            <div class="text-center">
                <a href="<?php echo base_url('/student/editpassword'); ?>" class="btn btn-common">Change Password</a>
            </div>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/student/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
