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
        <?php if(validation_errors()) { ?>
            <div class="alert alert-danger"><?= validation_errors();?></div>
        <?php } ?>
        <?php if(isset($msg) && $msg != '') { ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php } ?>

        <div class="m-b-md">
            <a href="<?php echo base_url('/admin/add'); ?>" class="btn btn-primary">Add Staff</a>
        </div>

        <?php if (isset($users)) { ?>
            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Staff Number</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->staff_id; ?></td>
                            <td><?php echo $user->staff_name; ?></td>
                            <td><?php echo $user->staff_number; ?></td>
                            <td><?php echo $user->staff_email; ?></td>
                            <td><?php echo $user->staff_contact_number; ?></td>
                            <td>
                                <a href="<?php echo base_url('/admin/edit') . '/' . $user->staff_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url('/admin/delete') . '/' . $user->staff_id; ?>" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/admin'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
