<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input kegiatan luar Puskesmas
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
            <h2><span>Masukkan data kegiatan</span></h2>
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
                            <td>Tanggal</td>
                            <td><input type="text" name="tanggal_kegiatan" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td><input type="text" name="lokasi_kegiatan" maxlength="255" class="input-medium"/></td>
                        </tr>
                        <tr>
                            <td>Kegiatan</td>
                            <td><textarea cols="35" rows="3" name="kegiatan"></textarea></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Data kegiatan pegawai ini</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Kegiatan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cuti_done">
                            <td>12 Januari 2011</td>
                            <td>Bogor Tengah</td>
                            <td>Posyandu</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>24 Agustus 2011</td>
                            <td>Darmaga</td>
                            <td>Posyandu</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2011</td>
                            <td>SMA 1 Bogor</td>
                            <td>Penyuluhan</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>