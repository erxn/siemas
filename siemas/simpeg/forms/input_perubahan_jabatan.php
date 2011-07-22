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
            <td>Riwayat jabatan</td>
            <td>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Jabatan</th>
                            <th>TMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Jabatan baru</td>
            <td><input type="text" name="jabatan" maxlength="255"/></td>
        </tr>
        <tr>
            <td>TMT</td>
            <td><input type="text" name="tmt" maxlength="255" class="datepicker"/></td>
        </tr>
    </tbody>
</table>