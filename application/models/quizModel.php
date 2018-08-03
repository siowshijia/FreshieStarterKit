<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuizModel extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_questions($id) {

        $this->db->select('*');
        $this->db->from('quiz');
        $this->db->where('quiz_id', $id);
        return $this->db->get()->result();

    }

    public function update_result($id, $quiz_id, $question1, $question2, $question3) {

        $data = array(
            'student_id'  => $id,
            'answer1'     => $question1 ? '1' : '0',
            'answer2'     => $question2 ? '1' : '0',
            'answer3'     => $question3 ? '1' : '0',
        );

        $this->db->where('quiz_id', $quiz_id);

        return $this->db->update('quiz_result', $data);

    }
}
?>
