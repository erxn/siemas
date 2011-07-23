<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="belowribbon">
    <h1>
        Input penilaian DP3
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2>
                <span>Tahun&nbsp;&nbsp;&nbsp;
                    <input type="text" name="tahun" value="<?php echo date("Y"); ?>" class="input-short" style="width: 70px"/>
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; padding: 1px 3px;"/>
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
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td><input type="text" value="" maxlength="3" name="kesetiaan[]"    size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="prestasi[]"     size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="tanggung_jawab[]" size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="ketaatan[]"     size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="kejujuran[]"    size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="kerjasama[]"    size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="prakarsa[]"     size="5" class="input-full" style="width: 60px"/></td>
                                <td><input type="text" value="" maxlength="3" name="kepemimpinan[]" size="5" class="input-full" style="width: 60px"/></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>

<?php include 'footer.php'; ?>