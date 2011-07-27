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
        SKUM-PTK
    </h1>
</div>

<div id="page">


    <div style="width: 20%;" class="grid_6">
        <div class="module">
            <h2><span>Daftar pegawai</span></h2>
            <div class="module-body">
                <p id="list_filter_header">Cari pegawai: </p>

                <ul class="bullets" id="list_filter">
                    <?php
                    for ($j = 1; $j < count($pegawai); $j++) {

                        echo "<li><a href='forms/edit_pegawai.php'>{$pegawai[$j]}</a></li>";
                    } ?>
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/list_filter.js"></script>

    <div style="width: 76%" class="grid_6">
        <div class="module">
            <h2><span>SKUM-PTK</span></h2>
            <div class="module-body">


                <TABLE FRAME=VOID CELLSPACING=0 COLS=7 RULES=NONE BORDER=0 class="noborder">
                    <COLGROUP><COL WIDTH=39><COL WIDTH=125><COL WIDTH=100><COL WIDTH=86><COL WIDTH=86><COL WIDTH=86><COL WIDTH=86></COLGROUP>
                    <TBODY>
                        <TR>
                            <TD WIDTH=39 HEIGHT=17 ALIGN=CENTER SDVAL="1" SDNUM="1033;"><FONT FACE="Tahoma">1</FONT></TD>
                            <TD WIDTH=125 ALIGN=LEFT><FONT FACE="Tahoma">N a m a</FONT></TD>
                            <TD COLSPAN=4 WIDTH=357 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Dwijo Kurjianto, AMAK</FONT></TD>
                            <TD WIDTH=86 ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="2" SDNUM="1033;"><FONT FACE="Tahoma">2</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">N I P</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : 19660417 198803 1 016</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="3" SDNUM="1033;"><FONT FACE="Tahoma">3</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Pangkat, Golongan/Ruang</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Penata  - III/c</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="4" SDNUM="1033;"><FONT FACE="Tahoma">4</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Terhitung mulai tanggal</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : 01 - 04 - 2010</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="5" SDNUM="1033;"><FONT FACE="Tahoma">5</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Tempat, tanggal lahir</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Bogor, 17 April 1966</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="6" SDNUM="1033;"><FONT FACE="Tahoma">6</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Jenis kelamin</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Laki - Laki</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="7" SDNUM="1033;"><FONT FACE="Tahoma">7</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">A g a m a</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : I s l a m</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="8" SDNUM="1033;"><FONT FACE="Tahoma">8</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Jenis Kepegawaian</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Pegawai Negeri Sipil </FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="9" SDNUM="1033;"><FONT FACE="Tahoma">9</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Status Kepegawaian</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : PNS Daerah</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="10" SDNUM="1033;"><FONT FACE="Tahoma">10</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">J a b a t a n</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Pranata Lab.Kesehatan Penyelia</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="11" SDNUM="1033;"><FONT FACE="Tahoma">11</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Unit Kerja</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : DINAS KESEHATAN KOTA BOGOR</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=18 ALIGN=CENTER SDVAL="12" SDNUM="1033;"><FONT FACE="Tahoma">12</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Gaji Pokok / PP</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Peraturan Pemerintah Nomor 25 Tahun 2010  Rp. 2.299.600.-</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="13" SDNUM="1033;"><FONT FACE="Tahoma">13</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Masa kerja golongan</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : 17   tahun    1   bulan</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="14" SDNUM="1033;"><FONT FACE="Tahoma">14</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Masa kerja keseluruhan</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : 22   tahun    9   bulan</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=CENTER SDVAL="15" SDNUM="1033;"><FONT FACE="Tahoma">15</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma">Alamat rumah</FONT></TD>
                            <TD COLSPAN=4 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma"> : Cilendek Timur RT 02/II Kec. Bogor Barat Kota Bogor</FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD HEIGHT=17 ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                            <TD ALIGN=LEFT><FONT FACE="Tahoma"><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD COLSPAN=7 HEIGHT=20 ALIGN=CENTER><B><FONT FACE="Tahoma" SIZE=3>TANGGUNGAN KELUARGA</FONT></B></TD>
                        </TR>
                        <TR>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" HEIGHT=41 ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>NO</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>NAMA ISTRI/SUAMI/ANAK</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>TANGGAL LAHIR</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>TANGGAL NIKAH</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>PEKERJAAN / SEKOLAH</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>TUNJANGAN DAPAT/TIDAK</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>KET</FONT></TD>
                        </TR>
                        <TR>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" HEIGHT=28 ALIGN=CENTER VALIGN=MIDDLE SDVAL="1" SDNUM="1033;"><FONT FACE="Tahoma" SIZE=1>1</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>Samujiati</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE SDNUM="1033;1033;D-MMM-YY"><FONT FACE="Tahoma" SIZE=1> 31 Desember 1968</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE SDNUM="1033;1033;D-MMM-YY"><FONT FACE="Tahoma" SIZE=1> 6 Oktober 1991</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>IRT</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>Dapat</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" HEIGHT=28 ALIGN=CENTER VALIGN=MIDDLE SDVAL="2" SDNUM="1033;"><FONT FACE="Tahoma" SIZE=1>2</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>Rizky Ramadhan</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1> 14 Februari 1995</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>SMA</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1>Dapat</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" HEIGHT=17 ALIGN=CENTER VALIGN=MIDDLE SDVAL="3" SDNUM="1033;"><FONT FACE="Tahoma" SIZE=1>3</FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                        </TR>
                        <TR>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" HEIGHT=17 ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                            <TD STYLE="border-top: 1px solid #3a3935; border-bottom: 1px solid #3a3935; border-left: 1px solid #3a3935; border-right: 1px solid #3a3935" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Tahoma" SIZE=1><BR></FONT></TD>
                        </TR>
                    </TBODY>
                </TABLE>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
