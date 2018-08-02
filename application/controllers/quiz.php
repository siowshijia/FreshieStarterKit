<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function index()
	{
		$data = array(
			'view_name' => 'Quiz',
		);
		$this->load->template('layouts/quiz/attendance', $data);
	}
}