<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array(
			'view_name' => 'Home',
		);
		$this->load->template('layouts/home', $data);
	}

	public function error404()
	{
		$this->load->template('layouts/error404');
	}
}
