<?php include '../forms/list_pegawai.php'; ?>

<div style="width: 20%; float: left;">
    <ul>
        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
            <li><a href="#" <?php if ($i == 3)
                echo "style='font-weight: bold; color: black'" ?>><?php echo $pegawai[$i]; ?></a></li>
<?php endfor; ?>
    </ul>
</div>
<div style="width: 80%; float: left">


    <table border="0" width="100%">
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