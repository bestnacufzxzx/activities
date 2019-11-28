<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities_mode extends CI_Model {

       private $table_name = 'tbl_activities';

       public function get_all()
       {
        // select * from tbl_activities where activity_id = 12
        //    $this->db->selct('');
        //    $this->db->from('');
        //    $this->db->join('','.table.=..');
        //    $this->db->where('');
        //    $this->db->order_by('','asc|desc');
        //    $this->db->limit('');
        //    $this->db->get();

        //    $this->db->selct('*');
        //    $this->db->from('tbl_activities');

            $this->db->from($this->table_name);
            // $this->db->where('activity_id', 12);

            // $result = $this->db->get('tbl_activities'); //วิธีสั้น

            $result = $this->db->get(); //วิธีสั้น

            return $result->result();  // return เป็น arry
            // return $result->row();  // return เป็น ojb

       }


       public function insert($data){
              $result = $this->db->insert($this->table_name, $data);
              return $result;
       }

       public function update($data){
              $this->db->where('activity_id', $data['activity_id']);
              $result = $this->db->update($this->table_name, $data);
              return $result;
       }
       
       public function get($activity_id){
              $this->db->where('activity_id', $activity_id);
              $result = $this->db->get($this->table_name); 
              return $result->row();  
         }

       public function delete($activity_id){
              $result = $this->db->delete($this->table_name, array('activity_id' => $activity_id));
              return $result;
       }
  
}