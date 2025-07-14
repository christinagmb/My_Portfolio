<?php

class Portfolio_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_posts() {
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('comments');
        return $query->result_array();
    }

    public function insert_comment($data) {
        return $this->db->insert('comments', $data);
    }
}
