<?php
$this->load->view('profil_pasien',array(
                                                        'x' => 1,
                                                        'status' => $pasien[0]['status_pelayanan']));
$this->load->view('pilih_poli_pasien_lama');?>