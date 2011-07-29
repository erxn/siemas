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
                <li><a href="">Medical Record</a></li>
                <li><a href="#">Data Pasien</a></li>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div> 


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
                        <td style="width: 50%"><?php echo $data_pasien[0]['tanggal_pendaftaran']; ?> </td>
                    </tr>
                    <tr>
                        <td>Nama Pasien:</td>
                        <td style="width: 50%"><?php echo $data_pasien[0]['nama_pasien'];?></td>
                    </tr>
                    <tr  class="odd">
                        <td>Jenis Kelamin:</td>
                        <td style="width: 50%"><?php echo $data_pasien[0]['jk'];?></td>

                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php  echo $data_pasien[0]['tanggal_lahir'];?></td>

                    </tr>
                    <tr class="odd">
                        <td >Umur</td>
                        <td>umur</td>

                    </tr>
                    <tr>
                        <td >Status Dalam Keluarga:</td>
                        <td><?php echo $data_pasien[0]['status_dalam_keluarga'];?></td>

                    </tr>
                    <tr class="odd">
                        <td>Status Pelayanan</td>
                        <td><?php echo $data_pasien[0]['status_pelayanan'];?></td>
                    </tr>
                    <tr>
                        <td>No Kartu</td>
                        <td><?php echo $data_pasien[0]['no_kartu_layanan'];?></td>
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
            <a href="">
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
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>


                     <?php if (count ($remed_gigi)>0){
                         foreach ($remed_gigi as $rg)
        { ?>
                    <tr>
                        <td class="align-center">no</td>
                        <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $rg['tanggal_kunjungan_gigi']; ?></a></td>
                        <td><?php echo $rg['anamnesis'];?></td>
                        <td><?php echo $rg['diagnosis'];?></td>
                       <td><?php echo  $rg['nama_layanan'];?>, <?php echo $rg['nama_penyakit'];?></td>
                       <td><?php echo $rg['keterangan'];?></td>
                    </tr>
                      <?php }} ?>
               </tbody>
            </table>
            </a>
         </div>

         <div id="tabs-b">

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
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>


                     <?php if (count ($remed_kia)>0){
                         foreach ($remed_kia as $rk)
        { ?>
                    <tr>
                        <td class="align-center">no</td>
                        <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $rk['tanggal_kunjungan_kia']; ?></a></td>
                        <td><?php echo $rk['anamnesis'];?></td>
                        <td><?php echo $rk['diagnosa'];?></td>
                       <td><?php echo  $rk['nama_layanan'];?>, <?php echo $rk['nama_penyakit'];?></td>
                       <td><?php echo $rk['keterangan'];?></td>
                    </tr>
                      <?php }} ?>
               </tbody>
            </table>
            </div>

            <div id="tabs-c">

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
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>


                     <?php if (count ($remed_umum)>0){
                         foreach ($remed_umum as $ru)
        { ?>
                    <tr>
                        <td class="align-center">no</td>
                        <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $ru['tanggal_kunjungan_umum']; ?></a></td>
                        <td><?php echo $ru['anamnesis'];?></td>
                        <td><?php echo $ru['diagnosa'];?></td>
                       <td><?php echo  $ru['nama_layanan'];?>, <?php echo $ru['nama_penyakit'];?></td>
                       <td><?php echo $ru['keterangan'];?></td>
                    </tr>
                      <?php }} ?>
               </tbody>
            </table>
         </div>

            <div class="pager" id="pager">
                
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



<form action="index.php/pasien/insert_diagnosis_dokter" method="post">
    <div class="module" style="float: left; margin-left:15px; margin-top: 30px; width: 45%">
        <div>

            <div id="tabs1">
                <ul>
                    <li><a href="#tabs1-1">Anamnesis</a></li>
                    <li><a href="#tabs2-2">Diagnosa</a></li>
                    <li><a href="#tabs3-3">Layanan</a></li>
                    <li><a href="#tabs4-4">Keterangan</a></li>
                </ul>
                <div id="tabs1-1">
                    <table class="noborder" style="width:100%">
                        <tr>
                            <td>Anamnesis:</td>
                            <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                    </table>
                </div>
                <div id="tabs2-2">
                    <table class="noborder" style="width:100%">
                        <tr>
                            <td>Diagnosa:</td>
                            <td><textarea name="n_diagnosa" rows="5" cols="40"></textarea></td>
                        </tr>
                    </table>
                </div>
                <div id="tabs3-3">

                    <table class="noborder" style="width:100%">
                        <tr>
                            <td>Penyakit:</td>
                            <td> <select name="n_penyakit">
                                    <option value="0">Karies gigi</option>
                                    <option value="1">Penyakit pulpa & Jaringan Periapikal</option>
                                    <option value="2">Penyakit Gusi & Periodontal</option>
                                    <option value="3">Penyakit dentofasial(inaloklusi)</option>
                                    <option value="4">Gangguan gigi & jaringan penunjang lain</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Layanan:</td>
                            <td> <select name="n_layanan">
                                    <option value="0">Tumpatan gigi tetap</option>
                                    <option value="1">Tumpatan gigi sulung</option>
                                    <option value="2">Pencabutan gigi tetap</option>
                                    <option value="3">Pencabutan gigi sulung</option>
                                    <option value="4">Tumpatan sementara gigi tetap </option>
                                    <option value="5">Tumpatan sementara gigi sulung</option>
                                    <option value="6">Pengobatan pulpa</option>
                                    <option value="7">Pengobatan periode</option>
                                    <option value="8">Pengobatan abses</option>
                                    <option value="9">Skelling</option>
                                    <option value="10">Lain-lain</option>
                                </select></td>
                        </tr>
                    </table>

                </div>

                <div id="tabs4-4">
                    <table class="noborder" style="width:100%">
                        <tr>
                            <td>Keterangan:</td>
                            <td><textarea name="n_ket" rows="5" cols="40"></textarea></td>
                        </tr>

                        <tr>

                            <td></td>
                            <td>
                                <!--index.php/namacontroller/nama fungsi-->
                                <input name="submit"  type="submit" class="submit-green" value="Lihat Hasil Diagnosis ">

                            </td>
                        </tr>
                    </table>

                </div>

            </div>

        </div>
    </div>
</form>


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