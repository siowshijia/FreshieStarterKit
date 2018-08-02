
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Quiz Dashboard</h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-md">
        <?php if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) { ?>
            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>

        <?php echo $this->session->flashdata('add-quiz-msg'); ?>
        <?php echo $this->session->flashdata('edit-quiz-msg'); ?>
        <?php echo $this->session->flashdata('delete-quiz-msg'); ?>

            <div class="m-b-md">
                <a href="<?php echo base_url('/admin/quiz/add'); ?>" class="btn btn-primary">Add Quiz</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Question 1</th>
                        <th>Answer 1</th>
                        <th>Question 2</th>
                        <th>Answer 2</th>
                        <th>Question 3</th>
                        <th>Answer 3</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($quizzes as $quiz) { ?>
                        <tr>
                            <td><?php echo $quiz->quiz_id; ?></td>
                            <td><?php echo $quiz->quiz_name; ?></td>
                            <td><?php echo $quiz->description; ?></td>
                            <td><?php echo $quiz->question_1; ?></td>
                            <td><?php echo $quiz->answer_1; ?></td>
                            <td><?php echo $quiz->question_2; ?></td>
                            <td><?php echo $quiz->answer_2; ?></td>
                            <td><?php echo $quiz->question_3; ?></td>
                            <td><?php echo $quiz->answer_3; ?></td>
                            <td>
                                <a href="<?php echo base_url('/admin/quiz/edit') . '/' . $quiz->quiz_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="<?php echo base_url('/admin/quiz/delete') . '/' . $quiz->quiz_id; ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete?') ;">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/admin/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
