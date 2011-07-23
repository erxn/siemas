<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input struktur organisasi
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
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
                            <th>Atasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td>123456789678</td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>Dokter</td>
                                <td>
                                    <select name="atasan[]" class="input-long">
                                        <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        if ($j != $i)
                                            echo "<option>{$pegawai[$j]}</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <?php endfor; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


<?php include 'footer.php'; ?>