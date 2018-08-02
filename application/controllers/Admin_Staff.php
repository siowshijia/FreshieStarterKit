<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Staff extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminStaffModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Staff Login',
		);

		// set validation rules
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->template('layouts/admin/staff/login', $data);

		} else {

			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->adminStaffModel->resolve_user_login($email, $password)) {

				$user_id = $this->adminStaffModel->get_user_id_from_username($email);
				$user    = $this->adminStaffModel->get_user($user_id);

				// set session user datas
				$_SESSION['user_id']      = (int)$user->staff_id;
				$_SESSION['email']        = (string)$user->staff_email;
				$_SESSION['user_role']    = (string)$user->user_role;
				$_SESSION['logged_in']    = (bool)true;

				redirect('/admin');

			} else {

				$data['error_msg'] = 'Wrong username or password.';
				$this->load->template('layouts/admin/staff/login', $data);

			}
		}
	}

	public function dashboard()
	{
		$data = array(
			'view_name' => 'Staff Dashboard',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['users'] = $this->adminStaffModel->get_all_staff();

		} else {

			$data['logged_in'] = false;
		}

		$this->load->template('layouts/admin/staff/dashboard', $data);
	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Staff',
		);

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|callback_alpha_only_space');
        $this->form_validation->set_rules('staff_number', 'Staff Number', 'required|callback_alpha_only_space');
        $this->form_validation->set_rules(
			'email', 'Email',
			'required|valid_email|is_unique[student.student_email]',
				array(
	                'is_unique'     => 'This %s already exists.'
	        )
		);
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'required|numeric');
		$this->form_validation->set_rules('user_role', 'User role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/staff/add', $data);

        } else {
			$name           = $this->input->post('name');
			$staff_number   = $this->input->post('staff_number');
			$email          = $this->input->post('email');
			$contact_number = $this->input->post('contact_number');
			$user_role      = $this->input->post('user_role');
			$password       = $this->input->post('password');

			if ($this->adminStaffModel->add_staff($name, $staff_number, $email, $contact_number, $user_role, $password)) {

				$this->session->set_flashdata('add-staff-msg', '<div class="alert alert-success text-center">You have successfully added a staff.</div>');

				redirect('/admin/staff/dashboard');

			} else {

				redirect('/admin/staff/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Staff',
		);

		if (isset($id)) {

			$data['logged_in'] = true;
			$data['user'] = $this->adminStaffModel->get_user($id);

			//set validation rules
			$this->form_validation->set_rules('name', 'Name', 'required|callback_alpha_only_space');
	        $this->form_validation->set_rules('staff_number', 'Staff Number', 'required|callback_alpha_only_space');
	        $this->form_validation->set_rules('email', 'Email','required|valid_email');
			$this->form_validation->set_rules('contact_number', 'Contact Number', 'required|numeric');
			$this->form_validation->set_rules('user_role', 'User role', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/staff/edit', $data);

	        } else {
				$name           = $this->input->post('name');
				$staff_number   = $this->input->post('staff_number');
				$email          = $this->input->post('email');
				$contact_number = $this->input->post('contact_number');
				$user_role      = $this->input->post('user_role');

				if ($this->adminStaffModel->update_staff($id, $name, $staff_number, $email, $contact_number, $user_role)) {

					$this->session->set_flashdata('edit-staff-msg', '<div class="alert alert-success text-center">The staff&apos;s details has been updated.</div>');

					redirect('/admin/staff/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/staff/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/staff/edit', $data);
		}
	}

	public function delete($id) {

		$this->adminStaffModel->delete_staff($id);
		$this->session->set_flashdata('delete-staff-msg', '<div class="alert alert-success text-center">Deleted Successfully.</div>');
		redirect('/admin/staff/dashboard');

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

	public function alpha_only_space($str)
	{
		if (preg_match('/[^a-z_\-0-9]/i', $str))
		{
			$this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
