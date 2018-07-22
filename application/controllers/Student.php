<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('studentModel');
    }

	public function register()
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
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/student/register', $data);

        } else {
			$name     = $this->input->post('name');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->studentModel->create_user($name, $email, $password)) {

				$success_data = array(
					'view_name' => 'Register Success',
					'message'   => 'You have successfully register yourself.'
				);

				$this->load->template('layouts/student/success', $success_data);

			} else {

				$data['error_msg'] = 'Some problems occured, please try again.';
				$this->load->template('layouts/student/register', $data);
			}
        }
	}

	public function login() {

		$data = array(
			'view_name' => 'Student Login',
		);

		// set validation rules
		$this->form_validation->set_rules('stud_email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('stud_pass', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->template('layouts/student/login', $data);

		} else {

			$email    = $this->input->post('stud_email');
			$password = $this->input->post('stud_pass');

			if ($this->studentModel->resolve_user_login($email, $password)) {

				$user_id = $this->studentModel->get_user_id_from_username($email);
				$user    = $this->studentModel->get_user($user_id);

				// set session user datas
				$_SESSION['user_id']      = (int)$user->student_id;
				$_SESSION['email']        = (string)$user->student_email;
				$_SESSION['logged_in']    = (bool)true;

				$success_data = array(
					'view_name' => 'Login Success',
					'message'   => 'You have successfully logged in.'
				);

				$this->load->template('layouts/student/success', $success_data);

			} else {

				$data['error_msg'] = 'Wrong username or password.';
				$this->load->template('layouts/student/login', $data);

			}
		}
	}
}
