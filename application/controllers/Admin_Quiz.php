<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Quiz extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminQuizModel');
    }
	
    //
	public function dashboard()
	{
		$data = array(
			
			'view_name' => 'Quiz Dashboard',
		
		);

		if (isset($_SESSION['user_id'])) {
			
			$data['logged_in'] = true;
			$data['quizzes'] = $this->adminQuizModel->get_all_quiz();
		
		} else {

			$data['logged_in'] = false;
		}

		$this->load->template('layouts/admin/quiz/dashboard', $data);

	}
	
	public function delete($id) {

		$this->adminQuizModel->delete_quiz($id);
		redirect('/admin/quiz/dashboard');

	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Quiz',
		);

        //set validation rules
       	$this->form_validation->set_rules('question', 'question', 'required');
		$this->form_validation->set_rules('category', 'category', 'required');
		$this->form_validation->set_rules('answer', 'answer', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/quiz/add', $data);

        } else {
			$question		= $this->input->post('question');
			$category		= $this->input->post('category');
			$answer			= $this->input->post('answer');
			$created_by		= $_SESSION['user_id'];

			if ($this->adminQuizModel->add_quiz($question, $category, $answer, $created_by)) {

				redirect('/admin/quiz/dashboard');

			} else {

				redirect('/admin/quiz/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Quiz',
		);

		if (isset($id)) {

			$data['quiz'] = $this->adminQuizModel->get_quiz($id);

			//set validation rules
	        $this->form_validation->set_rules('question', 'question', 'required');
			$this->form_validation->set_rules('category', 'category', 'required');
			$this->form_validation->set_rules('answer', 'answer', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/quiz/edit', $data);

	        } else {
				$question		= $this->input->post('question');
				$category		= $this->input->post('category');
				$answer			= $this->input->post('answer');
				$updated_by		= $_SESSION['user_id'];

				if ($this->adminQuizModel->add_quiz($question, $category, $answer, $updated_by)) {

					redirect('/quiz/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/quiz/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/staff/edit', $data);
		}
	}
}