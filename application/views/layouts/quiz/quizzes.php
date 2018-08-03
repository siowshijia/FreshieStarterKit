
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
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2 m-b-md">
                <div class="quiz-box">
                    <div class="front">
                        <div class="box1">
                            <div class="icon-circle"><span class="fa fa-list-ol"></span></div>
                            <h2>Quiz 1</h2>
                            <p>Quiz about school attendace.</p>
                            <a href="<?php echo base_url('quiz/attendance'); ?>" class="btn btn-common visible-xs visible-sm m-t-md">Read More</a>
                        </div>
                    </div>

                    <div class="back">
                        <div class="box2">
                            <a href="<?php echo base_url('quiz/attendance'); ?>" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 m-b-md">
                <div class="quiz-box">
                    <div class="front">
                        <div class="box1">
                            <div class="icon-circle"><span class="fa fa-list-ol"></span></div>
                            <h2>Quiz 2</h2>
                            <p>Quiz about school bursary.</p>
                            <a href="<?php echo base_url('quiz/bursary'); ?>" class="btn btn-common visible-xs visible-sm m-t-md">Read More</a>
                        </div>
                    </div>

                    <div class="back">
                        <div class="box2">
                            <a href="<?php echo base_url('quiz/bursary'); ?>" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
