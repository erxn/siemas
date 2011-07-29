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
                    <div>
                        <span class="notification n-success" style="height: 5px">PENDAFTARAN KK BERHASIL</span>
                    </div>
                    <table class="noborder" style="width: 100%">
                        <tbody>
                            <tr class="odd">
                                <td colspan="2"><strong>Profil KK</strong></td>
                            </tr>
                            <tr>
                                <td  style="width: 25%;" >Tgl. Pendaftaran</td>
                                <td><?php echo tgl_indo($kk[0]['tanggal_pendaftaran'])?></td>
                            </tr>
                            <tr  class="odd">
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
                </div>

            </div>
        </div>

        </div>
        <div class="grid_6" style="width: 48%">
    <div class="module">
        <h2><span>Profil Pasien</span></h2>
        <div class="module-body">
            <div>
                <span class="notification n-success" style="height: 5px">PENDAFTARAN PASIEN BERHASIL</span>
            </div>
            <table class="noborder" style="width: 100%">
                <tr class="odd">
                    <td style="width: 40%">ID Pasien</td>
                    <td><?php echo $pasien[0]['kode_pasien']?></td>
                </tr>
                <tr>
                    <td>Nama Kepala Keluarga</td>
                    <td><?php echo $kk[0]['nama_kk']?></td>
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
                    <td>Tanggal Lahir</td>
                    <td><?php echo tgl_indo($pasien[0]['tanggal_lahir'])?> <span style="color: #2ba234"> ( <?php echo hitUmur($pasien[0]['tanggal_lahir'])?> tahun )</span></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $kk[0]['alamat_kk']." Kec. ".$kk[0]['kecamatan_kk'].", Kel. ".$kk[0]['kelurahan_kk'].", Kab/Kota ".$kk[0]['kota_kab_kk']?></td>
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
                    <td><h5>Poli Tujuan</h5></td>
                    <td><h5><?php echo $poli;?></h5></td>
                </tr>
            </table>
            
            
        </div>
    </div>
</div>
    </div>
</body>
</html>
