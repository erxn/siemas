<?php include 'list_pegawai.php';?>

<script type="text/javascript" src="jquery.js"></script>

<p>
    Tanggal:
    <input type="text" name="tanggal" value="<?php echo date("d m Y"); ?>" class="datepicker"/>
    <input type="button" value="Tampilkan"/>

</p>


<table width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>
                Hadir?<br/>
                <input type="checkbox" id="ck_all" title="Klik jika seluruhnya hadir" onchange="$('.ck_absen').attr('checked', this.checked)"/>
                <label for="ck_all">Hadir semuanya</label>
            </th>
            <th>Jam hadir</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>123456789678</td>
                <td><?php echo $pegawai[$i]; ?></td>
                <td>
                    <input type="checkbox" name="hadir[]" id="ck<?php echo $i ?>" class="ck_absen"/>
                    <label for="ck<?php echo $i ?>">Hadir</label>
                </td>
                <td>
                    <input type="text" value="07.30"/>
                </td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>