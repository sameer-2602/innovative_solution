<?php
class Course_model extends CI_model{
    
    public function course_details(){
    return  $this->db->get('course')->result_array();
    }
}



?>