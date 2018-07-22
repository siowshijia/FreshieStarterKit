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
        <form class="form-viewpointshistory" action="">
            <h2>Students Points Statement:</h2>
 <table>
 <thead>
 <tr>
 <th>Transaction ID</th>
 <th>Reward ID</th>
 <th>Student ID</th>
 <th>Transaction Type</th>
 <th>Amount</th>
 <th>Data</th>
 </tr>
 </thead>
 <tbody>
 <?php for ($i = 0; $i < count($student_transaction); $i++) { ?>
 <tr>
 <td><?php echo $student_transaction[$i]->transaction_id; ?></td>
 <td><?php echo $student_transaction[$i]->reward_id; ?></td>
 <td><?php echo $student_transaction[$i]->student_id; ?></td>
 <td><?php echo $student_transaction[$i]->transaction_type; ?></td>
 <td><?php echo $student_transaction[$i]->amount; ?></td>
 <td><?php echo $student_transaction[$i]->data; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </form>
 </div>
</section>
<!--/.section-base-->