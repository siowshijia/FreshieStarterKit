<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Student extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminStudentModel');
    }

	public function dashboard()
	{
		$data = array(
			'view_name' => 'Student Dashboard',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$data['users'] = $this->adminStudentModel->get_all_student();

		} else {

			$data['logged_in'] = false;
		}

		$this->load->template('layouts/admin/student/dashboard', $data);
	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Student',
		);

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|callback_alpha_only_space');
        $this->form_validation->set_rules('admission_number', 'Admission Number', 'required|callback_valid_admin_no');
        $this->form_validation->set_rules(
			'email', 'Email',
			'required|valid_email|is_unique[student.student_email]',
				array(
	                'is_unique'     => 'This %s already exists.'
	        )
		);
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'required|callback_valid_contact_no');
		$this->form_validation->set_rules('interest', 'Interest', 'required');
		$this->form_validation->set_rules('points', 'Points', 'required|numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/student/add', $data);

        } else {
			$name             = $this->input->post('name');
			$admission_number = $this->input->post('admission_number');
			$email            = $this->input->post('email');
			$contact_number   = $this->input->post('contact_number');
			$interest         = $this->input->post('interest');
			$points           = $this->input->post('points');
			$password         = $this->input->post('password');

			if ($this->adminStudentModel->add_student($name, $admission_number, $email, $contact_number, $interest, $points, $password)) {

				$this->session->set_flashdata('add-student-msg', '<div class="alert alert-success text-center">You have successfully added a student.</div>');

				redirect('/admin/student/dashboard');

			} else {

				redirect('/admin/student/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Student',
		);

		if (isset($id)) {

			$data['logged_in'] = true;
			$data['user'] = $this->adminStudentModel->get_user($id);

			//set validation rules
			$this->form_validation->set_rules('name', 'Name', 'required|callback_alpha_only_space');
	        $this->form_validation->set_rules('admission_number', 'Admission Number', 'required|callback_valid_admin_no');
	        $this->form_validation->set_rules('email', 'Email','required|valid_email');
			$this->form_validation->set_rules('contact_number', 'Contact Number', 'required|callback_valid_contact_no');
			$this->form_validation->set_rules('interest', 'Interest', 'required');
			$this->form_validation->set_rules('points', 'Points', 'required|numeric');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/student/edit', $data);

	        } else {
				$name             = $this->input->post('name');
				$admission_number = $this->input->post('admission_number');
				$email            = $this->input->post('email');
				$contact_number   = $this->input->post('contact_number');
				$interest         = $this->input->post('interest');
				$points           = $this->input->post('points');

				if ($this->adminStudentModel->update_student($id, $name, $admission_number, $email, $contact_number, $interest, $points)) {

					$this->session->set_flashdata('edit-student-msg', '<div class="alert alert-success text-center">The student&apos;s details has been updated.</div>');

					redirect('/admin/student/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/student/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/student/edit', $data);
		}
	}

	public function delete($id) {

		$this->adminStudentModel->delete_student($id);
		$this->session->set_flashdata('delete-student-msg', '<div class="alert alert-success text-center">Delete successfully.</div>');
		redirect('/admin/student/dashboard');

	}

	public function alpha_only_space($str)
	{
		if (!preg_match("/^([-a-z ])+$/i", $str))
		{
			$this->form_validation->set_message('alpha_only_space', 'The %s field must
			contain only alphabets or spaces');
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
			$this->form_validation->set_message('valid_admin_no', 'The %s field must
			be in this format: 123456A');
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
}
