<?php
    class Postagem extends CI_Model {
        
        function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('postagem');
                return $query->row_array();
            }else{
                $query = $this->db->get('postagem');
                return $query->result_array();
            }
        }
    }