<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>Pendaftaran Pasien Lama</span></h2>
        <div class="module-body">
            <form name="reg_kunjungan" method="post" action="#">
                <table class="noborder">
                    <tr class="odd">
                        <td style="width: 25%">Tgl. Pendaftaran</td>
                        <td style="width: 68%"><input name="tanggal_pendaftaran" id="datepicker" type="text" class="input-medium" value="<?php echo date("d-m-Y") ?>"/></td>
                    </tr>
                    <tr>
                        <td>ID Pasien</td>
                        <td><?php echo $pasien[0]['kode_pasien']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Nama Pasien</td>
                        <td><span style="color: #2ba234; font-weight: bold"><?php echo $pasien[0]['nama_pasien']?></span></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $pasien[0]['jk_pasien']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Umur</td>
                        <td><span style="color: #2ba234"><?php echo $pasien[0]['umur']." tahun";?></span></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $pasien[0]['alamat_kk']." Kec. ".$pasien[0]['kecamatan_kk'].", Kel. ".$pasien[0]['kelurahan_kk'].", Kab/Kota ".$pasien[0]['kota_kab_kk']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Status Pelayanan</td>
                        <td><?php echo $pasien[0]['status_pelayanan']?></td>
                    </tr>
                    <tr>
                        <td>No. Kartu</td>
                        <td><?php echo $pasien[0]['no_kartu_layanan']?></td>
                    </tr>
                    <tr class="odd">
                        <td>&nbsp;</td>
                        <td><form name="form1" method="post" action="">
                                <input type="radio" name="radio" id="radio" value="radio">
                                Bawa kartu
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="radio" id="radio2" value="radio">
                                Tidak Bawa
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php $this->load->view('pilih_poli_pasien_lama');?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="tambah" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
