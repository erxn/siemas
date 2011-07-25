<?php include 'header.php'; ?>

<?php include '../forms/list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Biodata fungsional
    </h1>
</div>

<div id="page">


    <div style="width: 20%;" class="grid_6">
        <div class="module">
            <h2><span>Daftar pegawai</span></h2>
            <div class="module-body">
                <p>Klik nama pegawai untuk melihat biodatanya</p>
                <p id="list_filter_header">Cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                    <?php
                    for ($j = 1; $j < count($pegawai); $j++) {

                        echo "<li><a href='forms/edit_pegawai.php'>{$pegawai[$j]}</a></li>";
                    } ?>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/list_filter.js"></script>

    <div style="width: 76%" class="grid_6">
        <div class="module">
            <h2><span>Biodata</span></h2>
            <div class="module-body">
                <table border="0" width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td height="20" align="left"><span>NAMA</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>drg. Mellyawati</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>NIP</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>19570207 198403 2 002</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>TEMPAT/TANGGAL LAHIR</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Magelang, 7 Februari 1957</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>PANGKAT /GOLONGAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Pembina Utama Muda / IV C</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>STATUS KEPEGAWAIAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>PNS Daerah</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>SUMBER GAJI</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>DIPA Daerah</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>JABATAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>Dokter Gigi Madya</span></td>
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

                            <td align="left"><span>Dokter Gigi</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>RIWAYAT PENDIDIKAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left">S1 Fakultas Kedokteran Gigi UPDMD Moestopo</td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span><br /></span></td>

                            <td align="left"><strong><span><br /></span></strong></td>

                            <td align="left"><span>Tahun 1982</span></td>
                        </tr>

                        <tr>
                            <td height="20" align="left"><span>RIWAYAT PELATIHAN</span></td>

                            <td align="left"><strong><span>:</span></strong></td>

                            <td align="left"><span>* Paltihan Teknis Fungsional Dokter Gigi</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>
