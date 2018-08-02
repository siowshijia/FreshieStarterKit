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

        <?php echo $this->session->flashdata('add-staff-msg'); ?>
        <?php echo $this->session->flashdata('edit-staff-msg'); ?>
        <?php echo $this->session->flashdata('delete-staff-msg'); ?>

        <?php if (isset($users)) { ?>
            <div class="m-b-md">
                <a href="<?php echo base_url('/admin/staff/add'); ?>" class="btn btn-primary">Add Staff</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Staff Number</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>User Role</th>
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
                            <td><?php echo $user->user_role; ?></td>
                            <td>
                                <a href="<?php echo base_url('/admin/staff/edit') . '/' . $user->staff_id; ?>" class="btn btn-primary">Edit</a>
<<<<<<< HEAD
                                <a href="<?php echo base_url('/admin/staff/delete') . '/' . $user->staff_id; ?>" class="btn btn-primary">Delete</a>
=======
                                <a href="<?php echo base_url('/admin/staff/delete') . '/' . $user->staff_id; ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
