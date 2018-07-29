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
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Reward ID</th>
                        <th>Student ID</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                        <td><?php echo $user->transaction_id; ?></td>
                        <td><?php echo $user->reward_id; ?></td>
                        <td><?php echo $user->student_id; ?></td>
                        <td><?php echo $user->transaction_type; ?></td>
                        <td><?php echo $user->amount; ?></td>
                        <td><?php echo $user->data; ?></td>
                    </tr>
                </table>
            </div>

            <div class="text-center">
                <a href="<?php echo base_url('/student/profile'); ?>" class="btn btn-common">Back to Profile</a>
            </div>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/student/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
