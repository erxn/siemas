<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="js/jquery.uitablefilter.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "700px", initialWidth: "700px", width: "70%", height: "100%"})
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
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd MM yy',
            monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
        });
    });

    $(function() {
        var theTable = $('#t_gigi')

        $("#b_gigi").click(function() {
            $.uiTableFilter( theTable, $('#d_gigi').val());
        })
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

    
<div style="text-align: right;"><div style="float: left; margin-top: 15px; margin-left: 20px; font-size: 20pt;">Rekam Medik Pasien:      <?php echo $data_pasien[0]['nama_pasien'];?></div><a href="index.php/pasien/selesai_pemeriksaan" style="text-decoration: none; margin-top: 50px; margin-right: 20px" ><input name="submit"  type="submit" class="but" value="Pemeriksaan Selesai" name="simpan"></a></div>


<div class="grid_6" style="width: 40%; margin-left:20px; margin-top: 30px ">
    <div  id="tabs2">
        <ul>
            <li><a href="#tabs-a">Data Pasien</a></li>

        </ul>
        <div id="tabs-a">

            <form style="margin: 20px">
                <table style="width:90%;" id="myTable" class="tablesorter" border="1">
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
                        <td style="width: 50%"><?php echo $data_pasien[0]['jk_pasien'];?></td>

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


<div class="module" style="width: 55% ;margin-right: 15px ">

    <div  id="tabs" style="height:1000px">
        <ul>
            <li><a href="#tabs-a">Poli Gigi</a></li>
            <li><a href="#tabs-c">Poli Umum</a></li>
            <li><a href="#tabs-d">Lab</a></li>
            <li><a href="#tabs-e">Rontgen</a></li>

        </ul>

        <div id="tabs-a">
            <div style="padding: 10px; width:100%">

                <div>
                    <form method="post" action="">
                        <input class="datepicker" id="d_gigi" placeholder="Masukkan tanggal" name="n_tgl" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>
                        <input type="button" class="submit-green" value="Cari " name="cari" id="b_gigi" />
                    </form>
                </div>


            </div>
            <table id="t_gigi"   style="width:99%">
                <thead>
                    <tr >
                        <th style="width:5%">No</th>
                        <th style="width:20%">Tanggal Kunjungan</th>
                        <th style="width:21%">Anamnesis</th>
                        <th style="width:13%">Diagnosa</th>
                        <th style="width:13%">Layanan</th>
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count ($remed_gigi)>0) {
                        $i=1;
                        foreach ($remed_gigi as $rg) {
                            if($i%2==0) $x="odd";else $x="even";
                            ?>
                    <tr clas="odd" >
                        <td><?php echo $i++?></td>
                        <td ><a class="pop" href="index.php/pasien/remed_poli_gigi_pop/<?php echo $id_pasien;?>/<?php echo $rg['tanggal_kunjungan_gigi']?>"><?php echo tgl_indo($rg['tanggal_kunjungan_gigi']); ?></a></td>
                        <td><?php echo  word_limiter($rg['anamnesis'],5,'...');?></td>
                        <td><?php echo word_limiter($rg['diagnosis'],5,'...');?></td>
                        <td><?php echo  word_limiter($rg['nama_penyakit'],5,'...');?>, <?php echo word_limiter($rg['nama_layanan'],5,'...>>');?></td>
                        <td><?php echo word_limiter($rg['keterangan'],5,'...');?></td>
                    </tr>
                            <?php }
                    }
                    ?>
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
                            </form>
                        </div>

            <div style="clear: both"></div>

        </div>

       
        <div id="tabs-c">

            <div style="padding: 10px;">

                <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>
                <tr>

                    <td><input type="submit" class="submit-green" value="Cari "></td>
                </tr>

            </div>
            <table id="myTable" class="tablesorter" border="1">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:18%">Tanggal Kunjungan</th>
                        <th style="width:21%">Anamnesis</th>
                        <th style="width:17%">Diagnosa</th>
                        <th style="width:13%">Penyakit</th>
                        <th style="width:13%">P2M</th>
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>


                    <?php if (count ($remed_umum)>0) {
                        $i=1;
                        foreach ($remed_umum as $ru) {
                            if($i%2==0) $x="odd";else $x="even";
                            ?>
                    <tr clas="<?php echo $x ?>">
                        <td><?php echo $i++?></td>
                        <td><a href="index.php/pasien/remed_poli_umum_pop/<?php echo $id_pasien;?>/<?php echo $ru['tanggal_kunjungan_umum']?>"><?php echo tgl_indo($ru['tanggal_kunjungan_umum']); ?></a></td>
                       <td><?php echo word_limiter($ru['anamnesis'],5,'...');?></td>
                        <td><?php echo word_limiter($ru['diagnosa'],5,'...');?></td>
                        <td><?php echo word_limiter($ru['nama_penyakit'],5,'...');?></td>
                        <td><a href="">
                                    <?php
                                    if($campak!==0) {
                                        echo 'campak';
                                    }
                                    else if($ispa!==0) {
                                        echo 'ispa';
                                    }
                                    else if($tbc!==0) {
                                        echo 'tbc';
                                    }
                                    else if($diare!==0) {
                                        echo 'diare';
                                    }

                                    ?>
                            </a>
                        </td>
                        <td><?php echo word_limiter($ru['keterangan'],5,'...');?></td>
                    </tr>
                            <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>

         <div id="tabs-d">

            <div style="padding: 10px;">

                <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>
                <tr>

                    <td><input type="submit" class="submit-green" value="Cari "></td>
                </tr>

            </div>
            <table id="myTable" class="tablesorter" border="1">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:18%">Tanggal Pemeriksaan</th>
                        <th style="width:21%">Jenis Pemeriksaan</th>
                        <th style="width:17%">hasil Pemeriksaan</th>
                        <th style="width:13%">Pemeriksaan Khusus</th>
                        <th style="width:13%">Ket.</th>
                    </tr>
                </thead>
                <tbody>


                   
                </tbody>
            </table>
        </div>

        <br/>
        <br/>
    </div>
</div>



<form action="" method="post">
    <div class="module" style="float:left; margin-left:15px; margin-top: 30px; width: 40%">
        <div>

            <div id="tabs1">
                <ul>
                    <li><a href="#tabs1-1">Diagnosis Dokter</a></li>
                </ul>
                <div id="tabs1-1">
                    <table  id="myTable"  class="noborder" style="width:100%">
                        <tr class="odd">
                            <td>Anamnesis:</td>
                            <td> </td>
                            <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                    </table>
                    <table class="noborder" style="width:100%">
                        <tr>
                            <td>Diagnosa:</td>
                            <td>  </td>
                            <td><textarea name="n_diagnosa" rows="5" cols="40"></textarea></td>
                        </tr>
                    </table>

                    <table  id="myTable" class="noborder" style="width:100%">
                        <tr class="odd">
                            <td>Penyakit:</td>
                            <td> <select name="n_penyakit">
                                    <?php foreach ($data_peny as $dp) {?>
                                    <option value="<?php echo $dp['id_penyakit'];?>"><?php echo $dp['nama_penyakit'];?></option>
                                        <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Layanan Gigi:</td>
                            <td>
                                <select name="n_layanan">
                                    <?php  foreach ($data_lay as $dl) { ?>
                                    <option value="<?php echo $dl['id_layanan']; ?>"><?php echo $dl['nama_layanan'];?></option>
                                        <?php } ?>
                                </select>

                            </td>
                        </tr>
                    </table>

                </div>

                <table  id="myTable" class="noborder" style="width:100%">
                    <tr class="odd">
                        <td>Keterangan:</td>

                        <td><textarea name="n_ket" rows="5" cols="40"></textarea></td>
                    </tr>

                    <tr>
                        <td></td>
                         
                        <td><a style="text-decoration: none" href=""><input name="submit"  type="submit" class="submit-green" value="Simpan" name="simpan"></a></td>

                    </tr>
                </table>


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