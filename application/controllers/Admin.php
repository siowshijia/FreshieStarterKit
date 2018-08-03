<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('AdminModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Admin Dashboard',
			'event_count' => $this->AdminModel->get_event_count(),
			'quiz_count' => $this->AdminModel->get_quiz_count(),
			'reward_count' => $this->AdminModel->get_reward_count(),
			'user' => $this->AdminModel->get_user(1),
		);

		$this->load->template('layouts/admin/admin/dashboard', $data);

	}
}
