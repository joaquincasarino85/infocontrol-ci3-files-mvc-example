<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);  // <-- Cargar helper url aquí
        $this->load->database();
        $this->load->library('upload');
        $this->load->model('Document'); 
    }


    public function index() {
        $this->load->view('upload_form');
    }

    public function upload() {
        $contractor_id = $this->input->post('contractor_id');
        $status = $this->input->post('status');

        $config['upload_path'] = FCPATH . 'uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);
        try {
            if (!$this->upload->do_upload('document')) {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('upload_form', $data);
            } else {
                $upload_data = $this->upload->data();
                $filename = $upload_data['file_name'];

                // 🔁 Aquí llamás al modelo para guardar en la base
                $this->Document->save($contractor_id, $filename, $status);

                // Redirigís a ver el estado
                redirect('/documents/status/' . $contractor_id);
            }
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th->getException());
            die;
        }
    }

    public function status($contratista_id) {
        $data['documents'] = $this->Document->get($contratista_id);
        $data['contratista_id'] = $contratista_id;

        $this->load->view('document_status', $data);
    }

}
