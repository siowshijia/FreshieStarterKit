<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the student model
        $this->load->model('Studentmodel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Student Forgot Password',
		);
		$this->load->template('layouts/student/forgotpassword', $data);
    }
    
}
