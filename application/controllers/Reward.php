<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('rewardModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Rewards',
		);
		$this->load->template('layouts/admin/reward/view', $data);
	}
}
