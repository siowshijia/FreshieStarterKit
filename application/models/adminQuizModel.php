<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class adminQuizModel extends CI_Model
    {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }

        /**
         * returns a list of articles
         * @return array
         */

         //Quiz Dashboard
        public function get_all_quiz() {
            
            $this->db->select('*');
            $this->db->from('quiz');
            $this->db->join('staff', 'staff.staff_id = quiz.created_by');

            return $this->db->get()->result();

        }

        //Quiz Deletion
        public function delete_quiz($id) {

            $this->db->where('quiz_id', $id);
            return $this->db->delete('quiz');
    
        }

        public function add_quiz($quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3, $created_by) {

            $data = array(
                'quiz_name'         => $quiz_name,
                'description'       => $quiz_description,
                'question_1'        => $question_1,
                'answer_1'          => $answer_1,
                'question_2'        => $question_2,
                'answer_2'          => $answer_2,
                'question_3'        => $question_3,
                'answer_3'          => $answer_3,
                'created_by'        => $created_by,
            );
    
            return $this->db->insert('quiz', $data);
    
        }
        
        public function update_quiz($id, $quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3) {

            $data = array(
                'quiz_name'         => $quiz_name,
                'description'       => $quiz_description,
                'question_1'        => $question_1,
                'answer_1'          => $answer_1,
                'question_2'        => $question_2,
                'answer_2'          => $answer_2,
                'question_3'        => $question_3,
                'answer_3'          => $answer_3,
            );
    
            $this->db->where('quiz_id', $id);
    
            return $this->db->update('quiz', $data);
    
        }

        public function get_quiz($quiz_id) {

            $this->db->from('quiz');
            $this->db->where('quiz_id', $quiz_id);
            return $this->db->get()->row();
    
        }
        
    }
?>