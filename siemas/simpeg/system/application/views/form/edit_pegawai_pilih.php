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

<script type="text/javascript" src="template/jquery.js"></script>

<div class="belowribbon">
    <h1>
        Edit data pegawai
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Pilih pegawai</span></h2>
            <div class="module-body">

                <p id="list_filter_header">Klik nama pegawai yang akan diedit, atau cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                <?php
                for ($j = 1; $j < count($pegawai); $j++) {

                    echo "<li><a href='index.php/pegawai/edit_pegawai'>{$pegawai[$j]}</a></li>";

                } ?>
                </ul>

            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="js/list_filter.js"></script>

<?php $this->load->view('footer'); ?>