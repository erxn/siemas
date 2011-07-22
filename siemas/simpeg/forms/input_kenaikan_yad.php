<?php include 'list_pegawai.php'; ?>

<table width="100%" border="0">
    <tbody>
        <tr>
            <td>Pilih pegawai</td>
            <td>
                <select name="sel_pegawai">
                    <option value="0">-</option>
                    <?php for($j = 1; $j < count($pegawai); $j++) {

                        echo "<option>{$pegawai[$j]}</option>";

                    } ?>
                </select>
                <input type="button" value="Pilih"/>
            </td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
                Jabatan: Dokter<br/>
                Pangkat: Penata/IIIc
            </td>
        </tr>
        <tr>
            <td>Kenaikan gaji YAD</td>
            <td><input type="text" name="tanggal_yad" maxlength="255" class="datepicker"/></td>
        </tr>
    </tbody>
</table>