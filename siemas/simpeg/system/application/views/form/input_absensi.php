<?php $this->load->view('header'); ?>

<script type="text/javascript" src="jquery.js"></script>

<?php if(!($this->absensi->is_libur_pkm($tahun, $bulan, $tanggal) && $this->absensi->is_libur_bp($tahun, $bulan, $tanggal))) : ?>
<form action="" method="post">
<?php endif; ?>
    
<div class="belowribbon">
    <h1>
        Input absensi (<?php echo tampilan_tanggal_indonesia("$tanggal-$bulan-$tahun", true); ?>)
        <?php if(!($this->absensi->is_libur_pkm($tahun, $bulan, $tanggal) && $this->absensi->is_libur_bp($tahun, $bulan, $tanggal))) : ?>
        <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
        <?php endif; ?>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">

        <?php if(isset($saved)) : ?>
        <div class="notification n-success">
            Data telah disimpan
        </div>
        <?php endif; ?>

        <div class="module">
            <h2><span>Puskesmas Bogor Tengah</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <?php $i = 0; if(!$this->absensi->is_libur_pkm($tahun, $bulan, $tanggal)) : ?>
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">NIP</th>
                            <th width="35%">Nama</th>
                            <th width="20%">Hadir?</th>
                            <th width="20%">Jam hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($absensi_pkm as $data) : ?>
                            <tr <?php if ($i % 2 == 0)
                                echo 'class="even"' ?>>
                                    <td>
                                        <input type="hidden" name="id_pegawai[<?php echo $data['id_pegawai']; ?>]" value="<?php echo $data['id_pegawai']; ?>"/>
                                        <input type="hidden" name="id_absensi[<?php echo $data['id_pegawai']; ?>]" value="<?php echo $data['id_absensi']; ?>"/>
                                        <?php echo $i+1; ?>
                                    </td>
                                    <td><?php echo format_nip($data['nip']); ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td>
                                        <input id="ck<?php echo $i ?>" type="checkbox" name="hadir[<?php echo $data['id_pegawai']; ?>]" class="ck_absen" <?php if($data['hadir'] == 1) echo "checked='checked'" ?>/>
                                        <label for="ck<?php echo $i ?>" style="display: inline" class="chk_label<?php if($data['hadir'] == 1) echo " LabelSelected" ?>" unselectable="on">Hadir</label>
                                    </td>
                                    <td>
                                        <input type="text" id="field_0_<?php echo $i ?>" name="jam_hadir[<?php echo $data['id_pegawai']; ?>]" value="<?php if($data['jam_hadir'] != "") echo date("H:i", strtotime($data['jam_hadir'])); else echo "07:30" ?>" class="input-short" style="width: 70px; text-align: center"/>
                                    </td>
                                </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                    <?php else : ?>
                    <tbody>
                        <tr>
                            <td colspan="5"><em>Puskesmas libur pada tanggal ini</em></td>
                        </tr>
                    </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>

        <div class="module">
            <h2><span>BP Pemda</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <?php if(!$this->absensi->is_libur_bp($tahun, $bulan, $tanggal)) : ?>
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="20%">NIP</th>
                            <th width="35%">Nama</th>
                            <th width="20%">Hadir?</th>
                            <th width="20%">Jam hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($absensi_bp as $data) : ?>
                            <tr <?php if ($i % 2 == 0)
                                echo 'class="even"' ?>>
                                    <td>
                                        <input type="hidden" name="id_pegawai[<?php echo $data['id_pegawai']; ?>]" value="<?php echo $data['id_pegawai']; ?>"/>
                                        <input type="hidden" name="id_absensi[<?php echo $data['id_pegawai']; ?>]" value="<?php echo $data['id_absensi']; ?>"/>
                                        <?php echo $i+1; ?>
                                    </td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td>
                                        <input id="ck<?php echo $i ?>" type="checkbox" name="hadir[<?php echo $data['id_pegawai']; ?>]" class="ck_absen" <?php if($data['hadir'] == 1) echo "checked='checked'" ?>/>
                                        <label for="ck<?php echo $i ?>" style="display: inline" class="chk_label<?php if($data['hadir'] == 1) echo " LabelSelected" ?>" unselectable="on">Hadir</label>
                                    </td>
                                    <td>
                                        <input type="text" id="field_0_<?php echo $i ?>" name="jam_hadir[<?php echo $data['id_pegawai']; ?>]" value="<?php if($data['jam_hadir'] != "") echo date("H:i", strtotime($data['jam_hadir'])); else echo "07:30" ?>" class="input-short" style="width: 70px; text-align: center"/>
                                    </td>
                                </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                    <?php else : ?>
                    <tbody>
                        <tr>
                            <td colspan="5"><em>BP Pemda libur pada tanggal ini</em></td>
                        </tr>
                    </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>

    </div>

</div>

</form>

<script type="text/javascript" src="js/keyhandler.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$(".ck_absen").change(function(){
		if($(this).is(":checked")){
			$(this).next("label").addClass("LabelSelected");
		}else{
			$(this).next("label").removeClass("LabelSelected");
		}
	});
});
</script>

<?php $this->load->view('footer'); ?>