<?php $this->load->view('header');

$pegawai = array(
        "",
        "Dr. ILHAM CHAIDIR",
        "Dr. YOHANA MARI YUSTINI",
        "Drg. MELLYAWATI",
        "Dr. DINDIN A. SETIAWATY",
        "Dr. LINA RUFLINA",
        "Drg. SITI MILYARNI REMIKA, MM",
        "ROSMIATI",
        "SADIYAH, AMKG",
        "Drg. KARINA AMALIA",
        "SUGIHARYATI, AMKeb",
        "HUSNA",
        "ENENG SURTININGSIH, AMKep",
        "ENDAH PURASANTI, AMKeb",
        "DWIJO KURJIANTO, AMAK",
        "SEPTY MARHAENY, AMKep",
        "FEBBY HENDRIYANI  S.",
        "NINA ANDRIYANTI, AMKL",
        "RIDWANUDIN HARIS, AMKep",
        "MARICE SINORITA, AMKeb",
        "T A R P I N, AMRad",
        "MARYANI, A.Md Kp",
        "IIS AISAH",
        "MAD SOLEH",
        "AGTI NURVITASARI, SKM",
        "NIDA NURAIDA, AMdG"
    );

?>

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
        Nilai TPP
    </h1>
</div>


<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">

                Tahun
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
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>Dokter</td>
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

<?php $this->load->view('footer'); ?>