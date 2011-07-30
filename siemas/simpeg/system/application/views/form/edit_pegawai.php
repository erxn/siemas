<?php

$this->load->view('header');

//print_r($data_pegawai);
//print_r($data_pelatihan);
//print_r($data_pendidikan);
//print_r($data_tanggungan);
//exit;

?>

<script type="text/javascript" src="template/jquery.js"></script>

<form action="" method="post" enctype="multipart/form-data">

    <div class="belowribbon">
        <h1>
            Edit data pegawai
            <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px" name="submit"/>
        </h1>
    </div>

        <script type="text/javascript" src="jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $( ".datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'dd-mm-yy'
                });
            });
        </script>

   <div id="page">
        <div class="grid_6" style="width: 48%">

            <?php if(isset($updated)) : ?>
            <div class="notification n-success">
                Data telah disimpan
            </div>
            <?php endif; ?>

            <div class="module">
                <h2><span>Data diri</span></h2>
                <div class="module-body">
                    <table width="100%" class="noborder">
                        <tbody>
                            <tr>
                                <td width="40%"><label>Nama</label></td>
                                <td><input type="text" name="nama" maxlength="255" class="input-long" value="<?php echo $data_pegawai['nama'] ?>"/></td>
                            </tr>
                            <tr>
                                <td><label>Tempat lahir</label></td>
                                <td><input type="text" name="tempat_lahir" maxlength="255" class="input-long" value="<?php echo $data_pegawai['tempat_lahir'] ?>"/></td>
                            </tr>
                            <tr>
                                <td><label>Tanggal lahir</label></td>
                                <td><input type="text" name="tanggal_lahir" maxlength="255" class="input-long" value="<?php echo format_tanggal_tampilan($data_pegawai['tanggal_lahir']) ?>"/><br/><small>(tanggal-bulan-tahun, misal 17-08-1945)</small></td>
                            </tr>
                            <tr>
                                <td><label>Alamat</label></td>
                                <td><textarea name="alamat" rows="3" cols="25"><?php echo $data_pegawai['alamat'] ?></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Jenis kelamin</label></td>
                                <td>
                                    <select name="jk" class="input-medium">
                                        <option value="" <?php if($data_pegawai['jk'] == "") echo "selected" ?>>-</option>
                                        <option value="L" <?php if($data_pegawai['jk'] == "L") echo "selected" ?>>L</option>
                                        <option value="P" <?php if($data_pegawai['jk'] == "P") echo "selected" ?>>P</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Agama</label></td>
                                <td><input type="text" name="agama" maxlength="255" class="input-long" value="<?php echo $data_pegawai['agama'] ?>"/></td>
                            </tr>
                            <tr>
                                <td><label>Gol. darah</label></td>
                                <td>
                                    <select name="gol_darah" class="input-medium">
                                        <option value=""   <?php if($data_pegawai['gol_darah'] == "") echo "selected" ?>>-</option>
                                        <option value="A"  <?php if($data_pegawai['gol_darah'] == "A") echo "selected" ?>>A</option>
                                        <option value="B"  <?php if($data_pegawai['gol_darah'] == "B") echo "selected" ?>>B</option>
                                        <option value="AB" <?php if($data_pegawai['gol_darah'] == "AB") echo "selected" ?>>AB</option>
                                        <option value="O"  <?php if($data_pegawai['gol_darah'] == "O") echo "selected" ?>>O</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Status</label></td>
                                <td>
                                    <select name="status" class="input-medium">
                                        <option value="" <?php if($data_pegawai['status'] == "") echo "selected" ?>>-</option>
                                        <option value="Menikah" <?php if($data_pegawai['status'] == "Menikah") echo "selected" ?>>Menikah</option>
                                        <option value="Belum menikah" <?php if($data_pegawai['status'] == "Belum menikah") echo "selected" ?>>Belum menikah</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Telepon</label></td>
                                <td><input type="text" name="telepon" maxlength="255" class="input-long" value="<?php echo $data_pegawai['telepon'] ?>"/></td>
                            </tr>
                            <?php if($data_pegawai['pasfoto'] != "") : ?>
                            <tr>
                                <td><label>Pas foto</label></td>
                                <td>
                                    <input type="hidden" name="foto_sekarang" value="<?php echo $data_pegawai['pasfoto'] ?>"/>
                                    <img src="foto/<?php echo $data_pegawai['pasfoto'] ?>" width="200" id="pasfoto"/><br/>
                                    <input id="btn_ganti" type="button" value="     Ganti     " onclick="$(this).hide(); $('#pasfoto').slideUp(); $('#uploader').show()"/>
                                    <div id="uploader" style="display: none">
                                        <input type="file" name="userfile" class="input-long"/><br/>(maksimal 500 KB, gambar harus tipe JPG / PNG / GIF)
                                        <input type="button" value="     Batal     " onclick="$('#btn_ganti').show(); $('#pasfoto').slideDown(); $('#uploader').hide()"/>
                                    </div>
                                </td>
                            </tr>
                            <?php else: ?>
                            <tr>
                                <td><label>Pas foto</label></td>
                                <td><input type="file" name="userfile" class="input-long"/><br/>(maksimal 500 KB, gambar harus tipe JPG / PNG / GIF)</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Riwayat pendidikan</span></h2>
                <div class="module-body">
                    <table id="tabel_pendidikan" class="noborder">
                        <thead>
                            <tr>
                                <td>Pendidikan</td>
                                <td width="20%">Tahun ijazah</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($data_pendidikan) > 0) : foreach($data_pendidikan as $data) : ?>
                            <tr>
                                <td><input type="text" name="pendidikan[]" maxlength="255" class="input-full" value="<?php echo $data['pendidikan'] ?>"/>
                                <input type="hidden" name="id_pendidikan[]" value="<?php echo $data['id_pendidikan'] ?>"/></td>
                                <td><input type="text" name="tahun_pendidikan[]" maxlength="4" class="input-full" value="<?php echo $data['tahun_ijazah'] ?>"/></td>
                            </tr>
                            <?php endforeach; else : ?>
                            <tr>
                                <td><input type="text" name="pendidikan[]" maxlength="255" class="input-full"/></td>
                                <td><input type="text" name="tahun_pendidikan[]" maxlength="4" class="input-full"/></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <a href="#" class="button" onclick="tambahPendidikan(); return false;" >
                        <span><img src="template/plus-sma.gif" width="12" height="9" alt="" /> Tambah data pendidikan</span>
                    </a>

                </div>
            </div>
            <div class="module">
                <h2><span>Riwayat pelatihan</span></h2>
                <div class="module-body">

                    <table id="tabel_pelatihan" class="noborder">
                        <thead>
                            <tr>
                                <td>Pelatihan</td>
                                <td width="20%">Tahun</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($data_pelatihan) > 0) : foreach($data_pelatihan as $data) : ?>
                            <tr>
                                <td><input type="text" name="pelatihan[]" maxlength="255" class="input-full" value="<?php echo $data['pelatihan'] ?>"/>
                                <input type="hidden" name="id_pelatihan[]" value="<?php echo $data['id_pelatihan'] ?>"/></td>
                                <td><input type="text" name="tahun_pelatihan[]" maxlength="4" class="input-full" value="<?php echo $data['tahun'] ?>"/></td>
                            </tr>
                            <?php endforeach; else : ?>
                            <tr>
                                <td><input type="text" name="pelatihan[]" maxlength="255" class="input-full"/></td>
                                <td><input type="text" name="tahun_pelatihan[]" maxlength="4" class="input-full"/></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <a href="#" class="button" onclick="tambahPelatihan(); return false;" >
                        <span><img src="template/plus-sma.gif" width="12" height="9" alt="" /> Tambah data pelatihan</span>
                    </a>
                </div>
            </div>
        </div>

        <div style="margin: 0px 1%">
            <div class="module">
                <h2><span>Tanggungan</span></h2>
                <div class="module-table-body">
                    <table border="0" id="tabel_tanggungan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal lahir</th>
                                <th>Tanggal nikah</th>
                                <th>Pekerjaan</th>
                                <th>Dapat tunjangan?</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($data_tanggungan) > 0) : $i = 1; foreach($data_tanggungan as $data) : ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><input type="text" name="tanggungan_nama[]" maxlength="255" class="input-long" value="<?php echo $data['nama']; ?>"/></td>
                                <td><input type="text" name="tanggungan_tanggal_lahir[]" maxlength="255" class="input-long" value="<?php echo format_tanggal_tampilan($data['tanggal_lahir']); ?>"/></td>
                                <td><input type="text" name="tanggungan_tanggal_nikah[]" maxlength="255" class="input-long" value="<?php echo format_tanggal_tampilan($data['tanggal_nikah']); ?>"/></td>
                                <td><input type="text" name="tanggungan_pekerjaan[]" maxlength="255" class="input-long" value="<?php echo $data['pekerjaan']; ?>"/></td>
                                <td style="text-align: center">
                                    <select name="tanggungan_dapat_tunjangan[]" class="input-long">
                                        <option value="1" <?php if($data['dapat_tunjangan'] == "1") echo "selected" ?>>Ya</option>
                                        <option value="0" <?php if($data['dapat_tunjangan'] == "0") echo "selected" ?>>Tidak</option>
                                    </select>
                                </td>
                                <td><input type="text" name="tanggungan_keterangan[]" maxlength="255" class="input-long" value="<?php echo $data['keterangan']; ?>"/>
                                <input type="hidden" name="tanggungan_id[]" value="<?php echo $data['id_tanggungan'] ?>"/></td>
                            </tr>
                            <?php endforeach; else : ?>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="tanggungan_nama[]" maxlength="255" class="input-long"/></td>
                                <td><input type="text" name="tanggungan_tanggal_lahir[]" maxlength="255" class="input-long"/></td>
                                <td><input type="text" name="tanggungan_tanggal_nikah[]" maxlength="255" class="input-long"/></td>
                                <td><input type="text" name="tanggungan_pekerjaan[]" maxlength="255" class="input-long"/></td>
                                <td style="text-align: center">
                                    <select name="tanggungan_dapat_tunjangan[]" class="input-long">
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </td>
                                <td><input type="text" name="tanggungan_keterangan[]" maxlength="255" class="input-long"/></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <a href="#" class="button" onclick="tambahTanggungan(); return false;" style="margin: 5px 0px 20px 20px">
                        <span><img src="template/plus-sma.gif" width="12" height="9" alt="" /> Tambah data tanggungan</span>
                    </a>
                </div>
            </div>
        </div>


        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Data kepegawaian</span></h2>
                <div class="module-body">
                    <table width="100%" class="noborder">
                        <tbody>
                            <tr>
                                <td width="40%"><label>NIP</label></td>
                                <td><input type="text" name="nip" maxlength="255" class="input-long" value="<?php echo $data_pegawai['nip'] ?>"/></td>
                            </tr>
                            <tr>
                                <td><label>Tanggal masuk</label></td>
                                <td><input type="text" name="tanggal_masuk" maxlength="255" class="datepicker input-long" value="<?php echo format_tanggal_tampilan($data_pegawai['tanggal_masuk']) ?>"/></td>
                            </tr>
                            <tr>
                                <td><label>Status kepegawaian</label></td>
                                <td><input type="text" name="status_kepegawaian" maxlength="255" value="<?php echo $data_pegawai['status_kepegawaian'] ?>" class="input-long"/></td>
                            </tr>
                            <tr>
                                <td><label>BP Pemda</label></td>
                                <td>
                                    <select name="bp_pemda" class="input-short">
                                        <option value="1" <?php if($data_pegawai['bp_pemda'] == "1") echo "selected" ?>>Ya</option>
                                        <option value="0" <?php if($data_pegawai['bp_pemda'] == "0") echo "selected" ?>>Tidak</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Sumber gaji</label></td>
                                <td><input type="text" name="sumber_gaji" maxlength="255" value="<?php echo $data_pegawai['sumber_gaji'] ?>" class="input-long"/></td>
                            </tr>
                            <tr>
                                <td><label>Kenaikan gaji YAD</label></td>
                                <td><input type="text" name="kenaikan_yad" maxlength="255" class="datepicker input-long" value="<?php echo format_tanggal_tampilan($data_pegawai['kenaikan_YAD']) ?>"/></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Data kepangkatan</span></h2>
                <div class="module-body">
                    <table width="100%" class="noborder">
                        <tbody>
                            <tr>
                                <td>Data ini dapat diedit dari menu perubahan jabatan/pangkat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

    var pangkat = new Array();

    pangkat['-'] = "";
    pangkat['I / a'] = "Juru Muda";
    pangkat['I / b'] = "Juru Muda Tingkat 1";
    pangkat['I / c'] = "Juru";
    pangkat['I / d'] = "Juru Tingkat 1";
    pangkat['II / a'] = "Pengatur Muda";
    pangkat['II / b'] = "Pengatur Muda Tingkat 1";
    pangkat['II / c'] = "Pengatur";
    pangkat['II / d'] = "Pengatur Tingkat 1";
    pangkat['III / a'] = "Penata Muda";
    pangkat['III / b'] = "Penata Muda Tingkat 1";
    pangkat['III / c'] = "Penata";
    pangkat['III / d'] = "Penata Tingkat 1";
    pangkat['IV / a'] = "Pembina";
    pangkat['IV / b'] = "Pembina Tingkat 1";
    pangkat['IV / c'] = "Pembina Utama Muda";
    pangkat['IV / d'] = "Pembina Utama Madya";
    pangkat['IV / e'] = "Pembina Utama";

    for(var j in pangkat) {

        document.getElementById("gol_ruang").innerHTML += "<option value='"+j+"'>"+j+"</option>";

    }

    function setJabatan(gol_ruang) {

        $("#pangkat").val(pangkat[gol_ruang]);

    }

    function tambahPendidikan() {
        $('#tabel_pendidikan tbody>tr:last').clone(true).insertAfter('#tabel_pendidikan tbody>tr:last');
        $('#tabel_pendidikan tbody>tr:last input').val('');
        $('#tabel_pendidikan tbody>tr:last input').first().focus();
    }

    function tambahPelatihan() {
        $('#tabel_pelatihan tbody>tr:last').clone(true).insertAfter('#tabel_pelatihan tbody>tr:last');
        $('#tabel_pelatihan tbody>tr:last input').val('');
        $('#tabel_pelatihan tbody>tr:last input').first().focus();
    }

    function tambahTanggungan() {
        var i = parseInt($('#tabel_tanggungan tbody>tr:last td').first().text());
        i++

        $('#tabel_tanggungan tbody>tr:last').clone(true).insertAfter('#tabel_tanggungan tbody>tr:last');
        $('#tabel_tanggungan tbody>tr:last input').val('');
        $('#tabel_tanggungan tbody>tr:last input').first().focus();
        $('#tabel_tanggungan tbody>tr:last td').first().text(i);

    }

</script>

</form>

<?php $this->load->view('footer'); ?>