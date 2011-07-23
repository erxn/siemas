<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input cuti pegawai
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Masukkan data cuti</span></h2>
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
                            <td>Dari tanggal</td>
                            <td><input type="text" name="dari_tanggal" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Sampai tanggal</td>
                            <td><input type="text" name="sampai_tanggal" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>
                                <select name="keperluan" class="input-long">
                                    <option>Cuti tahunan</option>
                                    <option>Cuti besar</option>
                                    <option>Cuti sakit</option>
                                    <option>Cuti bersalin</option>
                                    <option>Cuti karena alasan penting</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan tambahan</td>
                            <td><textarea cols="35" rows="3" name="keterangan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Alamat selama cuti</td>
                            <td><textarea cols="35" rows="3" name="alamat"></textarea></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>