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
        $this->form_validation->set_rules('name', 'Name', 'required|validation_msg');
        $this->form_validation->set_rules(
			'email', 'Email',
			'required|valid_email|is_unique[student.student_email]|validation_msg',
				array(
	                'required'      => 'You have not provided %s.',
	                'is_unique'     => 'This %s already exists.'
	        )
		);

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|validation_msg');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|validation_msg');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/student/register', $data);

        } else {

			$name     = $this->input->post('name');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$password = $this->input->post('confirm_password');

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

	public function login()
	{
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
				$_SESSION['user_role']    = 'student';

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



	public function profile()
	{
		$data = array(
			'view_name' => 'Student Profile',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['user'] = $this->studentModel->get_user($_SESSION['user_id']);

		} else {

			$data['logged_in'] = false;

		}

        $this->load->template('layouts/student/profile', $data);

	}

	public function points()
	{
		$data = array(
			'view_name' => 'Student Points Statement',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['user'] = $this->studentModel->get_student_points_statement($_SESSION['user_id']);

		} else {

			$data['logged_in'] = false;

		}

        $this->load->template('layouts/student/points', $data);

	}

	public function editpassword() {

		$data = array(
			'view_name' => 'Edit Student Password',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['user'] = $this->studentModel->get_user($_SESSION['user_id']);

			//set validation rules
	        $this->form_validation->set_rules('old_stud_pass', 'Current Password', 'required');
	        $this->form_validation->set_rules('new_stud_pass', 'New Password', 'required|min_length[6]');
	        $this->form_validation->set_rules('confirm_new_stud_pass', 'Confirm New Password', 'required|matches[new_stud_pass]');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/student/editpassword', $data);

	        } else {

				$password           = $this->input->post('old_stud_pass');
				$password     = $this->input->post('new_stud_pass');
				$password          = $this->input->post('confirm_new_stud_pass');
				$id             = $_SESSION['user_id'];

				if ($this->studentModel->update_userpass($id, $password)) {

					redirect('student/profile');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/student/editpassword', $data);

				}

	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/student/editpassword', $data);

		}

	}

	public function edit() {

		$data = array(
			'view_name' => 'Edit Student Profile',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['user'] = $this->studentModel->get_user($_SESSION['user_id']);

			//set validation rules
	        $this->form_validation->set_rules('stud_name', 'Name', 'required');
	        $this->form_validation->set_rules('adm_number', 'Admission Number', 'required|callback_valid_admin_no');
	        $this->form_validation->set_rules('stud_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('contact_number', 'Contact Number','required|callback_valid_contact_no');
			$this->form_validation->set_rules('interest', 'Interest', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/student/edit', $data);

	        } else {

				$name           = $this->input->post('stud_name');
				$adm_number     = $this->input->post('adm_number');
				$email          = $this->input->post('stud_email');
				$contact_number = $this->input->post('contact_number');
				$interest       = $this->input->post('interest');
				$id             = $_SESSION['user_id'];

				if ($this->studentModel->update_user($id, $name, $adm_number, $email, $contact_number, $interest)) {

					redirect('student/profile');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/student/edit', $data);

				}

	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/student/edit', $data);

		}

	}

	public function alpha_only_space($str)
	{
		if (!preg_match("/^([-a-z ])+$/i", $str))
		{
			$this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function valid_admin_no($str)
	{
		if (!preg_match("/^([1]\d{5}[A-Z])+$/i", $str))
		{
			$this->form_validation->set_message('valid_admin_no', 'The %s field must be in this format: 123456A');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function valid_contact_no($str)
	{
		if (!preg_match("/^([6|8|9]\d{7})+$/i", $str))
		{
			$this->form_validation->set_message('valid_contact_no', 'Please enter a valid contact
			no. in the %s field.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function logout() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {

				unset($_SESSION[$key]);

			}

			redirect('/');

		} else {

			redirect('/');

		}

	}

}
