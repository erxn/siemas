<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input perubahan gaji pokok
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <script type="text/javascript" src="jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $( ".datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd-mm-yy'
            });
        });
    </script>

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Masukkan data perubahan gaji pokok</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td width="30%">Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai">
                                    <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        echo "<option>{$pegawai[$j]}</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Riwayat gaji</td>
                            <td>
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Gaji</th>
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
                            <td>Gaji baru</td>
                            <td>
                                <script type="text/javascript" src="js/textbox_money.js"></script>
                                <input type="text" name="jabatan" maxlength="255" class="input-medium number"/>
                            </td>
                        </tr>
                        <tr>
                            <td>TMT</td>
                            <td><input type="text" name="tmt" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>