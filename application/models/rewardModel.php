<?php
/*
* File Name: RewardModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RewardModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_reward() {

        $this->db->select('*');
        $this->db->from('rewards');
        return $this->db->get()->result();

    }

    public function redeem_reward($user_id, $reward_id) {

        $student_points = $this->RewardModel->_retrieve_student_points($user_id);
        $reward_points = $this->RewardModel->_retrieve_reward_points($reward_id);

        if ($reward_points < $student_points) {

            $data = array(
                'points' => $student_points - $reward_points,
            );

            $this->db->where('student_id', $user_id);
            $this->db->update('student', $data);

            $data2 = array(
                'reward_id'  => $reward_id,
                'student_id' => $user_id,
                'amount'     => $reward_points,
            );

            $this->db->insert('reward_transaction', $data2);

            return true;

        } else {

            return false;

        }
    }

    public function _retrieve_reward_points($reward_id) {

        $this->db->select('cost_points');
		$this->db->from('rewards');
		$this->db->where('reward_id', $reward_id);
		$points = $this->db->get()->row('cost_points');

        return $points;
    }

    public function _retrieve_reward_name($reward_id) {

        $this->db->select('reward_name');
		$this->db->from('rewards');
		$this->db->where('reward_id', $reward_id);
		$name = $this->db->get()->row('reward_name');

        return $name;
    }

    public function _retrieve_student_points($user_id) {

        $this->db->select('points');
		$this->db->from('student');
		$this->db->where('student_id', $user_id);
		$points = $this->db->get()->row('points');

        return $points;
    }
}

?>
