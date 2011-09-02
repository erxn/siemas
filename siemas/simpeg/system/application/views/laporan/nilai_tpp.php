<?php $this->load->view('header'); ?>

<?php
$nama_bulan = array(
    "",
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);

?>


<div class="belowribbon">
    <h1>
        Nilai TPP
        <a href="index.php/penilaian/laporan_nilai_tpp_xls/<?php echo $bulan ?>/<?php echo $tahun ?>" class="submit-green xls-button" style="margin-left: 10px" title="Simpan sebagai file Excel">
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

                    Tahun&nbsp;&nbsp;&nbsp;
                    <select name="tahun" id="tahun">
                        <?php foreach($list_tahun as $t) : ?>
                        <option value='<?php echo $t['tahun']; ?>' <?php if($t['tahun'] == $tahun) echo "selected='selected'"; ?>><?php echo $t['tahun']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    Bulan&nbsp;&nbsp;&nbsp;
                    <select name="bulan" id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($i == $bulan) echo 'selected="selected"'; ?>><?php echo $nama_bulan[$i]; ?></option>
                        <?php endfor; ?>
                    </select>
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/penilaian/laporan_nilai_tpp/' + $('#bulan').val() + '/' + $('#tahun').val()"/>

            </div>
        </div>


        <div class="module">
            <h2><span>Daftar nilai DP3</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th colspan="13"><h4>Puskesmas Bogor Tengah</h4></th>
                        </tr>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th style="width: 150px">Nama</th>
                            <th style="width: 150px">Jabatan</th>
                            <th>Jumlah kehadiran ideal</th>
                            <th>Jumlah kehadiran dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th>Jam kerja efektif ideal</th>
                            <th>Jam kerja efektif dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th>Jumlah apel ideal</th>
                            <th>Jumlah apel dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th style="width: 100px">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($tpp_pkm as $d) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['jabatan']; ?></td>
                                <td><?php echo $d['kehadiran_ideal']; ?></td>
                                <td><?php echo $d['kehadiran_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_kehadiran'], 1); ?></td>
                                <td><?php echo $d['jam_efek_ideal']; ?></td>
                                <td><?php echo $d['jam_efek_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_jam_efek'], 1); ?></td>
                                <td><?php echo $d['apel_ideal']; ?></td>
                                <td><?php echo $d['apel_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_apel'], 1); ?></td>
                                <td><?php echo round($d['jumlah'], 1); ?></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>

                    <thead>
                        <tr>
                            <th colspan="13"><h4>BP Pemda</h4></th>
                        </tr>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th style="width: 150px">Nama</th>
                            <th style="width: 150px">Jabatan</th>
                            <th>Jumlah kehadiran ideal</th>
                            <th>Jumlah kehadiran dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th>Jam kerja efektif ideal</th>
                            <th>Jam kerja efektif dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th>Jumlah apel ideal</th>
                            <th>Jumlah apel dicapai</th>
                            <th style="width: 100px">Nilai</th>
                            <th style="width: 100px">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($tpp_bp as $d) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['jabatan']; ?></td>
                                <td><?php echo $d['kehadiran_ideal']; ?></td>
                                <td><?php echo $d['kehadiran_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_kehadiran'], 1); ?></td>
                                <td><?php echo $d['jam_efek_ideal']; ?></td>
                                <td><?php echo $d['jam_efek_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_jam_efek'], 1); ?></td>
                                <td><?php echo $d['apel_ideal']; ?></td>
                                <td><?php echo $d['apel_dicapai']; ?></td>
                                <td><?php echo round($d['nilai_apel'], 1); ?></td>
                                <td><?php echo round($d['jumlah'], 1); ?></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer'); ?>