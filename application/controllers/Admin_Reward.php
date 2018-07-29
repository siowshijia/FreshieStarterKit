<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Reward extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('rewardModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Reward Dashboard',
		);
		$this->load->template('layouts/admin/reward/dashboard', $data);
	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Reward',
		);
		$this->load->template('layouts/admin/reward/add', $data);
	}

	public function edit()
	{
		$data = array(
			'view_name' => 'Edit Reward',
		);
		$this->load->template('layouts/admin/reward/edit', $data);
	}
}
