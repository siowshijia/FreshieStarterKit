<?php defined('BASEPATH') OR exit('No direct script access allowed');

class eventModel extends CI_Model
{
    /**
    * returns a list of articles
    * @return array
    */
    function get_articles_list()
    {
        $this->db->select('event_name');
        $this->db->select('event_venue');
        $this->db->from('event');
        $query = $this->db->get();
        $result = $query->result();
        $list = Array();
        
        for ($i = 0; $i < count($result); $i++) {
            $list[$i] = (object)NULL;
            $list[$i]->eventname = $result[$i]->event_name;
            $list[$i]->eventvenue = $result[$i]->event_venue;
        }
        return $list;
    }
}
