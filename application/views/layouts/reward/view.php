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
        <?php echo $this->session->flashdata('msg'); ?>
        <?php if ($rewards) { ?>
            <div class="row flex-row">
                <?php foreach ($rewards as $reward) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 m-b-md">
                        <div class="product">
                            <img src="<?php echo base_url('/uploads/' . $reward->image); ?>" alt="">
                            <h2><?php echo $reward->reward_name; ?></h2>
                            <p><b><?php echo $reward->cost_points; ?> Points</b></p>
                            <p><?php echo $reward->description; ?></p>

                            <?php if (isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])) { ?>
                                <a href="<?php echo base_url('/reward/redeem/' . $_SESSION['user_id'] . '/' .  $reward->reward_id); ?>" class="btn btn-common">Redeem</a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-common" data-toggle="modal" data-target="#alertModal">Redeem</button>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>

<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title text-danger">Alert!</h1>
                <h4 class="m-b-md">Please login to redeem!</h4>
                <a href="<?php echo base_url('/student/login'); ?>" class="btn btn-primary m-b-sm">Login</a>
            </div>
        </div>
    </div>
</div>
