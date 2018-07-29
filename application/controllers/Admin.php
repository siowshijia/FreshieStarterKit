<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Admin Login',
		);

		// set validation rules
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->template('layouts/admin/admin/login', $data);

		} else {

			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->adminModel->resolve_user_login($email, $password)) {

				$user_id = $this->adminModel->get_user_id_from_username($email);
				$user    = $this->adminModel->get_user($user_id);

				// set session user datas
				$_SESSION['user_id']      = (int)$user->staff_id;
				$_SESSION['email']        = (string)$user->staff_email;
				$_SESSION['logged_in']    = (bool)true;

				redirect('/admin/dashboard');

			} else {

				$data['error_msg'] = 'Wrong username or password.';
				$this->load->template('layouts/admin/admin/login', $data);

			}
		}
	}

	public function dashboard()
	{
		$data = array(
			'view_name' => 'Admin Dashboard',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['users'] = $this->adminModel->get_all_staff();

		} else {

			$data['logged_in'] = false;
		}

		$this->load->template('layouts/admin/admin/dashboard', $data);
	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Staff',
		);

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('staff_number', 'Staff Number', 'required');
        $this->form_validation->set_rules(
			'email', 'Email',
			'required|valid_email|is_unique[student.student_email]',
				array(
	                'required'      => 'You have not provided %s.',
	                'is_unique'     => 'This %s already exists.'
	        )
		);
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/admin/add', $data);

        } else {
			$name           = $this->input->post('name');
			$staff_number   = $this->input->post('staff_number');
			$email          = $this->input->post('email');
			$contact_number = $this->input->post('contact_number');
			$password       = $this->input->post('password');

			if ($this->adminModel->add_staff($name, $staff_number, $email, $contact_number, $password)) {

				redirect('/admin/dashboard');

			} else {

				redirect('/admin/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Staff',
		);

		if (isset($id)) {

			$data['logged_in'] = true;
			$data['user'] = $this->adminModel->get_user($id);

			//set validation rules
	        $this->form_validation->set_rules('name', 'Name', 'required');
	        $this->form_validation->set_rules('staff_number', 'Admission Number', 'required');
	        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('contact_number', 'Contact Number', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/admin/edit', $data);

	        } else {
				$name           = $this->input->post('name');
				$staff_number   = $this->input->post('staff_number');
				$email          = $this->input->post('email');
				$contact_number = $this->input->post('contact_number');

				if ($this->adminModel->update_staff($id, $name, $staff_number, $email, $contact_number)) {

					redirect('/admin/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/admin/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/admin/edit', $data);
		}
	}

	public function delete($id) {

		$this->adminModel->delete_staff($id);
		redirect('/admin/dashboard');

	}

	public function logout() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			$data = array(
				'view_name' => 'Student Login',

			);
			$this->load->template('layouts/student/login', $data);

		} else {

			redirect('/');

		}

	}
}
