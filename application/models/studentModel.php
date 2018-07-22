<?php
/*
* File Name: studentModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentModel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function create_user($name, $email, $password) {

        $data = array(
            'student_name'  => $name,
            'student_email' => $email,
            'password'      => $this->hash_password($password),
        );

        return $this->db->insert('student', $data);

    }

    public function resolve_user_login($email, $password) {

		$this->db->select('password');
		$this->db->from('student');
		$this->db->where('student_email', $email);
		$hash = $this->db->get()->row('password');

		return $this->verify_password_hash($password, $hash);
	}

    public function get_user_id_from_username($email) {

		$this->db->select('student_id');
		$this->db->from('student');
		$this->db->where('student_email', $email);
		return $this->db->get()->row('student_id');

	}

    public function get_user($user_id) {

		$this->db->from('student');
		$this->db->where('student_id', $user_id);
		return $this->db->get()->row();

	}


    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}
}

?>
