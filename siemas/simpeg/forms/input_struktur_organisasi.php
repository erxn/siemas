<?php include 'list_pegawai.php'; ?>

<table width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Atasan</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 1; $i < count($pegawai); $i++) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>123456789678</td>
            <td><?php echo $pegawai[$i]; ?></td>
            <td>Dokter</td>
            <td>
                <select name="atasan[]">
                    <option value="0">-</option>
                    <?php for($j = 1; $j < count($pegawai); $j++) {
                        
                        if($j != $i)
                        echo "<option>{$pegawai[$j]}</option>";

                    } ?>
                </select>
            </td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table>