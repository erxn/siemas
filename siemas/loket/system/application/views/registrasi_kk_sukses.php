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
                                <td><?php echo tgl_indo($kk['tanggal_pendaftaran'])?></td>
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

        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Anggota Keluarga</span></h2>
                
               <?php $this->load->view('form_daftar_pasien');?>
            </div>


        </div>
        
    </div>
</div>
</body>
</html>
