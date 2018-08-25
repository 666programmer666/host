<?php

class Category_model extends CI_Model
{

    public function create_category()
    {
        $data = array
        (
            'name' => $this->input->post('category')
        );

        return $this->db->insert('categories', $data);
    }

    public function get_categories()
    {
      $this->db->order_by('name');
      $query = $this->db->get('categories');
      return $query->result_array();
    }

    
  
}

?>