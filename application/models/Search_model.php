<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{

    //getting users per page

    public function getUserPagintaion($limit, $start) {
        
            $this->db->select('*');
            $this->db->from('users');
            $this->db->limit($limit, $start);
            $this->db->order_by('');
            $query = $this->db->get();
            return $result = $query->result();        
    }

    //getting users count

    public function getSearch($data) {
        
            $this->db->select("*");
            $this->db->from('posting');
            $this->db->like('content', $data, 'both'); 
            $this->db->join('category', 'category.id = posting. id_category');
            $this->db->where('posting.is_active', 'Y');
            $this->db->order_by('posting.id', 'desc');
            $this->db->limit(4);
           return $this->db->get()->result();
          

    }


    public function categoryList()
    {
           
        $this->db->select("*");
        $this->db->from('category');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function resentlypost()
    {
           
        $this->db->select("*");
        $this->db->from('posting');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}