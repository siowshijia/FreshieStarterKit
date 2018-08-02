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
        <?php if (isset($users)) { ?>

            <?php echo $this->session->flashdata('add-student-msg'); ?>
            <?php echo $this->session->flashdata('edit-student-msg'); ?>
            <?php echo $this->session->flashdata('delete-student-msg'); ?>

            <div class="m-b-md">
                <a href="<?php echo base_url('/admin/student/add'); ?>" class="btn btn-primary">Add Student</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Admission Number</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Interest</th>
                        <th>Points</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->student_id; ?></td>
                            <td><?php echo $user->student_name; ?></td>
                            <td><?php echo $user->admission_number; ?></td>
                            <td><?php echo $user->student_email; ?></td>
                            <td><?php echo $user->student_contact_number; ?></td>
                            <td><?php echo $user->interest; ?></td>
                            <td><?php echo $user->points; ?></td>
                            <td>
                                <a href="<?php echo base_url('/admin/student/edit') . '/' . $user->student_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url('/admin/student/delete') . '/' . $user->student_id; ?>" class="btn btn-primary">Delete</a>
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
