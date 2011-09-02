<?php $this->load->view('header'); ?>

<div class="belowribbon">
    <h1>
        Nilai DP3
        <a href="index.php/penilaian/laporan_nilai_dp3_xls/<?php echo $tahun_1 ?>/<?php echo $tahun_2 ?>" class="submit-green xls-button" style="margin-left: 10px" title="Simpan sebagai file Excel">
            <img src="template/ms-excel.png" alt=""/>
            Simpan ke Excel
        </a>
    </h1>
</div>


<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">
                Tampilkan tahun:
                <select name="tahun_1" id="tahun_1">
                    <?php foreach($list_tahun as $t) : ?>
                    <option value='<?php echo $t['tahun']; ?>' <?php if($t['tahun'] == $tahun_1) echo "selected='selected'"; ?>><?php echo $t['tahun']; ?></option>
                    <?php endforeach; ?>
                </select>
                dan tahun:
                <select name="tahun_2" id="tahun_2">
                    <option value="0">-</option>
                    <?php foreach($list_tahun as $t) : ?>
                    <option value='<?php echo $t['tahun']; ?>' <?php if($t['tahun'] == $tahun_2) echo "selected='selected'"; ?>><?php echo $t['tahun']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" class="submit-green" value="Tampilkan" onclick="window.location = 'index.php/penilaian/laporan_nilai_dp3/' + $('#tahun_1').val() + '/' + $('#tahun_2').val()"/>
            </div>
        </div>


        <div class="module">
            <h2><span>Daftar nilai DP3</span></h2>
            <div class="module-table-body">

                <?php if($tahun_2 != 0) : ?>
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
                            <?php for($a = 1; $a <= 10; $a++) : ?>
                            <th><?php echo $tahun_1; ?></th>
                            <th><?php echo $tahun_2; ?></th>
                            <?php endfor; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($daftar_nilai_1); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $daftar_nilai_1[$i]['nama']; ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['kesetiaan'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['kesetiaan'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['prestasi_kerja'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['prestasi_kerja'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['tanggung_jawab'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['tanggung_jawab'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['ketaatan'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['ketaatan'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['kejujuran'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['kejujuran'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['kerjasama'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['kerjasama'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['prakarsa'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['prakarsa'] ?></td>

                                <td><?php echo $daftar_nilai_1[$i]['kepemimpinan'] ?></td>
                                <td><?php echo $daftar_nilai_2[$i]['kepemimpinan'] ?></td>

                                <td>
                                <?php
                                    $jumlah_1 = $daftar_nilai_1[$i]['kesetiaan'] + $daftar_nilai_1[$i]['prestasi_kerja'] + $daftar_nilai_1[$i]['tanggung_jawab'] + $daftar_nilai_1[$i]['ketaatan'] + $daftar_nilai_1[$i]['kejujuran'] + $daftar_nilai_1[$i]['kerjasama'] + $daftar_nilai_1[$i]['prakarsa'] + $daftar_nilai_1[$i]['kepemimpinan'];
                                    echo $jumlah_1;
                                ?>               
                                </td>
                                <td>
                                <?php
                                    $jumlah_2 = $daftar_nilai_2[$i]['kesetiaan'] + $daftar_nilai_2[$i]['prestasi_kerja'] + $daftar_nilai_2[$i]['tanggung_jawab'] + $daftar_nilai_2[$i]['ketaatan'] + $daftar_nilai_2[$i]['kejujuran'] + $daftar_nilai_2[$i]['kerjasama'] + $daftar_nilai_2[$i]['prakarsa'] + $daftar_nilai_2[$i]['kepemimpinan'];
                                    echo $jumlah_2;
                                ?>               

                                </td>

                                <td><?php echo round($jumlah_1/8, 2); ?></td>
                                <td><?php echo round($jumlah_2/8, 2); ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>

                <?php else: ?>

                <!-- FOR SINGLE TAHUN -->

                <table width="100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;" rowspan="2">No</th>
                            <th style="width: 150px" rowspan="2">Nama</th>
                            <th>Kesetiaan</th>
                            <th>Prestasi kerja</th>
                            <th>Tanggung jawab</th>
                            <th>Ketaatan</th>
                            <th>Kejujuran</th>
                            <th>Kerja sama</th>
                            <th>Prakarsa</th>
                            <th>Kepemimpinan</th>
                            <th>Jumlah</th>
                            <th>Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($daftar_nilai_1 as $data) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['kesetiaan'] ?></td>
                                <td><?php echo $data['prestasi_kerja'] ?></td>
                                <td><?php echo $data['tanggung_jawab'] ?></td>
                                <td><?php echo $data['ketaatan'] ?></td>
                                <td><?php echo $data['kejujuran'] ?></td>
                                <td><?php echo $data['kerjasama'] ?></td>
                                <td><?php echo $data['prakarsa'] ?></td>
                                <td><?php echo $data['kepemimpinan'] ?></td>
                                <td>
                                <?php
                                    $jumlah = $data['kesetiaan'] + $data['prestasi_kerja'] + $data['tanggung_jawab'] + $data['ketaatan'] + $data['kejujuran'] + $data['kerjasama'] + $data['prakarsa'] + $data['kepemimpinan'];
                                    echo $jumlah;
                                ?>
                                </td>
                                <td><?php echo round($jumlah/8, 2); ?></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer'); ?>