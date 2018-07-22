<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo isset($view_name) ? $view_name : 'Page'; ?> | NYPFreshmanStarterKit</title>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/animate.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/lightbox.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/main.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/responsive.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/master.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    //load datepicker control onfocus
    $(function() {
    $("#eventDate").datepicker();
    });
    </script>
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/ico/favicon.ico'; ?>">
</head><!--/head-->

<body>
