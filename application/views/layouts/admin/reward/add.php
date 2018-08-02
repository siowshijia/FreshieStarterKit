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
        <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <form class="form-add" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="points">Cost Points</label>
                    <input type="text" name="points" id="points" class="form-control" value="<?php echo set_value('points'); ?>">
                    <span class="text-danger"><?php echo form_error('points'); ?></span>
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="text" name="qty" id="qty" class="form-control" value="<?php echo set_value('qty'); ?>">
                    <span class="text-danger"><?php echo form_error('qty'); ?></span>
                </div>
                <div class="form-group text-center m-t-lg">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" accept="image/*">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <p class="small m-b-none"><i>*Max. file size: 1MB</i></p>
                        <span class="text-danger"><?php echo form_error('image'); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="8" cols="80"><?php echo set_value('description'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                </div>
                <div class="form-group">
<<<<<<< HEAD
                    <label for="expired_date" class="sr-only">Expired Date</label>
                    <input type="text" name="expired_date" id="expired_date" class="form-control datepicker" placeholder="Expired Date">
=======
                    <label for="expired_date">Expired Date</label>
                    <input type="text" name="expired_date" id="expired_date" class="form-control datepicker" value="<?php echo set_value('expired_date'); ?>">
                    <span class="text-danger"><?php echo form_error('expired_date'); ?></span>
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
                <a href="<?php echo base_url('/admin/reward/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Administrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
