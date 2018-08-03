<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('RewardModel');
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Rewards',
			'rewards'   => $this->RewardModel->get_all_reward(),
		);

		$this->load->template('layouts/reward/view', $data);
	}

	public function redeem($user_id, $reward_id)
	{
		$boolean = $this->RewardModel->redeem_reward($user_id, $reward_id);

		if ($boolean) {

			$reward_name = $this->RewardModel->_retrieve_reward_name($reward_id);

            $msg = '<div class="alert alert-success text-center">You have successfully redeemed ' . $reward_name . '.</div>';

		} else {

			$msg = '<div class="alert alert-warning text-center">You do not have sufficient points to redeem this reward.</div>';

		}

		$this->session->set_flashdata('msg', $msg);

		redirect('/reward');
	}
}
