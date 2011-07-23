<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input kegiatan luar Puskesmas
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Masukkan data kegiatan</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td>Pilih pegawai</td>
                            <td>

                                <select name="sel_pegawai" class="input-long">
                                    <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        echo "<option>{$pegawai[$j]}</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><input type="text" name="tanggal_kegiatan" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td><input type="text" name="lokasi_kegiatan" maxlength="255" class="input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Kegiatan</td>
                            <td><textarea cols="35" rows="3" name="kegiatan"></textarea></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>