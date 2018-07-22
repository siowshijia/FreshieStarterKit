<?php
/*
* File Name: StudentModel.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Studentmodel extends CI_Model
{
public function __construct()
 {
 // Call the Model constructor
 parent::__construct();
 }
 //fetch student profile by student email and password
 public function login_student($studemail, $studpass)
 {
 $this->where('student_email', $studemail);
 $this->where('password', $studpass);   
 $this->db->from('student');
 $this->db->select('student_name');
 $this->db->select('admission_number');
 $this->db->select('student_email');
 $this->db->select('student_contact_number');
 $this->db->select('interest');
 $this->db->select('points');
 if($query = $this->db->get()){
    return $query->result();
 }
 else {
 return false;
 }
 }

 //fetch student password by student email
 public function get_student_password($studemail)
 {
 $this->db->where('student_email', $studemail);
 $this->db->from('student');
 $this->db->select('password');
 if ($query = $this->db->get()){
    return $query->result();
 }
 else {
     return false;
 }
 }

 //fetch all rewards
 public function get_rewards_list()
 {
 $this->db->from('rewards');
 $query = $this->db->get();
 return $query->result();
 }

 //fetch student transaction history by student id and reward id
 public function get_student_transaction($studid, $rewardid)
 {
 $this->where('student_id', $studid);
 $this->where('reward_id' , $rewardid);
 $this->db->from('reward_transaction');
 $this->db->join('student', 'reward_transaction.student_id = student.student_id', 'inner');
 $this->db->join('rewards', 'reward_transaction.reward_id = rewards.reward_id', 'inner');
 $query = $this->db->get();
 return $query->result();
 }
 }
 ?>