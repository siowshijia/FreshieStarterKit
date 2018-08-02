<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="contact-info bottom">
                        <h2>Site Map</h2>
                        <ul class="p-l-none two-column">
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
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:welcome@nyp.edu.sg">welcome@nyp.edu.sg</a> <br>
                        Tel: 64515115
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Address</h2>
                        <address>
                        180 Ang Mo Kio Avenue 8  <br>
                        Singapore (569830)
                        </address>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; <?php echo date('Y'); ?> NYPFreshmanStarterKit. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jasny-bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/datatables.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/responsive.bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-datepicker.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/lightbox.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/wow.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/main.js"); ?>"></script>
    
</body>
</html>
