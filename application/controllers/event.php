<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {
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
		$this->load->template('layouts/event', $data);

		$data = array(

			'event_name' => $this->input->post('eventname'),
			'category_id' => $this->input->post('category_id'),
		   'registered_date' => @date('Y-m-d', @strtotime($this->input->post('registeredDate'))),
		   );
		   //insert the form data into database
		   $this->db->insert('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Student
		   details added to Database!!!</div>');
		   redirect('student/index');
	}

	function get_category()
	{
		$data = array(
			'view_name' => 'eventCreate',
		);
		$data['category'] = $this->eventModel->get_category();
		$this->load->template('layouts/eventCreate', $data);
	}

	function submit_event()
	{
		
	}

}
