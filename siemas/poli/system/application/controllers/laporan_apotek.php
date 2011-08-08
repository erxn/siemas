<?php

class laporan_apotek extends Controller {

    function laporan_apotek()
    {
        parent::Controller();
        $this->load->model('laporan_apotek_model', 'laporan');
    }

    function harian_xls($tanggal)
    {

        $data->data_harian = $this->laporan->harian($tanggal);

        $this->load->plugin('phpexcel');

        $this->load->view('excel/laporan_harian_excel', $data);

    }

}
?>
