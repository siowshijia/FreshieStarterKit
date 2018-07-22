<?php
/*
* File Name: viewStudent.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class viewStudentsRewards extends CI_Controller
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
 public function index()
 {
    $data = array(
        'view_name' => 'Students Rewards Page',
    );
 //get the rewards list
 $data['rewards_list'] = $this->Studentmodel->get_rewards_list();
 $this->load->template('layouts/student/viewstudentsrewards', $data);
 }
}
?>