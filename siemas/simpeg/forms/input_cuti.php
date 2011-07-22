<?php include 'list_pegawai.php'; ?>

<table width="100%" border="0">
    <tbody>
        <tr>
            <td>Pilih pegawai</td>
            <td>
                <select name="sel_pegawai">
                    <option value="0">-</option>
                    <?php
                    for ($j = 1; $j < count($pegawai); $j++) {

                        echo "<option>{$pegawai[$j]}</option>";
                    } ?>
                </select>
                <input type="button" value="Pilih"/>
            </td>
        </tr>
        <tr>
            <td>Dari tanggal</td>
            <td><input type="text" name="dari_tanggal" maxlength="255" class="datepicker"/></td>
        </tr>
        <tr>
            <td>Sampai tanggal</td>
            <td><input type="text" name="sampai_tanggal" maxlength="255" class="datepicker"/></td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td>
                <select name="keperluan">
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
            <td><textarea cols="30" rows="3" name="keterangan"></textarea></td>
        </tr>
        <tr>
            <td>Alamat selama cuti</td>
            <td><textarea cols="30" rows="3" name="alamat"></textarea></td>
        </tr>
    </tbody>
</table>