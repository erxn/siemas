<?php $this->load->view('header'); ?>

<form action="" method="post" id="form">

<div class="belowribbon">
    <h1>
        Input penilaian DP3
        <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
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
            <h2>
                <span>Tahun&nbsp;&nbsp;&nbsp;
                    <input type="text" name="tahun" id="tahun" value="<?php echo $tahun; ?>" class="input-short" style="width: 70px"/>
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/penilaian/input_dp3/' + $('#tahun').val()"/>
                </span>
            </h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kesetiaan</th>
                            <th>Prestasi Kerja</th>
                            <th>Tanggung Jawab</th>
                            <th>Ketaatan</th>
                            <th>Kejujuran</th>
                            <th>Kerjasama</th>
                            <th>Prakarsa</th>
                            <th>Kepemimpinan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($daftar_nilai as $data) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td>
                                    <input type="hidden" name="id_pegawai[]" value="<?php echo $data['id_pegawai'] ?>"/>
                                    <?php echo $i + 1; ?>
                                </td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><input type="text" value="<?php echo $data['kesetiaan'] ?>" maxlength="3" id="field_0_<?php echo $i-1 ?>" name="kesetiaan[]"    size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['prestasi_kerja'] ?>" maxlength="3" id="field_1_<?php echo $i-1 ?>" name="prestasi[]"     size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['tanggung_jawab'] ?>" maxlength="3" id="field_2_<?php echo $i-1 ?>" name="tanggung_jawab[]" size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['ketaatan'] ?>" maxlength="3" id="field_3_<?php echo $i-1 ?>" name="ketaatan[]"     size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['kejujuran'] ?>" maxlength="3" id="field_4_<?php echo $i-1 ?>" name="kejujuran[]"    size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['kerjasama'] ?>" maxlength="3" id="field_5_<?php echo $i-1 ?>" name="kerjasama[]"    size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['prakarsa'] ?>" maxlength="3" id="field_6_<?php echo $i-1 ?>" name="prakarsa[]"     size="5" class="number input-full" style="width: 60px"/></td>
                                <td><input type="text" value="<?php echo $data['kepemimpinan'] ?>" maxlength="3" id="field_7_<?php echo $i-1 ?>" name="kepemimpinan[]" size="5" class="number input-full" style="width: 60px"/></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</form>

<script type="text/javascript" src="js/keyhandler.js"></script>

<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript">

$.validity.setup({ outputMode:"modal" });

$('#form').validity(function(){
    $('.number').match('number', 'Harus diisi angka');
});

</script>

<?php $this->load->view('footer'); ?>