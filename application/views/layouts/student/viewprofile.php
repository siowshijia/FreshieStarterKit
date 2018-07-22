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
        <form class="form-viewprofile" action="">
            <h2>Your profile details are as follows:</h2>
            <div class="form-group">
                <label for="stud_name" class="sr-only">Name</label>
                <input type="text" id="stud_name" class="form-control" placeholder="Name" required="required" autofocus="" <?php echo $login_student[$i]->student_name; ?> readonly>
            </div>
            <div class="form-group">
                <label for="stud_admin" class="sr-only">Admission No.</label>
                <input type="number" id="stud_admin" class="form-control" placeholder="Admission No." required="required" autofocus="" <?php echo $login_student[$i]->admission_number; ?> readonly>
            </div>
            <div class="form-group">
                <label for="stud_email" class="sr-only">Email address</label>
                <input type="email" id="stud_email" class="form-control" placeholder="Email address" required="required" autofocus="" <?php echo $login_student[$i]->student_email; ?> readonly>
            </div>
            <div class="form-group">
                <label for="stud_contact" class="sr-only">Contact No.</label>
                <input type="number" id="stud_contact" class="form-control" placeholder="Contact No." required="" autofocus="" <?php echo $login_student[$i]->student_contact_number; ?> readonly>
            </div>
            <div class="form-group">
                <label for="stud_interest" class="sr-only">Interests</label>
                <textarea id="stud_interest" class="form-control" placeholder="Interests" required="" autofocus="" rows="10" cols="30" <?php echo $login_student[$i]->interest; ?> readonly>
                </textarea> 
            </div>
            <div class="form-group">
                <label for="stud_points" class="sr-only">Points</label>
                <input type="number" id="stud_points" class="form-control" placeholder="Points" required="" autofocus="" <?php echo $login_student[$i]->points; ?> readonly>
            </div>
            <row id="account">
            <button class="btn btn-primary btn-block" type="submit">Sign out</button>
            <button class="btn btn-primary btn-block" type="submit">Update Profile</button>
            <button class="btn btn-primary btn-block" type="submit">Change password</button>
            <button class="btn btn-primary btn-block" type="submit">View Points Statement</button>            
            </row>
            <row id="fun">
            <button class="btn btn-primary btn-block" type="submit">Events</button>
            <button class="btn btn-primary btn-block" type="submit">Quizzes</button>
            <button class="btn btn-primary btn-block" type="submit">Rewards</button>
            </row>
        </form>
    </div>
</section>
<!--/.section-base-->