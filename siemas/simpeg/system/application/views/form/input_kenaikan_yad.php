<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input tanggal kenaikan gaji YAD
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
            <h2><span>Masukkan data</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td>Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai" class="input-long">
                                    <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        echo "<option>{$pegawai[$j]}</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kenaikan gaji YAD</td>
                            <td><input type="text" name="tanggal_yad" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>