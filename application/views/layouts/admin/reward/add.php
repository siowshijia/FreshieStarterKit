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
        <?php //if (isset($user)) { ?>
            <form class="form-edit-student" action="" method="post">
                <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="points" class="sr-only">Cost Points</label>
                    <input type="text" name="points" id="points" class="form-control" placeholder="Cost Points">
                </div>
                <div class="form-group">
                    <label for="qty" class="sr-only">Quantity</label>
                    <input type="text" name="qty" id="qty" class="form-control" placeholder="Quantity">
                </div>
                <div class="form-group text-center">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="8" cols="80" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="expired_date" class="sr-only">Expired Date</label>
                    <input type="text" name="expired_date" id="expired_date" class="form-control" placeholder="Expired Date">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
            </form>
        <?php //} else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/admin/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php //} ?>
    </div>
</section>
