<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="belowribbon">
    <h1>
        Input absensi hari ini
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Senin, 25 Juli 2011</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>
                                <input type="checkbox" id="ck_all" title="Klik jika seluruhnya hadir" onchange="$('.ck_absen').attr('checked', this.checked)"/>
                                <label for="ck_all" style="display: inline">Hadir semuanya</label>
                            </th>
                            <th>Jam hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td>123456789678</td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>
                                    <input type="checkbox" name="hadir[]" id="ck<?php echo $i ?>" class="ck_absen"/>
                                    <label for="ck<?php echo $i ?>" style="display: inline">Hadir</label>
                                </td>
                                <td>
                                    <input type="text" value="07.30" class="input-short" style="width: 70px; text-align: center"/>
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