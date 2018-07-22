<?php
/*
* File Name: registerStudent.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class registerStudent extends CI_Controller
{
public function __construct()
{
 parent::__construct();
 $this->load->library('session');
 $this->load->helper('form');
 $this->load->helper('url');
 $this->load->database();
 $this->load->library('form_validation');
 //load the student model
 $this->load->model('Studentmodel');
}
public function index()
{
    $data = array(
        'view_name' => 'Student Registration',
    );
    $this->load->template('layouts/student/register' , $data);
 //set validation rules
$this->form_validation->set_rules('stud_name', 'Name', 'trim|required|callback_alpha_only_space');
$this->form_validation->set_rules('stud_admin', 'Admission No.', 'trim|required|numeric|min_length[6]|max_length[6]');
$this->form_validation->set_rules('stud_email', 'Email address', 'trim|required|is_unique[student.student_email]');
//$this->form_validation->set_rules('stud_contact', 'Contact No.', 'trim|required|regex_match[/^[6|8|9]\d{7}$/]');
//$this->form_validation->set_rules('stud_interest', 'Interests', 'trim|required|alphanumeric');
//$this->form_validation->set_rules('stud_points', 'Points', 'trim|required|numeric');
$this->form_validation->set_rules('stud_pass', 'Password', 'trim|required|min_length[8]');
$this->form_validation->set_rules('confirm_stud_pass', 'Confirm Password', 'trim|required|matches[stud_pass]');

 if ($this->form_validation->run() == FALSE)
 {
//fail validation
return false;
 }
 else
 {
//pass validation
$data = array(
 'student_name' => $this->input->post('stud_name'),
 'admission_number' => $this->input->post('stud_admin'),
 'student_email' => $this->input->post('stud_email'),
 //'student_contact_number' => $this->input->post('stud_contact'),
 //'interest' => $this->input->post('stud_interest'),
 //'points' => $this->input->post('stud_points'),
 'password' => $this->input->post('stud_pass'),
);
//insert the form data into database
$this->db->insert('student', $data);
//display success message
$this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Student
registered successfully!</div>');
redirect('layouts/student/viewprofile' . $studemail);
 }
}
//custom validation function to accept only alpha and space input
public function alpha_only_space($str)
{
 if (!preg_match("/^([-a-z ])+$/i", $str))
 {
$this->form_validation->set_message('alpha_only_space', 'The %s field must
contain only alphabets or spaces');
return FALSE;
 }
 else
 {
return TRUE;
 }
}
}
?>