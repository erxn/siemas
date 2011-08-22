<?php $this->load->view('header'); ?>

<div class="belowribbon">
    <h1>
        Biodata fungsional
        <a href="index.php/pegawai/laporan_biodata_fungsional_xls" class="submit-green xls-button" style="margin-left: 10px" title="Simpan sebagai file Excel">
            <img src="template/ms-excel.png" alt=""/>
            Simpan ke Excel
        </a>
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
                        <li><a href="index.php/pegawai/laporan_biodata_fungsional/<?php echo $p['id_pegawai']; ?>"><?php echo $p['nama']; ?> &raquo;</a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/list_filter.js"></script>

    <div style="width: 76%" class="grid_6">
        <div class="module">
            <h2><span>Biodata</span></h2>
            <div class="module-body">
                <?php if(isset($biodata)) : ?>

                <center>
                    <h3>BIODATA JABATAN FUNGSIONAL<br/>PUSKESMAS BOGOR TENGAH</h3>
                    <h4>TAHUN <?php echo date("Y"); ?></h4>
                </center>

                <hr/>

                <table border="0" width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td height="20" align="left"><span>NAMA</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php echo $biodata['nama']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>NIP</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php echo format_nip($biodata['nip']); ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>TEMPAT/TANGGAL LAHIR</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php echo $biodata['tempat_lahir']; ?>, <?php echo tampilan_tanggal_indonesia($biodata['tanggal_lahir'], false, true); ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>PANGKAT /GOLONGAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php $g = $this->pegawai->get_pangkat_terakhir($biodata['id_pegawai']); echo $g['pangkat'] . ' / ' . str_replace(" / ", " ", $g['golongan']) ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>STATUS KEPEGAWAIAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php echo $biodata['status_kepegawaian']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>SUMBER GAJI</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php echo $biodata['sumber_gaji']; ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>JABATAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span><?php $j = $this->pegawai->get_jabatan_terakhir($biodata['id_pegawai']); echo $j['jabatan'] ?></span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>UNIT KERJA</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Puskesmas Bogor Tengah</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>SATUAN ORGANISASI</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Dinas Kesehatan Kota Bogor</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>ALAMAT UNIT KERJA</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Jalan Telepon No. 1 Kel.Pabaton</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span><br /></span></td>

                            <td align="left"><strong><span><br /></span></strong></td>

                            <td align="left"><span>Kecamatan Bogor Tengah</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span><br /></span></td>

                            <td align="left"><strong><span><br /></span></strong></td>

                            <td align="left"><span>Kode Pos 16121</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>TELP/FAX</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>( 0251 ) 832 65 40</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>RIWAYAT JABATAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left">
                                <?php if(count($jabatan) > 0) : foreach ($jabatan as $j) : ?>
                                    • <?php echo $j['jabatan'] . ' (TMT ' . format_tanggal_tampilan($j['TMT']) . ')'; ?><br/>
                                <?php endforeach; else : echo "-"; endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>RIWAYAT PENDIDIKAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left">
                                <?php if(count($pendidikan) > 0) : foreach ($pendidikan as $p) : ?>
                                    • <?php echo $p['pendidikan'] . ' Tahun ' . $p['tahun_ijazah']; ?><br/>
                                <?php endforeach; else : echo "-"; endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>RIWAYAT PELATIHAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left">
                                <?php if(count($pelatihan) > 0) : foreach ($pelatihan as $p) : ?>
                                    • <?php echo $p['pelatihan'] . ' Tahun ' . $p['tahun']; ?><br/>
                                <?php endforeach; else : echo "-"; endif; ?>
                            </td>
                        </tr>
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
