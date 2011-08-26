
<div style="position: absolute; top: 70px; right: 60px; width: 100px; padding: 5px; text-align: center; border: 2px solid #2BA234" class="kotak">
    <small>No. Kunjungan</small>
    <h1 style="color: #2BA234"><?php echo $no_kunjungan; ?></h1>
</div>

<?php
$this->load->view('profil_pasien',array(
                                                        'x' => 1,
                                                        'status' => $pasien[0]['status_pelayanan']));
$this->load->view('pilih_poli_pasien_lama');?>