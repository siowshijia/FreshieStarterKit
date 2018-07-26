<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
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
		$this->load->model("events/eventModel");
	}

	public function view()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("eventModel");
		$events = $this->eventModel->get_events_list();
		$data["events"] = $events;
		$this->load->template('layouts/event/view', $data);
	}

	function create()
	{
		$data = array(
			'view_name' => 'Create Event',
		);
		$data['category'] = $this->eventModel->get_category();
		
		
		//set validation rules
		$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required|callback_alpha_only_space');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required|callback_alpha_only_space');
		$this->form_validation->set_rules('category', 'Category',
		'callback_combo_check');
		$this->form_validation->set_rules('eventDate', 'Event Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/event/eventCreate', $data);
		}	
		else
		{
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			'description' => $this->input->post('eventDescription'),
		   );
		   //insert the form data into database
		   $this->db->insert('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   sent to Admin for approval</div>');
		   redirect('events/eventCreate');
		}
	}

	//custom validation function for dropdown input
	function combo_check($str)
	{
		if ($str == "-SELECT-")
		{
		$this->form_validation->set_message('combo_check', 'Valid %s Name
		is required');
		return FALSE;
		}
		else
		{
		return TRUE;
		}
	}
		//custom validation function to accept only alpha and space input
		function alpha_only_space($str)
		{
		if (!preg_match("/^([-a-z ])+$/i", $str))
		{
		$this->form_validation->set_message('alpha_only_space', 'The %s field
		must contain only alphabets or spaces');
		return FALSE;
		}
	else
	{
	return TRUE;
	}

	
}
	public function update()
	{
	$data = array(
		'view_name' => 'Update Event',
	);

	$this->load->model("eventModel");
	$events = $this->eventModel->get_events_list();
	$data["events"] = $events;
	$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required|callback_alpha_only_space');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required|callback_alpha_only_space');
		$this->form_validation->set_rules('category', 'Category',
		'callback_combo_check');
		$this->form_validation->set_rules('eventDate', 'Event Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/event/eventUpdate', $data);
		}	
		else
		{
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			'description' => $this->input->post('eventDescription'),
		   );
		   //insert the form data into database
		   $this->db->where('event_id', '5');
		   $this->db->update('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   sent to Admin for approval</div>');
		   redirect('event/update');
		

		}
	
	}

}
