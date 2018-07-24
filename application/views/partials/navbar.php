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
                    <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="<?php echo activate_menu('student'); ?>">
                        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                            <a href="<?php echo base_url('/student/profile'); ?>">Profile</a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('/student/login'); ?>">Profile</a>
                        <?php } ?>
                    </li>
                    <li class="<?php echo activate_menu('quiz'); ?>"><a href="<?php echo base_url('/quiz'); ?>">Quizzes</a></li>
                    <li class="<?php echo activate_menu('event'); ?>"><a href="<?php echo base_url('/event'); ?>">Event</a></li>
                    <li class="<?php echo activate_menu('reward'); ?>"><a href="<?php echo base_url('/reward'); ?>">Reward</a></li>
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                        <li><a href="<?php echo base_url('/student/logout'); ?>">Log Out</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
