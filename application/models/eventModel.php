<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class eventModel extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_event_list(){
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->select('event_datetime');
        $this->db->select('event_category');
        $this->db->select('student_name');
        $this->db->select('description');
        $this->db->join('student', 'event.event_owner = student.student_id');
        $this->db->select('event_id');
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();
        for ($i = 0; $i < count($result); $i++)
        {
        $list[$i] = (object)NULL;
        $list[$i]->eventname = $result[$i]->event_name;
        $list[$i]->eventvenue = $result[$i]->event_venue;
        $list[$i]->eventDatetime = $result[$i]->event_datetime;
        $list[$i]->eventCategory = $result[$i]->event_category;
        $list[$i]->studentName = $result[$i]->student_name;
        $list[$i]->description = $result[$i]->description;
        $list[$i]->eventId = $result[$i]->event_id;
        }
        return $list;
    }
 
    function get_category(){
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->from('event_category');
        $query = $this->db->get();
        $result = $query->result();
    //array to store department id & department name
    $category_id = array('-SELECT-');
    $category_name = array('-SELECT-');
    for ($i = 0; $i < count($result); $i++)
    {
    array_push($category_id, $result[$i]->category_id);
    array_push($category_name, $result[$i]->category_name);
    }
    return $category_result = array_combine($category_id, $category_name);
    }

    function get_event_details($id){
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->select('event_datetime');
        $this->db->select('event_category');
        $this->db->select('event_id');
        $this->db->select('description');
        $this->db->select('admin_remarks');
        $this->db->select('student_name');
        $this->db->join('student', 'event.event_owner = student.student_id');
        
        $this->db->where('event_id',$id);
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();
        for ($i = 0; $i < count($result); $i++)
        {
        $list[$i] = (object)NULL;
        $list[$i]->eventname = $result[$i]->event_name;
        $list[$i]->eventvenue = $result[$i]->event_venue;
        $list[$i]->eventDatetime = $result[$i]->event_datetime;
        $list[$i]->eventCategory = $result[$i]->event_category;
        $list[$i]->studentName = $result[$i]->student_name;
        $list[$i]->description = $result[$i]->description;
        $list[$i]->eventId = $result[$i]->event_id;
        $list[$i]->adminRemarks = $result[$i]->admin_remarks;
        }
        return $list;
    }

    function get_event_pending(){
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->select('event_datetime');
        $this->db->select('event_category');
        $this->db->select('event_id');
        $this->db->where('event_approval','Not Approved');
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();
        for ($i = 0; $i < count($result); $i++)
        {
        $list[$i] = (object)NULL;
        $list[$i]->eventname = $result[$i]->event_name;
        $list[$i]->eventvenue = $result[$i]->event_venue;
        $list[$i]->eventDatetime = $result[$i]->event_datetime;
        $list[$i]->eventCategory = $result[$i]->event_category;
        $list[$i]->eventId = $result[$i]->event_id;
        }
        return $list;
    }

    function get_event_status(){
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->select('event_datetime');
        $this->db->select('event_category');
        $this->db->select('event_id');
        $this->db->select('description');
        $this->db->select('admin_remarks');
        
        
        
        $this->db->where('event_owner');
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();

        for ($i = 0; $i < count($result); $i++)
        {
        $list[$i] = (object)NULL;
        $list[$i]->eventname = $result[$i]->event_name;
        $list[$i]->eventvenue = $result[$i]->event_venue;
        $list[$i]->eventDatetime = $result[$i]->event_datetime;
        $list[$i]->eventCategory = $result[$i]->event_category;
        
        $list[$i]->description = $result[$i]->description;
        $list[$i]->eventId = $result[$i]->event_id;
        $list[$i]->adminRemarks = $result[$i]->admin_remarks;
        }
        return $list;
    }

    function get_event_attendance($id){
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->select('event_datetime');
        $this->db->select('event_category');
        $this->db->select('event_attendance.event_id');
        $this->db->select('description');
        $this->db->select('admin_remarks');
        $this->db->select('datetime');
        $this->db->join('event_attendance', 'event.event_id = event_attendance.event_id');
        
        
        $this->db->where('student_id',$id);
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();
        for ($i = 0; $i < count($result); $i++)
        {
        $list[$i] = (object)NULL;
        $list[$i]->eventname = $result[$i]->event_name;
        $list[$i]->eventvenue = $result[$i]->event_venue;
        $list[$i]->eventDatetime = $result[$i]->event_datetime;
        $list[$i]->eventCategory = $result[$i]->event_category;
        $list[$i]->description = $result[$i]->description;
        $list[$i]->eventId = $result[$i]->event_id;
        $list[$i]->datetime = $result[$i]->datetime;
        }
        return $list;
        
       
    }

    public function delete_attendance($eventid,$studentid) {

        $this->db->where('event_id', $eventid);
        $this->db->where('student_id', $studentid);
        return $this->db->delete('event_attendance');

    }
}
