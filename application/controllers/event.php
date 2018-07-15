<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {
	public function __construct()
	{
	 parent::__construct();
	 $this->load->database();
	}

	public function index()
	{
		$this->load->model("eventModel");
		$articles = $this->eventModel->get_articles_list();
		$data["articles"] = $articles;
		$this->load->template('layouts/event', $data);
	}
}
