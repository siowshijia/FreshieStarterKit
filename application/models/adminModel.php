<?php
/*
* File Name: adminModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create_user($name, $number, $email, $contact_no, $password) {

        $data = array(
            'staff_name'          => $name,
            'staff_number'        => $number,
            'staff_email'         => $email,
            'staff_contactnumber' => $contact_no,
            'password'            => $this->hash_password($password),
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

    // public function update_user($id, $name, $adm_number, $email, $contact_number, $interest) {
    //
    //     $data = array(
    //         'student_name'           => $name,
    //         'admission_number'       => $adm_number,
    //         'student_email'          => $email,
    //         'student_contact_number' => $contact_number,
    //         'interest'               => $interest,
    //     );
    //
    //     $this->db->where('student_id', $id);
    //
    //     return $this->db->update('student', $data);
    //
    // }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}
}

?>
