<?php
/*
* File Name: adminRewardModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminRewardModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function add_reward($name, $points, $qty, $image, $description, $expired_date) {

        $data = array(
            'reward_name'      => $name,
            'cost_points'      => $points,
            'quantity'         => $qty,
            'image'            => $image,
            'description'      => $description,
            'expired_date'     => $expired_date,
        );

        return $this->db->insert('rewards', $data);

    }

    public function get_reward($id) {

		$this->db->from('rewards');
		$this->db->where('reward_id', $id);
		return $this->db->get()->row();

	}

    public function get_all_rewards() {

        $this->db->select('*');
        $this->db->from('rewards');
        return $this->db->get()->result();

    }

    public function update_reward($id, $name, $points, $qty, $image, $description, $expired_date) {

        $data = array(
            'reward_name'      => $name,
            'cost_points'      => $points,
            'quantity'         => $qty,
            'image'            => $image,
            'description'      => $description,
            'expired_date'     => $expired_date,
        );

        $this->db->where('reward_id', $id);

        return $this->db->update('rewards', $data);

    }

    public function delete_reward($id) {

        $this->db->where('reward_id', $id);
        return $this->db->delete('rewards');

    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}
}

?>
