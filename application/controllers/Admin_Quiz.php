<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Quiz extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('AdminQuizModel');
    }

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

	public function add()
	{
		$data = array(
			'view_name' => 'Add Quiz',
		);

		//set validation rules
       	$this->form_validation->set_rules('quiz_name', 'quiz_name', 'required');
		$this->form_validation->set_rules('quiz_description', 'quiz_description', 'required');
		$this->form_validation->set_rules('question_1', 'question_1', 'required');
		$this->form_validation->set_rules('answer_1', 'answer_1', 'required');
		$this->form_validation->set_rules('question_2', 'question_2', 'required');
		$this->form_validation->set_rules('answer_2', 'answer_2', 'required');
		$this->form_validation->set_rules('question_3', 'question_3', 'required');
		$this->form_validation->set_rules('answer_3', 'answer_3', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/quiz/add', $data);

        } else {

			$quiz_name				= $this->input->post('quiz_name');
			$quiz_description		= $this->input->post('quiz_description');
			$question_1				= $this->input->post('question_1');
			$answer_1				= $this->input->post('answer_1');
			$question_2				= $this->input->post('question_2');
			$answer_2				= $this->input->post('answer_2');
			$question_3				= $this->input->post('question_3');
			$answer_3				= $this->input->post('answer_3');
			$created_by				= $_SESSION['user_id'];

			if ($this->AdminQuizModel->add_quiz($quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3, $created_by)) {

				$this->session->set_flashdata('add-quiz-msg', '<div class="alert alert-success text-center">You have successfully added a quiz record.</div>');
				redirect('/admin/quiz/dashboard');

			} else {

				redirect('/admin/quiz/add');

			}
        }
	}

	public function edit($id)
	{
		$data = array(
			'view_name' => 'Edit Quiz',
		);

		if (isset($id)) {

			$data['quiz'] = $this->AdminQuizModel->get_quiz($id);

			//set validation rules
	        $this->form_validation->set_rules('quiz_name', 'quiz_name', 'required');
			$this->form_validation->set_rules('quiz_description', 'quiz_description', 'required');
			$this->form_validation->set_rules('question_1', 'question_1', 'required');
			$this->form_validation->set_rules('answer_1', 'answer_1', 'required');
			$this->form_validation->set_rules('question_2', 'question_2', 'required');
			$this->form_validation->set_rules('answer_2', 'answer_2', 'required');
			$this->form_validation->set_rules('question_3', 'question_3', 'required');
			$this->form_validation->set_rules('answer_3', 'answer_3', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/quiz/edit', $data);

	        } else {

				$quiz_name				= $this->input->post('quiz_name');
				$quiz_description		= $this->input->post('quiz_description');
				$question_1				= $this->input->post('question_1');
				$answer_1				= $this->input->post('answer_1');
				$question_2				= $this->input->post('question_2');
				$answer_2				= $this->input->post('answer_2');
				$question_3				= $this->input->post('question_3');
				$answer_3				= $this->input->post('answer_3');

				if ($this->AdminQuizModel->update_quiz($id, $quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3)) {

					$this->session->set_flashdata('edit-quiz-msg', '<div class="alert alert-success text-center">The quiz&apos;s details has been updated.</div>');

					redirect('/admin/quiz/dashboard');

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

	public function delete($id)
	{

		$this->AdminQuizModel->delete_quiz($id);
		$this->session->set_flashdata('delete-quiz-msg', '<div class="alert alert-success text-center">Deleted Successfully.</div>');
		redirect('/admin/quiz/dashboard');
	}
}
