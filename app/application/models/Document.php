<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Model {

    protected $table = 'documents'; 

    public function save($contractor_id, $filename, $status) {
        $data = [
            'contractor_id' => $contractor_id,
            'filename' => $filename,
            'status' => $status
        ];
        return $this->db->insert($this->table, $data);
    }

    public function get($contratista_id) {
        return $this->db->get_where($this->table, ['contractor_id' => $contratista_id])->result();
    }
}
