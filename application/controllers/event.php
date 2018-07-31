<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model("eventModel");
	}

	public function index()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$events = $this->eventModel->get_event_list();
			$data["events"] = $events;

		} else {

			$data['logged_in'] = false;

		}

        $this->load->template('layouts/event/view', $data);

	}

	function create()
	{
		$data = array(
			'view_name' => 'Create Event',
		);
		
		
		if (isset($_SESSION['user_id'])) {
			//set validation rules
			$this->form_validation->set_rules('eventname', 'Event Name',
			'trim|required');
			$this->form_validation->set_rules('eventvenue', 'Event Venue',
			'trim|required');
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
				'event_status' => 'Pending',
				'event_approval' => 'Not Approved',
				'event_owner' => $_SESSION['user_id']
				);
			//insert the form data into database
			$this->db->insert('event', $data);
			//display success message
			$this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
			sent to Admin for approval</div>');
			redirect('event');
			}
		
		}else {

			$data['logged_in'] = false;
			$this->load->template('layouts/student/edit', $data);

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
	public function update($id)
	{
	$data = array(
		'view_name' => 'Update Event',
	);
	
	$this->load->model("eventModel");
	$db_Id = $id;
	$events = $this->eventModel->get_event_details($db_Id);
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
			$id = $this->input->post('eventId');
			$data = array(

			'event_name' => $this->input->post('eventname'),
			'event_venue' => $this->input->post('eventvenue'),
			'event_category' => $this->input->post('category'),
			'event_datetime' => @date('Y-m-d', @strtotime($this->input->post('eventDate'))),
			'description' => $this->input->post('eventDescription'),
			
		   );
		   //insert the form data into database
		   $this->db->where('event_id', $id);
		   $this->db->update('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   Updated</div>');
		   redirect('event/update/'.$id);
		

		}
	
	}

	public function viewStatus()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("eventModel");
		$events = $this->eventModel->get_event_status();
		$data["events"] = $events;
		$this->load->template('layouts/event/viewStatus', $data);
	}

	public function adminView()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("eventModel");
		$events = $this->eventModel->get_event_list();
		$data["events"] = $events;
		$this->load->template('layouts/event/adminView', $data);
	}

	public function adminPending()
	{	
		$data = array(
			'view_name' => 'Events',
		);

		$this->load->model("eventModel");
		$events = $this->eventModel->get_event_pending();
		$data["events"] = $events;
		$this->load->template('layouts/event/adminPending', $data);
	}

	
	public function adminUpdate($id)
	{
	$data = array(
		'view_name' => 'Approve Event',
	);
	
	$this->load->model("eventModel");
	$db_Id = $id;
	$events = $this->eventModel->get_event_details($db_Id);
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
			$this->load->template('layouts/event/adminUpdate', $data);
		}	
		else
		{	
			$id = $this->input->post('eventId');
			$data = array(

			'event_approval' => $this->input->post('Status'),
			'admin_remarks' => $this->input->post('adminRemarks'),
			
		   );
		   //insert the form data into database
		   $this->db->where('event_id', $id);
		   $this->db->update('event', $data);
		   //display success message
		   $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Event
		   Updated</div>');
		   redirect('event/adminPending/');
		

		}
	
	}

	public function details($id)
	{	
		$data = array(
			'view_name' => 'Events Details',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$events = $this->eventModel->get_event_details($id);
			$data["events"] = $events;

		

		} else {

			$data['logged_in'] = false;

		}

        $this->load->template('layouts/event/details', $data);

	}

	function register_attendance()
	{
	$data1 = array(
		'event_id' => $this->input->post('eventid'),
		'student_id' => $_SESSION['user_id'],
		'datetime' => date('m/d/Y h:i:s a', time()),
		);
		
		$this->db->replace('event_attendance', $data1);
		redirect('event/Attendance');
	}	


	public function attendance()
	{	
		$data = array(
			'view_name' => 'Registered Events',
		);

		if (isset($_SESSION['user_id'])) {

			$data['logged_in'] = true;
			$events = $this->eventModel->get_event_attendance($_SESSION['user_id']);
			$data["events"] = $events;

		} else {

			$data['logged_in'] = false;

		}

        $this->load->template('layouts/event/eventAttendance', $data);

	}

}
