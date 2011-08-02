<?php $this->load->view('header'); ?>

<form action="" method="post" id="_form">

<div class="belowribbon">
    <h1>
        Input struktur organisasi
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
            <h2><span>Masukkan kepala Puskesmas</span></h2>
            <div class="module-body">
                <p>Kepala Puskesmas: 
                    <select name="kepala" class="input-long"  style="width: 300px;">
                        <?php foreach ($daftar_pegawai_all as $pegawai) { ?>
                        <option value='<?php echo $pegawai['id_pegawai'] ?>' <?php if($kepala_puskes['id_pegawai'] == $pegawai['id_pegawai']) echo "selected"; ?>><?php echo $pegawai['nama'] ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="update_kepala" class="submit-green" value="Pilih" id="update_kepala" onclick="return confirm('Mengganti kepala puskesmas akan mengubah atasan seluruh pegawai lainnya. Lanjutkan?')"/>
                </p>
            </div>
        </div>

        <div class="module">
            <h2><span>Masukkan atasan dari setiap pegawai</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Atasan langsung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($daftar_pegawai_kecuali_kepala as $pegawai) : ?>
                            <tr <?php if ($i % 2 == 0) echo 'class="even"' ?>>
                                <td>
                                    <?php echo $i; ?>
                                    <input type="hidden" value="<?php echo $pegawai['id_pegawai']; ?>" name="id_pegawai[]"/>
                                </td>
                                <td><?php echo $pegawai['nip']; ?></td>
                                <td><?php echo $pegawai['nama']; ?></td>
                                <td><?php $j = $this->pegawai->get_jabatan_terakhir($pegawai['id_pegawai']); echo $j['jabatan'] ?></td>
                                <td>
                                    <select name="atasan[]" class="input-long">
                                        <?php $j = 1; foreach ($daftar_pegawai_all as $pegawai_atasan) : ?>
                                            <?php if ($pegawai['id_pegawai'] != $pegawai_atasan['id_pegawai']) : ?>
                                                <option value="<?php echo $pegawai_atasan['id_pegawai']; ?>" <?php if($pegawai_atasan['id_pegawai'] == $pegawai['id_atasan']) echo "selected" ?>><?php echo $pegawai_atasan['nama']; ?></option>
                                            <?php endif; ?>
                                        <?php $j++; endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</form>

<?php $this->load->view('footer'); ?>