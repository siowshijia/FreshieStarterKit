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
            $this->db->from('quiz_new');
            return $this->db->get()->result();
        }

        //Quiz Deletion
        public function delete_quiz($id) {

            $this->db->where('quiz_id', $id);
            return $this->db->delete('quiz_new');
    
        }


        public function add_quiz($question, $category, $answer, $created_by) {

            $data = array(
                'quiz_question'     => $question,
                'quiz_cat_id'       => $category,
                'quiz_answer'       => $answer,
                'created_by'        => $created_by,
            );
    
            return $this->db->insert('quiz_new', $data);
    
        }
        
        /*
        public function update_quiz($question, $category, $answer, $created_by, $update_by) {

            $data = array(
                'Question'              => $question,
                'Category'              => $category,
                'Answer'                => $answer,
                'Created_By'            => $created_by,
                'Updated_By'            => $update_by,
            );
    
            $this->db->where('quiz_id', $id);
    
            return $this->db->update('quiz_new', $data);
    
        }

        public function get_quiz($quiz_id) {

            $this->db->from('quiz_new');
            $this->db->where('quiz_id', $quiz_id);
            return $this->db->get()->row();
    
        }

        */

    }
?>