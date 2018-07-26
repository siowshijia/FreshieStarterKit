
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="home-slider">
    <div class="container">
        <div class="main-slider">
            <div class="slide-text">
                <h1>Hey There!</h1>
                <h3 class="section-lead">Welcome to the NYPFreshmanStarterKit site! Another big welcome to you joining the NYP family! Lots of events and quizzes with rewards are waiting for you to participate and walk away with. Start exploring now!</h3>
                <a href="#" class="btn btn-common"></a>
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
 <legend>Add Event Details</legend>
<?php
$attributes = array("class" => "form-horizontal", "id" => "eventform", "name" =>
"eventform");
 echo form_open("eventCreate/index", $attributes);?>
 <fieldset>

 <div class="form-group">
 <div class="row colbox">

 <div class="col-lg-4 col-sm-4">
 <label for="eventname" class="control-label">Event Name</label>
 </div>
 <div class="col-lg-8 col-sm-8">
<input id="eventname" name="eventname" placeholder="Event Name" type="text"
class="form-control" value="<?php echo set_value('eventname'); echo $events[0]->eventname;?>" />
 <span class="text-danger"><?php echo form_error('eventname'); ?></span>
 </div>
 </div>
 </div>
 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="eventvenue" class="control-label">Event Venue</label>
 </div>
 <div class="col-lg-8 col-sm-8">
<input id="eventvenue" name="eventvenue" placeholder="Event Venue" type="text"
class="form-control" value="<?php echo set_value('eventvenue'); echo $events[0]->eventvenue;?>" />
 <span class="text-danger"><?php echo form_error('eventvenue'); ?></span>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="events" class="control-label">Event Category</label>
 </div>
 <div class="col-lg-8 col-sm-8">
 <?php
 $attributes = 'class = "form-control" id = "events"';?>
 <select name="category">
  <option value="sports">Sports</option>
  <option value="arts">Arts</option>
 </select>
 <span class="text-danger"><?php echo form_error('events'); ?></span>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="row colbox">
 <div class="col-lg-4 col-sm-4">
 <label for="eventDate" class="control-label">Event Date</label>
 </div>
 <div class="col-lg-8 col-sm-8">
    <input id="eventDate" name="eventDate" placeholder="Event Date"
    type="text" class="form-control" value="<?php echo set_value('eventDate'); echo $events[0]->eventDatetime; ?>" />
 <span class="text-danger"><?php echo form_error('eventDate'); ?></span>
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


<!--/#action-->
