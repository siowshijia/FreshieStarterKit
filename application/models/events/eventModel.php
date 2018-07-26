<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class eventModel extends CI_Model{
 /**
 * returns a list of events
 * @return array
 */
 function get_events_list(){
    $this->db->select('event_name');
    $this->db->select('event_venue');
     $this->db->from('event');
     $query = $this->db->get();
     $result = $query->result();
     $list = Array();
     for ($i = 0; $i < count($result); $i++)
     {
     $list[$i] = (object)NULL;
     $list[$i]->eventname = $result[$i]->event_name;
     $list[$i]->eventvenue = $result[$i]->event_venue;
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
}
