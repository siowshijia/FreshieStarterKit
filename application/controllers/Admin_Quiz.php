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
		redirect('/quiz/dashboard');

	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Quiz',
		);

        //set validation rules
       	$this->form_validation->set_rules('question', 'Question', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('answer', 'Answer', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/quiz/add', $data);

        } else {
			$question		= $this->input->post('Question');
			$category		= $this->input->post('Category');
			$answer			= $this->input->post('Answer');
			$created_by		= $this->input->post('Created By');

			if ($this->adminQuizModel->add_staff($question, $category, $answer)) {

				redirect('/quiz/dashboard');

			} else {

				redirect('/quiz/add');

			}
        }
	}

	/*
	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Quiz',
		);

		if (isset($id)) {

			$data['logged_in'] = true;
			$data['user'] = $this->adminQuizModel->get_quiz($id);

			//set validation rules
	        $this->form_validation->set_rules('question', 'Question', 'required');
	        $this->form_validation->set_rules('category', 'Category', 'required');
	        $this->form_validation->set_rules('answer', 'Answer', 'required');
			$this->form_validation->set_rules('created_by', 'Created By', 'required');
			$this->form_validation->set_rules('updated_by', 'Updated By', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/quiz/edit', $data);

	        } else {
				$question		= $this->input->post('Question');
				$category		= $this->input->post('Category');
				$answer			= $this->input->post('Answer');
				$created_by		= $this->input->post('Created By');
				$update_by		= $this->input->post('Updated By')

				if ($this->adminQuizModel->update_quiz($question, $category, $answer, $created_by, $update_by)) {

					redirect('/quiz/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/quiz/edit', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/admin/quiz/edit', $data);
		}
	}


	*/

  }