<?php
/*
* File Name: AdminStaffModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminStaffModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function add_staff($name, $staff_number, $email, $contact_number, $user_role, $password) {

        $data = array(
            'staff_name'           => $name,
            'staff_number'         => $staff_number,
            'staff_email'          => $email,
            'staff_contact_number' => $contact_number,
            'user_role'            => $user_role,
            'password'             => $this->hash_password($password),
        );

        return $this->db->insert('staff', $data);

    }

    public function resolve_user_login($email, $password) {

		$this->db->select('password');
		$this->db->from('staff');
		$this->db->where('staff_email', $email);
		$hash = $this->db->get()->row('password');

		return $this->verify_password_hash($password, $hash);
	}

    public function get_user_id_from_username($email) {

		$this->db->select('staff_id');
		$this->db->from('staff');
		$this->db->where('staff_email', $email);
		return $this->db->get()->row('staff_id');

	}

    public function get_user($user_id) {

		$this->db->from('staff');
		$this->db->where('staff_id', $user_id);
		return $this->db->get()->row();

	}

    public function get_all_staff() {

        $this->db->select('*');
        $this->db->from('staff');
        return $this->db->get()->result();

    }

    public function update_staff($id, $name, $staff_number, $email, $contact_number, $user_role) {

        $data = array(
            'staff_name'           => $name,
            'staff_number'         => $staff_number,
            'staff_email'          => $email,
            'staff_contact_number' => $contact_number,
            'user_role'            => $user_role,
        );

        $this->db->where('staff_id', $id);

        return $this->db->update('staff', $data);

    }

    public function delete_staff($id) {

        $this->db->where('staff_id', $id);
        return $this->db->delete('staff');

    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}
}

?>
