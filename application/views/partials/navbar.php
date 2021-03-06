<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<header id="header">
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                	<img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="logo">
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'Admin') { ?>

                        <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="<?php echo activate_menu('student'); ?>"><a href="<?php echo base_url('/admin/student/dashboard'); ?>">Students</a></li>
                        <li class="<?php echo activate_menu('student'); ?>"><a href="<?php echo base_url('/admin/staff/dashboard'); ?>">Staff</a></li>
                        <li class="<?php echo activate_menu('quiz'); ?>"><a href="<?php echo base_url('/quiz'); ?>">Quizzes</a></li>
                        <li class="<?php echo activate_menu('event'); ?>"><a href="<?php echo base_url('/admin/event/dashboard'); ?>">Events</a></li>
                        <li class="<?php echo activate_menu('reward'); ?>"><a href="<?php echo base_url('/admin/reward/dashboard'); ?>">Rewards</a></li>
                    
                    <?php }else if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'Event Manager') { ?>

                        <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="<?php echo activate_menu('event'); ?>"><a href="<?php echo base_url('/manager/event/dashboard'); ?>">Events</a></li>


                        
                    <?php } else { ?>

                        <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="<?php echo activate_menu('student'); ?>">
                            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                                <a href="<?php echo base_url('/student/profile'); ?>">Profile</a>
                            <?php } else { ?>
                                <a href="<?php echo base_url('/student/login'); ?>">Profile</a>
                            <?php } ?>
                        </li>
                        <li class="<?php echo activate_menu('quiz'); ?>"><a href="<?php echo base_url('/quiz'); ?>">Quizzes</a></li>
                        <li class="<?php echo activate_menu('event'); ?>"><a href="<?php echo base_url('/event'); ?>">Events</a></li>
                        <li class="<?php echo activate_menu('reward'); ?>"><a href="<?php echo base_url('/reward'); ?>">Rewards</a></li>

                    <?php } ?>

                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                        <li><a href="<?php echo base_url('/logout'); ?>">Log Out</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
