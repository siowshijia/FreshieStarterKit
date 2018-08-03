<?php
/*
* File Name: AdminModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_user($user_id) {

        $this->db->from('staff');
        $this->db->where('staff_id', $user_id);

		return $this->db->get()->row();

    }

    public function get_event_count() {

        $this->db->from('event');
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        if (!isset($rowcount)) {
            return 0;
        } else {
            return $rowcount;
        }

    }

    public function get_quiz_count() {

        $this->db->from('quiz');
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        if (!isset($rowcount)) {
            return 0;
        } else {
            return $rowcount;
        }

    }

    public function get_reward_count() {

        $this->db->from('rewards');
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        if (!isset($rowcount)) {
            return 0;
        } else {
            return $rowcount;
        }

    }
}

?>
