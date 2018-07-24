<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="contact-info bottom">
                        <h2>Site Map</h2>
                        <ul class="p-l-none two-column">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Quizzes</a></li>
                            <li><a href="#">Rewards</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
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
    <script type="text/javascript" src="<?php echo base_url("assets/js/lightbox.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/wow.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/main.js"); ?>"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
    //load datepicker control onfocus
    $(function() {
    $("#eventDate").datepicker();
    });
    </script>
</body>
</html>
