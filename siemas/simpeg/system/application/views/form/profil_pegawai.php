<?php

$this->load->view('header');

?>

<script type="text/javascript" src="template/jquery.js"></script>

<div class="belowribbon">
    <h1>
        Profil pegawai
    </h1>
</div>

<div id="page">
    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Data diri</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td width="40%"><label>Nama</label></td>
                            <td><strong><?php echo $data_pegawai['nama'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Tempat lahir</label></td>
                            <td><strong><?php echo $data_pegawai['tempat_lahir'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal lahir</label></td>
                            <td><strong><?php echo format_tanggal_tampilan($data_pegawai['tanggal_lahir']) ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td><strong><?php echo nl2br($data_pegawai['alamat']) ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Jenis kelamin</label></td>
                            <td><strong><?php echo $data_pegawai['jk'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Agama</label></td>
                            <td><strong><?php echo $data_pegawai['agama'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Gol. darah</label></td>
                            <td><strong><?php echo $data_pegawai['gol_darah'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Status</label></td>
                            <td><strong><?php echo $data_pegawai['status'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><label>Telepon</label></td>
                            <td><strong><?php echo $data_pegawai['telepon'] ?></strong></td>
                        </tr>
<?php if ($data_pegawai['pasfoto'] != "") : ?>
                            <tr>
                                <td><label>Pas foto</label></td>
                                <td>
                                    <img src="foto/<?php echo $data_pegawai['pasfoto'] ?>" width="200" id="pasfoto"/><br/>
                            </td>
                        </tr>
<?php else: ?>
                        <tr>
                            <td><label>Pas foto</label></td>
                            <td>-</td>
                        </tr>
<?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Riwayat pendidikan</span></h2>
            <div class="module-body">
                <table id="tabel_pendidikan" class="noborder">
                    <thead>
                        <tr>
                            <td>Pendidikan</td>
                            <td width="20%">Tahun ijazah</td>
                        </tr>
                    </thead>
                    <tbody>
<?php if (count($data_pendidikan) > 0) : foreach ($data_pendidikan as $data) : ?>
                        <tr>
                            <td><strong><?php echo $data['pendidikan'] ?></strong></td>
                            <td><strong><?php echo $data['tahun_ijazah'] ?></strong></td>
                        </tr>
<?php endforeach;
                    else : ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                        </tr>
<?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="module">
            <h2><span>Riwayat pelatihan</span></h2>
            <div class="module-body">

                <table id="tabel_pelatihan" class="noborder">
                    <thead>
                        <tr>
                            <td>Pelatihan</td>
                            <td width="20%">Tahun</td>
                        </tr>
                    </thead>
                    <tbody>
<?php if (count($data_pelatihan) > 0) : foreach ($data_pelatihan as $data) : ?>
                                <tr>
                                    <td><strong><?php echo $data['pelatihan'] ?></strong></td>
                                    <td><strong><?php echo $data['tahun'] ?></strong></td>
                                </tr>
<?php endforeach;
                            else : ?>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                        <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div style="margin: 0px 1%">
                <div class="module">
                    <h2><span>Tanggungan</span></h2>
                    <div class="module-table-body">
                        <table border="0" id="tabel_tanggungan">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal lahir</th>
                                    <th>Tanggal nikah</th>
                                    <th>Pekerjaan</th>
                                    <th>Dapat tunjangan?</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php if (count($data_tanggungan) > 0) : $i = 1;
                                    foreach ($data_tanggungan as $data) : ?>
                                        <tr>
                                            <td><strong><?php echo $i++; ?></strong></td>
                                            <td><strong><?php echo $data['nama']; ?></strong></td>
                                            <td><strong><?php echo format_tanggal_tampilan($data['tanggal_lahir']); ?></strong></td>
                                            <td><strong><?php echo format_tanggal_tampilan($data['tanggal_nikah']); ?></strong></td>
                                            <td><strong><?php echo $data['pekerjaan']; ?></strong></td>
                                            <td style="text-align: center"><strong><?php if ($data['dapat_tunjangan'] == "1")
                                            echo "Ya"; else
                                            echo "Tidak" ?></strong></td>
                                                <td><strong><?php echo $data['keterangan']; ?></strong></td>
                                            </tr>
<?php endforeach;
                                        else : ?>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td style="text-align: center">-</td>
                                                <td>-</td>
                                            </tr>
<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="grid_6" style="width: 48%">
                            <div class="module">
                                <h2><span>Data kepegawaian</span></h2>
                                <div class="module-body">
                                    <table width="100%" class="noborder">
                                        <tbody>
                                            <tr>
                                                <td width="40%"><label>NIP</label></td>
                                                <td><strong><?php echo format_nip($data_pegawai['nip']) ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal masuk</label></td>
                                                <td><strong><?php echo format_tanggal_tampilan($data_pegawai['tanggal_masuk']) ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td><label>Status kepegawaian</label></td>
                                                <td><strong><?php echo $data_pegawai['status_kepegawaian'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td><label>BP Pemda</label></td>
                                                <td><strong><?php if ($data_pegawai['bp_pemda'] == "1")
                                                echo "Ya"; else
                                                echo "Tidak" ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Sumber gaji</label></td>
                                                    <td><strong><?php echo $data_pegawai['sumber_gaji'] ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Kenaikan gaji YAD</label></td>
                                                    <td><strong><?php echo format_tanggal_tampilan($data_pegawai['kenaikan_YAD']) ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="grid_6" style="width: 48%">
                                <div class="module">
                                    <h2><span>Data kepangkatan</span></h2>
                                    <div class="module-body">
                                        <table width="100%" class="noborder">
                                            <tbody>
                                                <tr>
                                                    <td><label>Gol/ruang</label></td>
                                                    <td><strong><?php echo $pangkat['golongan']; ?></strong></td>
                                                    <td align="right"><label>TMT</label></td>
                                                    <td><strong><?php echo format_tanggal_tampilan($pangkat['TMT']); ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Pangkat</label></td>
                                                    <td><strong><?php echo $pangkat['pangkat']; ?></strong></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Jabatan</label></td>
                                                    <td><strong><?php echo $jabatan['jabatan']; ?></strong></td>
                                                    <td align="right"><label>TMT</label></td>
                                                    <td><strong><?php echo format_tanggal_tampilan($jabatan['TMT']); ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Gaji pokok</label></td>
                                                    <td><strong><?php echo $gaji['gaji']; ?></strong></td>
                                                    <td align="right"><label>TMT</label></td>
                                                    <td><strong><?php echo format_tanggal_tampilan($gaji['TMT']); ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Atasan langsung</label></td>
                                                    <td colspan="3"><strong><?php if($data_pegawai['id_atasan'] != null) {$p = $this->pegawai->get_pegawai_by_id($data_pegawai['id_atasan']); echo $p['nama'];} else echo "-" ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php $this->load->view('footer'); ?>