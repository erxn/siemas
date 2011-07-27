<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
    });
</script>

<script>
    $(function() {
        $( "#tabs1" ).tabs();
        $( "#tabs2" ).tabs();
        $( "#tabs" ).tabs();
    });
</script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
    });
</script>

<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="#">Medical Record</a></li>
                <li><a href="#">Data Pasien</a></li>
            </ul>

        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<h2 style="margin-left: 30px ; margin-top: 20px">Rekam Medik Pasien</h2>
<div class="grid_6" style="width: 45%; margin-left:20px; margin-top: 30px ">
    <div  id="tabs2">
        <ul>
            <li><a href="#tabs-a">Data Pasien</a></li>

        </ul>
        <div id="tabs-a">

            <form style="margin: 20px">
                <table style="width:90%;" class="noborder">
                    <strong></strong>
                    <tr  class="odd">
                        <td>Tanggal Pendaftaran:</td>
                        <td style="width: 50%"><?php echo $dr['tanggal_pendaftarann']; ?> </td>
                    </tr>
                    <tr>
                        <td>Nama Pasien:</td>
                        <td style="width: 50%"><?php echo $dr['nama_pasien']?></td>
                    </tr>
                    <tr  class="odd">
                        <td>Jenis Kelamin:</td>
                        <td style="width: 50%"><?php echo $dr['jk']?></td>

                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php  echo $dr['tanggal_lahit']?></td>

                    </tr>
                    <tr class="odd">
                        <td >Umur</td>
                        <td>umur</td>

                    </tr>
                    <tr>
                        <td >Status Dalam Keluarga:</td>
                        <td><?php echo $dr['status_dalam_keluarga'];?></td>

                    </tr>
                    <tr class="odd">
                        <td>Status PElayanan</td>
                        <td><?php echo $dr['status_pelayanan'];?></td>
                    </tr>
                    <tr>
                        <td>No Kartu</td>
                        <td><?php echo $dr['no_kartu_layanan'];?></td>
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
                <tr>

                    <td><input type="submit" class="submit-green" value="Cari "></td>
                </tr>

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
                  
                             <?php foreach($remed_pasien as $rp){?>

                    <tr>
                        <td class="align-center">no</td>
                        <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $rp['tanggal_kunjungan']; ?></a></td>
                        <td><?php echo $rp['anamnesis'];?></td>
                        <td><?php echo $rp['diagnosa'];?></td>
                        <td><?php echo $rp['layanan'];?></td>
                        <td><?php echo $rp['resep_obat'];?></td>
                        <td><?php echo $rp['keterangan'];?></td>
                    </tr>
                   
                </tbody>
                <?php } ?>
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


<div class="module" style="float: left; margin-left:15px; margin-top: 30px; width: 45%">
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
                        <td>
                            <a class="pop" href="index.php/pasien/data_diagnosis_dokter">             <!--index.php/namacontroller/nama fungsi-->
                                <input type="submit" class="submit-green" value="Lihat Hasil Diagnosis ">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>

        </div>

    </div>
</div>


<!-- Footer -->
<div id="footer">
    <div class="container_12">
        <div class="grid_12">
            <p>&copy; 2009. Magic Admin.</p>
        </div>
    </div>
</div>
</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->