<?php
/*
* File Name: updatestudent.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class updateStudentPass extends CI_Controller
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
public function index($studemail)
{
    $data = array(
        'view_name' => 'Update Student Password',
    );
    $this->load->template('layouts/student/changepassword', $data);
 $data['studemail'] = $studemail;

 //fetch student password for the given student email.
 $data['studpass'] = $this->Studentmodel->get_student_password($studemail);

 //set validation rules
 $this->form_validation->set_rules('stud_email', 'Email address', 'trim|required|is_unique[student.student_email]');
 $this->form_validation->set_rules('new_stud_pass', 'New Password', 'trim|required|min_length[8]');
 $this->form_validation->set_rules('confirm_new_stud_pass', 'Confirm New Password', 'trim|required|matches[new_stud_pass]');
 if ($this->form_validation->run() == FALSE)
 {
//fail validation
return false;
 }
 else
 {
//pass validation
$data = array(
    'student_email' => $this->input->post('stud_email'),
    'password' => $this->input->post('new_stud_pass'),);
//update student password
$this->db->where('student_email', $studemail);
$this->db->update('student', $data);
//display success message
$this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Student
password updated successfully!</div>');
redirect('layouts/student/viewprofile' . $studemail);
 }
}
}
?>