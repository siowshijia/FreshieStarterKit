<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('QuizModel');
	}

	public function index()
	{
		$data = array(
			'view_name' => 'Quiz',
		);
		$this->load->template('layouts/quiz/attendance', $data);
	}

	public function edit($id)
	{
		$data = array(
			'view_name' => 'Edit Quiz',
		);

		if (isset($id)) {

			$data['quiz'] = $this->QuizModel->get_quiz($id);

			//set validation rules
			$this->form_validation->set_rules('answer_1', 'answer_1', 'required');
			$this->form_validation->set_rules('answer_2', 'answer_2', 'required');
			$this->form_validation->set_rules('answer_3', 'answer_3', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/quiz/edit', $data);

	        } else {
				$answer_1				= $this->input->post('answer_1');
				$answer_2				= $this->input->post('answer_2');
				$answer_3				= $this->input->post('answer_3');

				if ($this->QuizModel->update_quiz($id, $quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3)) {

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

	public function quizzes()
	{
		$data = array(
			'view_name' => 'Quizzes',
		);
		$this->load->template('layouts/quiz/quizzes', $data);
	}

	public function result()
	{
		$data = array(
			'view_name' => 'Quiz Result',
		);
		$this->load->template('layouts/quiz/result', $data);
	}

	public function attendance()
	{
		$data = array(
			'view_name' => 'Attendance Quiz',
			'quiz'      => $this->QuizModel->get_questions(1)
		);

		if (isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])) {

			//set validation rules
			$this->form_validation->set_rules('question1', 'Question 1', 'required');
			$this->form_validation->set_rules('question2', 'Question 2', 'required');
			$this->form_validation->set_rules('question3', 'Question 3', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/quiz/attendance', $data);

	        } else {
				$question1 = $this->input->post('question1');
				$question2 = $this->input->post('question2');
				$question3 = $this->input->post('question3');
				$id = $_SESSION['user_id'];
				$quiz_id = 1;

				if ($this->QuizModel->update_result($id, $quiz_id, $question1, $question2, $question3)) {

					$this->session->set_flashdata('result-quiz-msg', '<div class="alert alert-success text-center">You have completed the quiz!</div>');

					redirect('/quiz/result');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/quiz/attendance', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/quiz/attendance', $data);
		}

	}

	public function bursary()
	{
		$data = array(
			'view_name' => 'Bursary Quiz',
			'quiz'      => $this->QuizModel->get_questions(2)
		);

		if (isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])) {

			//set validation rules
			$this->form_validation->set_rules('question1', 'Question 1', 'required');
			$this->form_validation->set_rules('question2', 'Question 2', 'required');
			$this->form_validation->set_rules('question3', 'Question 3', 'required');

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/quiz/bursary', $data);

	        } else {
				$question1 = $this->input->post('question1');
				$question2 = $this->input->post('question2');
				$question3 = $this->input->post('question3');
				$id = $_SESSION['user_id'];
				$quiz_id = 2;

				if ($this->QuizModel->update_result($id, $quiz_id, $question1, $question2, $question3)) {

					$this->session->set_flashdata('result-quiz-msg', '<div class="alert alert-success text-center">You have completed the quiz!</div>');

					redirect('/quiz/result');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/quiz/bursary', $data);
				}
	        }

		} else {

			$data['logged_in'] = false;
			$this->load->template('layouts/quiz/bursary', $data);
		}
	}
}
