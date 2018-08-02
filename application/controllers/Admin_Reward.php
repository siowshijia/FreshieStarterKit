<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Reward extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('adminRewardModel');
    }

	public function dashboard()
	{
		$data = array(
			'view_name' => 'Reward Dashboard',
		);

		if (isset($_SESSION['logged_in']) && ($_SESSION['user_role'] === 'Admin')) {

			$data['rewards'] = $this->adminRewardModel->get_all_rewards();

		}

		$this->load->template('layouts/admin/reward/dashboard', $data);
	}

	public function add()
	{
		$data = array(
			'view_name' => 'Add Reward',
		);

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('points', 'Points', 'required');
        $this->form_validation->set_rules('qty', 'Quantity','required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('expired_date', 'Expired Date', 'required');

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 2048;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {

            $this->load->template('layouts/admin/reward/add', $data);

        } else {

			$this->upload->do_upload('image');

			$name         = $this->input->post('name');
			$points       = $this->input->post('points');
			$qty          = $this->input->post('qty');
			$file         = $this->upload->data();
			$image        = $file['file_name'];
			$description  = $this->input->post('description');
			$expired_date = $this->input->post('expired_date');

			if ($this->adminRewardModel->add_reward($name, $points, $qty, $image, $description, $expired_date)) {

				$this->session->set_flashdata('add-reward-msg', '<div class="alert alert-success text-center">You have successfully added a reward.</div>');

				redirect('/admin/reward/dashboard');

			} else {

				redirect('/admin/reward/add');

			}
        }
	}

	public function edit($id) {
		$data = array(
			'view_name' => 'Edit Reward',
		);

		if (isset($id)) {

			$data['reward'] = $this->adminRewardModel->get_reward($id);

			//set validation rules
			$this->form_validation->set_rules('name', 'Name', 'required');
	        $this->form_validation->set_rules('points', 'Points', 'required');
	        $this->form_validation->set_rules('qty', 'Email','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('expired_date', 'Expired Date', 'required');

			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = 2048;
	        $config['max_width']            = 1920;
	        $config['max_height']           = 1080;
	        $config['encrypt_name']         = true;

	        $this->load->library('upload', $config);

	        if ($this->form_validation->run() == FALSE) {

	            $this->load->template('layouts/admin/reward/edit', $data);

	        } else {

				$old_file_name = $data['reward']->image;

				if ($old_file_name) {
					unlink('./uploads/' . $old_file_name);
				}

				$this->upload->do_upload('image');

				$name         = $this->input->post('name');
				$points       = $this->input->post('points');
				$qty          = $this->input->post('qty');
				$file         = $this->upload->data();
				$image        = $file['file_name'];
				$description  = $this->input->post('description');
				$expired_date = $this->input->post('expired_date');

				if ($this->adminRewardModel->update_reward($id, $name, $points, $qty, $image, $description, $expired_date)) {

					$this->session->set_flashdata('edit-reward-msg', '<div class="alert alert-success text-center">The reward&apos;s details has been updated.</div>');

					redirect('/admin/reward/dashboard');

				} else {

					$data['error_msg'] = 'Some problems occured, please try again.';
					$this->load->template('layouts/admin/reward/edit', $data);
				}
	        }

		} else {

			$this->load->template('layouts/admin/reward/edit', $data);

		}
	}

	public function delete($id) {

		$this->adminRewardModel->delete_reward($id);
		$this->session->set_flashdata('delete-reward-msg', '<div class="alert alert-success text-center">Deleted Successfully.</div>');
		redirect('/admin/reward/dashboard');

	}
}
