<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CodeIgniter | Insert Student Details into MySQL Database</title>
 <!--link the bootstrap css file-->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

 <style type="text/css">
 .colbox {
 margin-left: 0px;
 margin-right: 0px;
 }
 </style>

 <script type="text/javascript">
 //load datepicker control onfocus
 $(function() {
    $("#registeredDate").datepicker();
 });
 </script>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="home-slider">
    <div class="container">
        <div class="main-slider">
            <div class="slide-text">
                <h1>Hey There!</h1>
                <h3 class="section-lead">Welcome to the NYPFreshmanStarterKit site! Another big welcome to you joining the NYP family! Lots of events and quizzes with rewards are waiting for you to participate and walk away with. Start exploring now!</h3>
                <a href="#" class="btn btn-common">LOGIN</a>
            </div>
            <img src="<?php echo base_url(); ?>assets/images/home/slider/hill.png" class="slider-hill" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/house.png" class="slider-house" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/sun.png" class="slider-sun" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
            <img src="<?php echo base_url(); ?>assets/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->

<div class="container">
 <div class="row">
 <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
 <legend>Add Student Details</legend>
<?php
$attributes = array("class" => "form-horizontal", "id" => "eventform", "name" =>
"eventform");
 echo form_open("eventCreate/index", $attributes);?>
 <fieldset>

 <div class="form-group">
 <div class="row colbox">

 <div class="col-lg-4 col-sm-4">
 <label for="studentno" class="control-label">Student No</label>
 </div>
 <div class="col-lg-8 col-sm-8">
<input id="studentno" name="studentno" placeholder="studentno" type="text"
class="form-control" value="<?php echo set_value('studentno'); ?>" />
 <span class="text-danger"><?php echo form_error('studentno'); ?></span>
 </div>
 </div>
 </div>
 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="studentname" class="control-label">Student Name</label>
 </div>
 <div class="col-lg-8 col-sm-8">
<input id="studentname" name="studentname" placeholder="studentname" type="text"
class="form-control" value="<?php echo set_value('studentname'); ?>" />
 <span class="text-danger"><?php echo form_error('studentname'); ?></span>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="school" class="control-label">School</label>
 </div>
 <div class="col-lg-8 col-sm-8">
 <?php
 $attributes = 'class = "form-control" id = "school"';
 echo form_dropdown('category',$category,set_value('category'),$attributes);?>
 <span class="text-danger"><?php echo form_error('school'); ?></span>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="registeredDate" class="control-label">Registered Date</label>
 </div>
 <div class="col-lg-8 col-sm-8">
<input id="registeredDate" name="registeredDate" placeholder="registeredDate"
type="text" class="form-control" value="<?php echo set_value('registeredDate'); ?>" />
 <span class="text-danger"><?php echo form_error('registeredDate'); ?></span>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
<input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert"/>
<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger"
value="Cancel" />
 </div>
 </div>

 </fieldset>
 <?php echo form_close(); ?>
 <?php echo $this->session->flashdata('msg'); ?>
 </div>
 </div>
</div>
</body>
</html>
<!--/#action-->
