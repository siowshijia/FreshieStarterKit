<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('studentModel');
    }

	public function register()
	{
		$data = array(
			'view_name' => 'Student Register',
		);

		$this->load->library('form_validation');

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
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/student/register', $data);
        } else {
			$name     = $this->input->post('name');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->studentModel->create_user($name, $email, $password)) {

				redirect('student/success');

			} else {

				$data['error_msg'] = 'Some problems occured, please try again.';
				$this->load->template('layouts/student/register', $data);
			}
        }
	}

	function success() {
		$data = array(
			'view_name' => 'Success',
		);

		$this->load->template('layouts/student/success', $data);
	}
}
