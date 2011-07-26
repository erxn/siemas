<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />      
<link type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
    });
</script>


<script>
    $(function() {
        $( "#tabs1" ).tabs();
        $( "#tabs" ).tabs();
    });
</script>



<h2 style="margin-left: 15px">Rekam Medik Pasien</h2>
<div class="grid_6" style="width: 45%; margin-left:15px">
    <div class="module">
        <h2><span>Data Pasien </span></h2>              <!--buat data pasien yg dari pendaftaran-->
        <div class="module-body">
            <form>
                <table style="width:90%;" class="noborder">
                    <strong></strong>
                    <tr  class="odd">
                        <td>Tanggal Pendaftaran:</td>
                        <td style="width: 50%"> </td>
                    </tr>
                    <tr>
                        <td>Nama Pasien:</td>
                        <td style="width: 50%"></td>
                    </tr>
                    <tr  class="odd">
                        <td>Jenis Kelamin:</td>
                        <td style="width: 50%"></td>

                    </tr>

                    <tr>
                        <td>Tanggal Lahir:</td>
                        <td></td>

                    </tr>
                    <tr class="odd">
                        <td >Umur:</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td >Status Dalam Keluarga:</td>
                        <td></td>

                    </tr>
                    <tr class="odd">
                        <td>Status Pelayanan:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>No Kartu:</td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
</div>




<div class="module" style="width: 50% ;margin-right: 15px ">
    <div  id="tabs">
        <ul>
            <li><a href="#tabs-a">Poli Gigi</a></li>
            <li><a href="#tabs-b">Poli KIA</a></li>
            <li><a href="#tabs-c">Poli Umum</a></li>
            <li><a href="#tabs-d">Lab</a></li>
            <li><a href="#tabs-e">Rontgen</a></li>

        </ul>


        <div id="tabs-a">

            <div style="padding: 10px;">

                <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>

                <img src="Template_files/cari.png">
            </div>
            <table id="">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:20%">Tanggal Kunjungan</th>
                        <th style="width:21%">Anamnesis</th>
                        <th style="width:13%">Diagnosa</th>
                        <th style="width:13%">Layanan</th>
                        <th style="width:13%">Resep Dokter</th>
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td class="align-center">1</td>
                        <td><a href="data_akhir_tabel.php" class="pop">20-08-2009</a></td>
                        <td>Sariawan</td>
                        <td>Bolong gigi</td>
                        <td>Karies, Cabut Gigi</td>
                        <td>AMoksilin</td>
                        <td>Perlu tindakan cepatttttt!!</td>
                    </tr>
                </tbody>
            </table>

            <div class="pager" id="pager">
                <form action="">
                    <div>
                        <img class="first" src="Template_files/arrow-st.gif" alt="first"/>
                        <img class="prev" src="Template_files/arrow-18.gif" alt="prev"/> 
                        <input type="text" class="pagedisplay input-short align-center"/>
                        <img class="next" src="Template_files/arrow000.gif" alt="next"/>
                        <img class="last" src="Template_files/arrow-su.gif" alt="last"/> 
                        <select class="pagesize input-short align-center">
                            <option value="10" selected="selected">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                        </select>
                    </div>
            </div>
            <br/>
            <br/>
        </div>
    </div>
</div>

<div class="">

    <div id="tabs1">
        <ul>
            <li><a href="#tabs1-1">Anamnesis</a></li>
            <li><a href="#tabs2-2">Diagnosa</a></li>
            <li><a href="#tabs3-3">Layanan</a></li>
            <li><a href="#tabs4-4">Resep Dokter</a></li>
            <li><a href="#tabs5-5">Keterangan</a></li>
        </ul>
        <div id="tabs1-1">
            <table class="noborder" style="width:100%">
                <tr>
                    <td>Anamnesis:</td>
                    <td><textarea rows="5" cols="40"></textarea></td>
                </tr>
            </table>
        </div>
        <div id="tabs2-2">
            <table class="noborder" style="width:100%">
                <tr>
                    <td>Diagnosa:</td>
                    <td><textarea rows="5" cols="40"></textarea></td>
                </tr>
            </table>
        </div>
        <div id="tabs3-3">

            <table class="noborder" style="width:100%">
                <tr>
                    <td>Layanan:</td>
                    <td><textarea rows="5" cols="40"></textarea></td>
                </tr>
            </table>

        </div>

        <div id="tabs4-4">
            <table class="noborder" style="width:100%">
                <tr>
                    <td>Resep Dokter:</td>
                    <td><textarea rows="5" cols="40"></textarea></td>
                </tr>
            </table>

        </div>

        <div id="tabs5-5">
            <table class="noborder" style="width:100%">
                <tr>
                    <td>Keterangan:</td>
                    <td><textarea rows="5" cols="40"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td style="margin-rightt: 300px">
                        <a class="pop" href="data_akhir_diagnosis.php">
                            <img src="Template_files/masukkandata.png">
                        </a>
                    </td>
                </tr>
            </table>

        </div>

    </div>

</div>

