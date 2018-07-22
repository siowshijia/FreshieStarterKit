<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewStudentPass extends CI_Controller {

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

	public function index($studemail)
	{
        $data = array(
			'view_name' => 'Student View Password',
        );
        
	//get a particular student password
    $data['studpass'] = $this->Studentmodel->get_student_password($studemail);
    $this->load->template('layouts/student/viewpassword', $data);
    
    }
    
}
