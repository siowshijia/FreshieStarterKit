
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
    <div class="container-sm">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Quiz Name</th>
                    <td>Attendance Quiz</td>
                </tr>
                <tr>
                    <th>Question 1</th>
                    <td>True</td>
                </tr>
                <tr>
                    <th>Question 2</th>
                    <td>False</td>
                </tr>
                <tr>
                    <th>Question 3</th>
                    <td>True</td>
                </tr>
                <tr>
                    <th>Score</th>
                    <td>2/3</td>
                </tr>
            </table>
        </div>

        <div class="text-center">
            <a href="<?php echo base_url('quizzes'); ?>" class="btn btn-primary">Back to Quizzes</a>
            <br>
            <a href="<?php echo base_url('student/profile'); ?>" class="btn btn-primary m-t-md">Back to Profile</a>
        </div>
    </div>
</section>
