<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewStudentProfile extends CI_Controller {

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

	public function index($studemail, $studpass)
	{
        $data = array(
            'view_name' => 'Student View Profile',
        );
        
        //get a particular student profile
        $data['login_student'] = $this->Studentmodel->login_student($studemail, $studpass);
        $this->load->template('layouts/student/viewprofile', $data);
        

        
    }
    
}
