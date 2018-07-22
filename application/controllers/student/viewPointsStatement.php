<?php
/*
* File Name: viewStudent.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class viewPointsStatement extends CI_Controller
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
 //index function
 public function index($studid, $rewardid)
 {
    $data = array(
        'view_name' => 'Student Points History',
    );
    $this->load->template('layouts/student/viewpointshistory', $data);
 //get a particular student transaction
 $data['student_transaction'] = $this->Studentmodel->get_student_transaction($studid, $rewardid);
 $this->load->view('layouts/student/viewpointshistory', $data);
 }
}
?>