<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title text-center"><?php echo $view_name; ?></h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-xs">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
            <form class="form-signin" action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="category" class="sr-only">Category</label>
                    <select class="form-control" name="category">
                        <option disabled>Select Category</option>
                        <option value="Admin" <?php echo ($quiz->quiz_cat_id === 'Admin') ? 'selected' : '' ; ?>>Admin</option>
                        <option value="Others" <?php echo ($quiz->quiz_cat_id === 'Event Manager') ? 'selected' : '' ; ?>>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="question" class="sr-only">Question</label>
                    <textarea name="question" cols="40" rows="2" id="answer" class="form-control" placeholder="Answer"><?php echo $quiz->quiz_question; ?></textarea>
                </div> 
                <div class="form-group">
                    <label for="answer" class="sr-only">Answer</label>
                    <textarea name="answer" cols="40" rows="2" id="answer" class="form-control" placeholder="Answer"><?php echo $quiz->quiz_answer; ?></textarea>
                </div>

                <button class="btn btn-primary btn-block" type="submit">Save</button>
                <a href="<?php echo base_url('/admin/quiz/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>