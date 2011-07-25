<?php include 'header.php'; ?>

<?php include '../forms/list_pegawai.php'; ?>

<?php
$bulan = array(
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

$bulan_ini = intval(date("n"));

$tahun_ini = intval(date("Y"));
$tahun = array($tahun_ini - 2, $tahun_ini - 1, $tahun_ini);

$jumlah_hari_bulan_ini = cal_days_in_month(CAL_GREGORIAN, $bulan_ini, $tahun_ini);

$tanggal_libur_bulan_ini = array(3,10,17,24,31);
$tanggal_libur_bp_pemda_bulan_ini = array(3,10,17,24,31,2,9,16,23,30);

?>


<div class="belowribbon">
    <h1>
        Pembayaran Tambahan Tunjangan Penghasilan (TTP)
    </h1>
</div>


<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">

                <p>Tahun
                    <select id="tahun">
                        <?php for ($i = 0; $i < count($tahun); $i++) : ?>
                            <option value="<?php echo $tahun[$i]; ?>" <?php if ($tahun[$i] == $tahun_ini) echo 'selected="selected"'; ?>><?php echo $tahun[$i]; ?></option>
                        <?php endfor; ?>
                    </select>
                   Bulan
                    <select id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($i == $bulan_ini) echo 'selected="selected"'; ?>><?php echo $bulan[$i]; ?></option>
                        <?php endfor; ?>
                    </select>
                   <input type="button" value="Tampilkan" class="submit-green"/>

            </div>
        </div>


        <div class="module">
            <h2><span>Daftar nilai DP3</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th style="width: 150px">Nama</th>
                            <th style="width: 150px">Jabatan</th>
                            <th style="width: 20px">Gol</th>
                            <th>Nilai</th>
                            <th>Jumlah tunjangan</th>
                            <th>PPh 21</th>
                            <th>Jumlah diterima</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>Dokter</td>

                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>