<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Event extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model("EventModel");
	}


	function managerCreate()
	{
		$data = array(
			'view_name' => 'Create Event',
		);
		$data['category'] = $this->EventModel->get_category();
		
		
		//set validation rules
		$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required');
		$this->form_validation->set_rules('category', 'Category');
		$this->form_validation->set_rules('eventDate', 'Event Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/admin/event/managerCreate', $data);
		}	
		else
		{
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			'event_status' => 'Inactive',
			'event_approval' => 'Not Approved',
			'event_owner' => $_SESSION['user_id']
		   );
		   //insert the form data into database
		   $this->db->insert('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   sent to Admin for approval</div>');
		   redirect('manager/event/dashboard');
		}
	}


	function adminCreate()
	{
		$data = array(
			'view_name' => 'Create Event',
		);
		//$data['category'] = $this->EventModel->get_category();
		
		
		//set validation rules
		$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required');
		$this->form_validation->set_rules('category', 'Category');
		$this->form_validation->set_rules('eventDate', 'Event Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/admin/event/adminCreate', $data);
		}	
		else
		{
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			'event_status' => $this->input->post('status'),
			'event_approval' => 'Approved',
			'event_owner' => $_SESSION['user_id']
		   );
		   //insert the form data into database
		   $this->db->insert('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   sent to Admin for approval</div>');
		   redirect('admin/event/dashboard');
		}
	}

	//custom validation function for dropdown input

	public function update($id)
	{
	$data = array(
		'view_name' => 'Update Event',
	);
	
	$this->load->model("EventModel");
	$db_Id = $id;
	$events = $this->EventModel->get_event_details($db_Id);
	$data["events"] = $events;
	$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/admin/event/adminUpdate', $data);
		}	
		else
		{	
			$id = $this->input->post('eventId');
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			'event_approval' => $this->input->post('approval'),
			'event_status' => $this->input->post('status'),
			'admin_remarks' => $this->input->post('adminRemarks'),
		   );
		   //insert the form data into database
		   $this->db->where('event_id', $id);
		   $this->db->update('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   Updated</div>');
		   redirect('admin/event/dashboard');
		

		}
	
	}


	public function adminView()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("EventModel");
		$events = $this->EventModel->get_all_event_list();
		$data["events"] = $events;
		$this->load->template('layouts/admin/event/adminView', $data);
	}

	public function adminPending()
	{	
		$data = array(
			'view_name' => 'Pending Events',
		);

		$this->load->model("EventModel");
		$events = $this->EventModel->get_event_pending();
		$data["events"] = $events;
		$this->load->template('layouts/admin/event/adminPending', $data);
	}

	
	public function managerUpdate($id)
	{
	$data = array(
		'view_name' => 'Edit Event',
	);
	
	$this->load->model("EventModel");
	$db_Id = $id;
	$events = $this->EventModel->get_event_details($db_Id);
	$data["events"] = $events;
	$this->form_validation->set_rules('eventname', 'Event Name',
		'trim|required');
		$this->form_validation->set_rules('eventvenue', 'Event Venue',
		'trim|required');
		$this->form_validation->set_rules('category', 'Category');
		$this->form_validation->set_rules('eventDate', 'Event Date',
		'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->template('layouts/admin/event/managerUpdate', $data);
		}	
		else
		{	
			$id = $this->input->post('eventId');
			$data = array(
			
				'event_name' => $this->input->post('eventname'),
				'event_venue' => $this->input->post('eventvenue'),
				'event_category' => $this->input->post('category'),
				'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
				'description' => $this->input->post('eventDescription'),
				'event_status' => $this->input->post('Status'),
			
			
		   );
		   //insert the form data into database
		   $this->db->where('event_id', $id);
		   $this->db->update('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   Updated</div>');
		   redirect('manager/event/dashboard');
		
		

		}
	
	}

	public function viewAttendance($id)
	{	
		$data = array(
			'view_name' => 'Event Attendance',
		);

		$this->load->model("EventModel");
		$events = $this->EventModel->get_event_attendance1($id);
		$data["events"] = $events;
		$this->load->template('layouts/admin/event/viewAttendance', $data);
	}

	public function managerView()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("EventModel");
		$events = $this->EventModel->get_event_list_by_manager($_SESSION['user_id']);
		$data["events"] = $events;
		$this->load->template('layouts/admin/event/managerView', $data);
	}

	public function approve_event($id) {
		$eventid = $id;
		$this->EventModel->approve_event($eventid);
		redirect('/admin_event/adminPending');

	}



	public function markAttendance($eventId,$studentId) {
		
		$this->EventModel->mark_attendance($eventId,$studentId);
		$this->EventModel->add_points($studentId);
		redirect('/admin_event/viewAttendance/'. $eventId);

	}
}
