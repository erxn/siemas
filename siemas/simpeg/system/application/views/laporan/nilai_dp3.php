<?php include 'header.php'; ?>

<?php include '../forms/list_pegawai.php'; ?>

<?php

$tahun_ini = intval(date("Y"));
$tahun = array($tahun_ini, $tahun_ini - 1, $tahun_ini - 2);

?>

<div class="belowribbon">
    <h1>
        Nilai DP3
    </h1>
</div>


<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">
                Tampilkan tahun:
                <select name="tahun">
                    <?php foreach($tahun as $t) {

                        echo "<option value='$t'>$t</option>";

                    } ?>
                </select>
                dan tahun:
                <select name="tahun">
                    <option value="">-</option>
                    <?php foreach($tahun as $t) {

                        echo "<option value='$t'>$t</option>";

                    } ?>
                </select>
                <input type="submit" class="submit-green" value="Tampilkan"/>
            </div>
        </div>


        <div class="module">
            <h2><span>Daftar nilai DP3</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;" rowspan="2">No</th>
                            <th style="width: 150px" rowspan="2">Nama</th>
                            <th colspan="2">Kesetiaan</th>
                            <th colspan="2">Prestasi kerja</th>
                            <th colspan="2">Tanggung jawab</th>
                            <th colspan="2">Ketaatan</th>
                            <th colspan="2">Kejujuran</th>
                            <th colspan="2">Kerja sama</th>
                            <th colspan="2">Prakarsa</th>
                            <th colspan="2">Kepemimpinan</th>
                            <th colspan="2">Jumlah</th>
                            <th colspan="2">Rata-rata</th>
                        </tr>
                        <tr>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                            <th>2010</th>
                            <th>2011</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                                <td>80</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>