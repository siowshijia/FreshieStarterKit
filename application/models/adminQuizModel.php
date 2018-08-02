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
<<<<<<< HEAD
            $this->db->from('quiz_new');
            $this->db->join('staff', 'staff.staff_id = quiz_new.created_by');
=======
            $this->db->from('quiz');
            $this->db->join('staff', 'staff.staff_id = quiz.created_by');
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7

            return $this->db->get()->result();

        }

        //Quiz Deletion
        public function delete_quiz($id) {

            $this->db->where('quiz_id', $id);
            return $this->db->delete('quiz');
    
        }

<<<<<<< HEAD
        public function add_quiz($question, $category, $answer, $created_by) {
=======
        public function add_quiz($quiz_name, $quiz_description, $question_1, $answer_1, $question_2, $answer_2, $question_3, $answer_3, $created_by) {
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7

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
        
<<<<<<< HEAD
        public function update_quiz($question, $category, $answer, $update_by) {

            $data = array(
                'quiz_question'     => $question,
                'quiz_cat_id'       => $category,
                'quiz_answer'       => $answer,
                'updated_By'        => $update_by,
=======
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
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7
            );
    
            $this->db->where('quiz_id', $id);
    
            return $this->db->update('quiz', $data);
    
        }

        public function get_quiz($quiz_id) {

            $this->db->from('quiz');
            $this->db->where('quiz_id', $quiz_id);
            return $this->db->get()->row();
    
        }
<<<<<<< HEAD

=======
        
>>>>>>> fcef5ed1cea13463e0c599a267060877476f72d7
    }
?>