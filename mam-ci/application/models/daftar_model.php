<?php
class daftar_model extends CI_Model {

        public function get_daftar()
        {
                $query = $this->db->get('hewan', 10);
                return $query->result();
        }
}