<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventUpdate extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model("eventModel");
	}

	public function index()
	{
		$this->load->model("eventModel");
		$events = $this->eventModel->get_events_list();
		$data["events"] = $events;
		
		$this->load->template('layouts/eventUpdate', $data);
		
	}
	
}
