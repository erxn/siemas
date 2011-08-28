<br/>
<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>Profil Pasien</span></h2>
        <div class="module-body">
            <table class="noborder" style="width: 100% !important">
                <tr class="odd">
                    <td style="width: 25%">ID Pasien</td>
                    <td style="width: 75%"><?php echo $pasien[0]['kode_pasien'];?></td>
                </tr>
                <tr>
                    <td>Nama Kepala Keluarga</td>
                    <td><?php echo $pasien[0]['nama_kk'];?></td>
                </tr>
                <tr class="odd">
                    <td>Nama Pasien</td>
                    <td><span style="color: #2ba234; font-weight: bold"><?php echo $pasien[0]['nama_pasien'];?></span></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $pasien[0]['jk_pasien'];?></td>
                </tr>
                <tr class="odd">
                    <td>Umur</td>
                    <td><span style="color: #2ba234"><?php echo $pasien[0]['umur']." tahun";?></span></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $pasien[0]['alamat_kk'].", Kel. ".$pasien[0]['kelurahan_kk']."<br/>Kec. ".$pasien[0]['kecamatan_kk'].", Kab/Kota ".$pasien[0]['kota_kab_kk']?></td>
                </tr>
                <tr class="odd">
                    <td>Status Pelayanan</td>
                    <td><?php echo $pasien[0]['status_pelayanan'];?></td>
                </tr>
                <?php if($pasien[0]['status_pelayanan'] == 'Askes'){?>
                <tr>
                    <td>No. Kartu</td>
                    <td><?php echo $pasien[0]['no_kartu_layanan'];?></td>
                </tr>
                <?php if(isset($x)) {?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                
                <tr class="odd">
                    <td>&nbsp;</td>
                    <td>
                        <form name="status_kartu" id="pasien_lama" method="post" action="index.php/pasien/registrasi_pasien_lama/<?php echo $pasien[0]['id_pasien'] ?>">
                            <input type="radio" name="status_kartu"  value="Bawa" id="kartu_Y">
                            <label for="kartu_Y" style="display: inline !important" class="btn-gplus gplus-green">Bawa kartu</label>
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="status_kartu"  value="Tidak" checked="checked" id="kartu_T">
                            <label for="kartu_T" style="display: inline !important" class="btn-gplus gplus-red">Tidak Bawa</label>

                            <input type="hidden" id="poli" name="poli" value=""/>
                        </form>
                    </td>
                </tr>
                <?php }}?>
            </table>
        </div>
    </div>
</div>
