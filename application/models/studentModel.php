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

    /**
    * create_user function.
    *
    * @access public
    * @param mixed $username
    * @param mixed $email
    * @param mixed $password
    * @return bool true on success, false on failure
    */
    public function create_user($name, $email, $password) {

        $data = array(
            'student_name'  => $name,
            'student_email' => $email,
            'password'      => $this->hash_password($password),
        );

        return $this->db->insert('student', $data);

    }

    /**
    * hash_password function.
    *
    * @access private
    * @param mixed $password
    * @return string|bool could be a string on success, or bool false on failure
    */
    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }
}

?>
