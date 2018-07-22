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
        <form class="form-viewstudentsrewards" action="">
            <h2>Students Rewards Page</h2>
 <table>
 <thead>
 <tr>
 <th>Reward ID</th>
 <th>Reward Name</th>
 <th>Cost Points</th>
 <th>Quantity</th>
 <th>Description</th>
 <th>Expired Date</th>
 </tr>
 </thead>
 <tbody>
 <?php for ($i = 0; $i < count($rewards_list); $i++) { ?>
 <tr>
 <td><?php echo $rewards_list[$i]->reward_id; ?></td>
 <td><?php echo $rewards_list[$i]->reward_name; ?></td>
 <td><?php echo $rewards_list[$i]->cost_points; ?></td>
 <td><?php echo $rewards_list[$i]->quantity; ?></td>
 <td><?php echo $rewards_list[$i]->description; ?></td>
 <td><?php echo $rewards_list[$i]->expired_date; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </form>
 </div>
</section>
<!--/.section-base-->