<?php $this->load->view('header'); ?>

<div class="belowribbon">
    <h1>
        SKUM-PTK
    </h1>
</div>

<div id="page">


    <div style="width: 20%;" class="grid_6">
        <div class="module">
            <h2><span>Daftar pegawai</span></h2>
            <div class="module-body">
                <p id="list_filter_header">Cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                    <?php foreach($daftar_pegawai as $p) : ?>
                        <?php if($id_pegawai == $p['id_pegawai']) : ?>
                        <li><strong><?php echo $p['nama']; ?></strong></li>
                        <?php else : ?>
                        <li><a href="index.php/pegawai/laporan_skumptk/<?php echo $p['id_pegawai']; ?>"><?php echo $p['nama']; ?> &raquo;</a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/list_filter.js"></script>

    <div style="width: 76%" class="grid_6">
        <div class="module">
            <h2><span>SKUM-PTK</span></h2>
            <div class="module-body">

                <?php if(isset($biodata)) : ?>

                <center>
                    <h3>SURAT KETERANGAN<br/>UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</h3>
                </center>

                <hr/>

                <table border="0" width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td height="20" align="left"><span>Nama</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['nama']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>NIP</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['nip']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Pangkat, Golongan/Ruang</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php $g = $this->pegawai->get_pangkat_terakhir($biodata['id_pegawai']); echo $g['pangkat'] . ' / ' . str_replace(" / ", " ", $g['golongan']) ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Terhitung mulai tanggal</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo format_tanggal_tampilan($g['TMT']) ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Tempat, tanggal lahir</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['tempat_lahir']; ?>, <?php echo tampilan_tanggal_indonesia($biodata['tanggal_lahir'], false, true); ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Jenis kelamin</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['jk']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Agama</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['agama']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Jenis Kepegawaian</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span>Pegawai Negeri Sipil</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Status Kepegawaian</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['status_kepegawaian']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Jabatan</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php $j = $this->pegawai->get_jabatan_terakhir($biodata['id_pegawai']); echo $j['jabatan'] ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Unit kerja</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span>Dinas Kesehatan Kota Bogor</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Gaji pokok / PP</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span>Peraturan Pemerintah Nomor 25 Tahun 2010  Rp.<?php $k = $this->pegawai->get_gaji_terakhir($biodata['id_pegawai']); echo format_rupiah($k['gaji']) ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Masa kerja golongan</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>Masa kerja keseluruhan</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span></span></td>
                        </tr>


                        <tr>
                            <td height="20" align="left"><span>Alamat rumah</span></td>
                            <td align="left"><strong><span>:</span></strong></td>
                            <td align="left"><span><?php echo $biodata['alamat']; ?></span></td>
                        </tr>

                    </tbody>
                </table>

                <center>
                    <h3>Tanggungan Keluarga</h3>
                </center>

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
                            <?php if(count($data_tanggungan) > 0) : $i = 1; foreach($data_tanggungan as $data) : ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo format_tanggal_tampilan($data['tanggal_lahir']); ?></td>
                                <td><?php echo format_tanggal_tampilan($data['tanggal_nikah']); ?></td>
                                <td><?php echo $data['pekerjaan']; ?></td>
                                <td><?php if($data['dapat_tunjangan'] == "1") echo "Ya"; else echo "Tidak" ?></td>
                                <td><?php echo $data['keterangan']; ?></td>
                            </tr>
                            <?php endforeach; else : ?>
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

                <?php else : ?>
                <p>
                    Pilih salah satu pegawai di samping
                </p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
