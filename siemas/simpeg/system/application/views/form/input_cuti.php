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
        Input cuti pegawai
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Masukkan data cuti</span></h2>
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
                            <td>Dari tanggal</td>
                            <td><input type="text" name="dari_tanggal" maxlength="255" class="input-medium datepicker" id="from"/></td>
                        </tr>
                        <tr>
                            <td>Sampai tanggal</td>
                            <td><input type="text" name="sampai_tanggal" maxlength="255" class="input-medium datepicker" id="to"/></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>
                                <select name="keperluan" class="input-long">
                                    <option>Cuti tahunan</option>
                                    <option>Cuti besar</option>
                                    <option>Cuti sakit</option>
                                    <option>Cuti bersalin</option>
                                    <option>Cuti karena alasan penting</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan tambahan</td>
                            <td><textarea cols="35" rows="3" name="keterangan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Alamat selama cuti</td>
                            <td><textarea cols="35" rows="3" name="alamat"></textarea></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Data cuti pegawai ini</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Keperluan</th>
                            <th>Keterangan</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cuti_done">
                            <td>12 Januari 2011</td>
                            <td>Cuti tahunan</td>
                            <td></td>
                            <td>Bogor</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>24 Agustus 2011</td>
                            <td>Cuti tahunan</td>
                            <td></td>
                            <td>Bogor</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2011</td>
                            <td>Cuti tahunan</td>
                            <td></td>
                            <td>Bogor</td>
                            <td>
                                <a href="#">Hapus</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>
<script type="text/javascript">
    $(function() {
        var dates = $( "#from, #to" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onSelect: function( selectedDate ) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $( this ).data( "datepicker" ),
                date = $.datepicker.parseDate(
                instance.settings.dateFormat ||
                    $.datepicker._defaults.dateFormat,
                selectedDate, instance.settings );
                dates.not( this ).datepicker( "option", option, date );
            },
            dateFormat: 'dd-mm-yy'
        });
    });
</script>


<?php $this->load->view('footer'); ?>