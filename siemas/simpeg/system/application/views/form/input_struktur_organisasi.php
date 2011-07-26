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

<div class="belowribbon">
    <h1>
        Input struktur organisasi
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Masukkan kepala Puskesmas</span></h2>
            <div class="module-body">
                <p>Kepala Puskesmas: 
                    <select name="kepala" class="input-long" style="width: 300px">
                        <option value="0">-</option>
                        <?php
                        for ($j = 1; $j < count($pegawai); $j++) {

                            if ($j != $i)
                                echo "<option>{$pegawai[$j]}</option>";
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>

        <div class="module">
            <h2><span>Masukkan atasan dari setiap pegawai</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Atasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if ($i % 2 == 0)
                                echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td>123456789678</td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>Dokter</td>
                                <td>
                                    <select name="atasan[]" class="input-long">
                                        <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        if ($j != $i)
                                            echo "<option>{$pegawai[$j]}</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <?php endfor; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


<?php $this->load->view('footer'); ?>