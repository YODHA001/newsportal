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
            $this->db->or_like('title',$data); 
            $this->db->join('category', 'category.id = posting. id_category');
            $this->db->where('posting.is_active', 'Y');
            $this->db->order_by('posting.id', 'desc');
            // $this->db->limit(4);
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
    public function addPostCount($pid)
    {
        $q = $this->db->get_where('post_count', ['post_id' => $pid], 1)->row();
        if ($q) {
            $this->db->where('post_id', $pid);
            $this->db->update("post_count", array('count' => $q->count+1));
            return true;
        }else{
            $this->db->insert('post_count', array('post_id'=>$pid, 'count'=>1));
            return true;
        }
        return false;
    }
    public function get_count($pid)
    {
        $q = $this->db->get_where('post_count', ['post_id' => $pid], 1)->row();
        return $q->count; 
    }
}