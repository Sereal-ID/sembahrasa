<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
    }

    public function getCode($code)
    {
        $this->db->from('tb_codes');
        $this->db->where('code', $code);
        $query = $this->db->get();
        return $query->row_array();
    }

}