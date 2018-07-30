<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Admin Dashboard',
		);
		$this->load->template('layouts/admin/admin/dashboard', $data);

	}
}
