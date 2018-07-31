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
        <?php if (isset($rewards)) { ?>
            <div class="m-b-md">
                <a href="<?php echo base_url('/reward/add'); ?>" class="btn btn-primary">Add Reward</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cost Points</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Expired Date</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rewards as $reward) { ?>
                        <tr>
                            <td><?php echo $reward->reward_id; ?></td>
                            <td><?php echo $reward->reward_name; ?></td>
                            <td><?php echo $reward->cost_points; ?></td>
                            <td><?php echo $reward->quantity; ?></td>
                            <td><?php echo $reward->description; ?></td>
                            <td><?php echo $reward->expired_date; ?></td>
                            <td>
                                <a href="<?php echo base_url('/reward/edit') . '/' . $reward->reward_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url('/reward/delete') . '/' . $reward->reward_id; ?>" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
