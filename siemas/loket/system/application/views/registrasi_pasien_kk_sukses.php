<?php $this->load->view('header');?>
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>
<script type="text/javascript">
    $(document).ready(function(){
        $("#test").colorbox({initialHeight: "200px", initialWidth: "200px", width: "50%", height: "65%"})
    });
</script>

<div class="container_12">
    <div>
        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Kepala Keluarga (KK)</span></h2>
                <div class="module-body">
                    <table class="noborder" style="width: 100%">
                        <tbody>
                            <tr>
                                <td colspan="2"><strong>Profil KK</strong></td>
                            </tr>
                            <tr class="odd">
                                <td>Nama KK</td>
                                <td><span style="color: #24cc57; font-weight: bold"><?php echo $kk[0]['nama_kk']?></span></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo $kk[0]['jk_kk']?></td>
                            </tr>
                            <tr class="odd">
                                <td>Alamat</td>
                                <td><?php echo $kk[0]['alamat_kk']." Kec. ".$kk[0]['kecamatan_kk'].", Kel. ".$kk[0]['kelurahan_kk'].", Kab/Kota ".$kk[0]['kota_kab_kk']?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                        </tbody>
                    </table>
                    <h4>Daftar Anggota Keluarga</h4>
                    <table>
                        <thead>
                            <tr>
                                <th style="width:2%">No</th>
                                <th style="width:10%">Nama Anggota</th>
                                <th style="width:10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;
                            foreach ($kk as $anggota) {
                                if($i%2==0) $x="odd";
                                else $x ="even"; ?>
                            <tr class="<?php echo $x;?>">
                                <td><?php echo $i++; ?></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $anggota['id_pasien']?>/<?php echo $kk[0]['id_kk']?>"><?php echo $anggota['nama_pasien'] ?></a></td>
                                <td><?php echo $anggota['status_dalam_keluarga'] ?></td>
                            </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Profil Pasien</span></h2>
                <div class="module-body">

                    <div>
                        <span class="notification n-success" style="height: 5px">PENDAFTARAN PASIEN BERHASIL. &nbsp;<a href="index.php/registrasi">Kembali ke pendaftaran.</a></span>
                    </div>
                    <table class="noborder" style="width: 100%">
                        <tr>
                            <td style="width: 40%">Nama Kepala Keluarga</td>
                            <td><?php echo $kk[0]['nama_kk']?></td>
                        </tr>
                        <tr class="odd">
                            <td>Nama Pasien</td>
                            <td><span style="color: #2ba234; font-weight: bold"><?php echo $pasien[0]['nama_pasien']?></span></td>
                        </tr>
                        <tr>
                            <td>Status dlm Keluarga</td>
                            <td><?php echo $pasien[0]['status_dalam_keluarga']?></td>
                        </tr>
                        <tr  class="odd">
                            <td>Jenis Kelamin</td>
                            <td><?php echo $pasien[0]['jk_pasien']?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?php echo tgl_indo($pasien[0]['tanggal_lahir'])?> <span style="color: #2ba234"> ( <?php echo hitUmur($pasien[0]['tanggal_lahir'])?> tahun )</span></td>
                        </tr>
                        <tr  class="odd">
                            <td>Alamat</td>
                            <td><?php echo $kk[0]['alamat_kk']." Kec. ".$kk[0]['kecamatan_kk'].", Kel. ".$kk[0]['kelurahan_kk'].", Kab/Kota ".$kk[0]['kota_kab_kk']?></td>
                        </tr>
                        <tr>
                            <td>Status Pelayanan</td>
                            <td><?php echo $pasien[0]['status_pelayanan']?></td>
                        </tr>
                        <?php if($pasien[0]['status_pelayanan']=="Askes"||$pasien[0]['status_pelayanan']=="Jamkesmas"){?>
                        <tr  class="odd">
                            <td>No. Kartu</td>
                            <td><?php echo $pasien[0]['no_kartu_layanan']?></td>
                        </tr>
                        <?php }?>
                        <tr class="odd">
                            <td><h5>Poli Tujuan</h5></td>
                            <td><h5><?php echo strtoupper(ucfirst($poli));?></h5>

                                <div style="width: 100px; padding: 5px; text-align: center; border: 2px solid #2BA234" class="kotak">
                                    <small style="font-size: 11px">No. Kunjungan</small>
                                    <h3 style="color: #2BA234"><?php echo $kunjungan;?></h3>
                                </div>
                                <div style="width: 100px; padding: 5px; text-align: center; border: 2px solid #2BA234" class="kotak">
                                    <small>ID Pasien</small>
                                    <h3 style="color: #2BA234"><?php echo $pasien[0]['kode_pasien']?></h3>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>


    </div>

</div>
</body>
</html>
