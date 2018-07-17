<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Studentmodel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Student Register',
		);

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules(
			'email', 'Email',
			'required|valid_email|is_unique[student.student_email]',
				array(
	                'required'      => 'You have not provided %s.',
	                'is_unique'     => 'This %s already exists.'
	        )
		);

        if ($this->form_validation->run() == FALSE) {
            //fail validation
            $this->load->template('layouts/student/register', $data);
        } else {
            //pass validation
            $data = array(
	            'student_name' => $this->input->post('name'),
	            'student_email' => $this->input->post('email'),
	            'password' => $this->input->post('password')
			);
            //insert the form data into database
            $this->db->insert('student', $data);
            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Student details added to Database!!!</div>');
            redirect('register/success');
        }


	}

	function success() {
		$data = array(
			'view_name' => 'Success',
		);

		$this->load->template('layouts/student/success', $data);
	}
}
