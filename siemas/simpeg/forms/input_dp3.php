<?php include 'list_pegawai.php';?>

<script type="text/javascript" src="jquery.js"></script>

<p>
    Tahun:
    <input type="text" name="tahun" value="<?php echo date("Y"); ?>"/>
    <input type="button" value="Tampilkan"/>
</p>

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
        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $pegawai[$i]; ?></td>
                <td><input type="text" value="" maxlength="3" name="kesetiaan[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="prestasi[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="tanggung_jawab[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="ketaatan[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="kejujuran[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="kerjasama[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="prakarsa[]" size="5"/></td>
                <td><input type="text" value="" maxlength="3" name="kepemimpinan[]" size="5"/></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>