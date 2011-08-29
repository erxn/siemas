<?php
class Valid extends Controller {
    function Valid() {
        parent::Controller();
        $this->load->library(array('table','validation'));
        $this->load->helper('url');
    }
    function index() {
        $this->_set_fields();
        $data['title'] = 'Add New Student';
        $data['message'] = '';
        $data['action'] = site_url('student/addStudent');
        $this->load->view('addStudent_view', $data);
    }
    function addStudent() {
        $data1['title'] = 'Add New Student';
        $data1['action'] = site_url('student/addStudent');
        $this->_set_fields();
        $this->_set_rules();
// menjalankan validasi
        if ($this->validation->run() == FALSE) {
            $data['message'] = '';
        }else {
// menyimpan data
            $data= array('id' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email')
            );
            $this->db->insert('tb_student', $data);
            $data1['message'] = 'Sukses';
        }
// load view
        $this->load->view('addStudent_view', $data1);
    }
    function _set_fields() {
        $fields['id'] = 'id';
        $fields['nama'] = 'nama';
        $fields['email'] = 'email';
        $this->validation->set_fields($fields);
    }
// berikut adalah rule-rule untuk validasi
    function _set_rules() {
        $rules['id'] = 'trim|required|numeric';
        $rules['nama'] = 'trim|required';
        $rules['email'] = 'trim|required|valid_email';
        $this->validation->set_rules($rules);
        $this->validation->set_message('required', '* harus diisi');
        $this->validation->set_message('numeric', '* hanya boleh diisi dengan angka');
        $this->validation->set_message('valid_email', '* email tidak valid');
        $this->validation->set_error_delimiters('<p>', '</p>');
    }
}
?>