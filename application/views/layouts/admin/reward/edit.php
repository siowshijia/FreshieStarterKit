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
        <?php if (isset($reward) && isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <form class="form-edit" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $reward->reward_name; ?>">
                </div>
                <div class="form-group">
                    <label for="points" class="sr-only">Cost Points</label>
                    <input type="text" name="points" id="points" class="form-control" placeholder="Cost Points" value="<?php echo $reward->cost_points; ?>">
                </div>
                <div class="form-group">
                    <label for="qty" class="sr-only">Quantity</label>
                    <input type="text" name="qty" id="qty" class="form-control" placeholder="Quantity" value="<?php echo $reward->quantity; ?>">
                </div>
                <div class="form-group text-center">
                    <div class="fileinput fileinput-exists" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                            <img src="<?php echo base_url('/uploads/') . $reward->image; ?>" alt="">
                        </div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image">
                            </span>
                        </div>
                        <p class="small m-b-none"><i>*Max. file size: 1MB</i></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="8" cols="80" placeholder="Description"><?php echo $reward->description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="expired_date" class="sr-only">Expired Date</label>
                    <input type="text" name="expired_date" id="expired_date" class="form-control datepicker" placeholder="Expired Date" value="<?php echo $reward->expired_date; ?>">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save</button>
                <a href="<?php echo base_url('/reward/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login as Adminstrator to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
