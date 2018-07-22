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

    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }
}

?>
