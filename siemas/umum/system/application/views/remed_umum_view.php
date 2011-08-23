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


<div style="text-align: right;"><div style="float: left; margin-top: 15px; margin-left: 20px; font-size: 20pt;">Rekam Medik Pasien:  <?php echo $data_pasien[0]['nama_pasien'];?></div><a href="index.php/pasien/selesai_pemeriksaan" style="text-decoration: none; margin-top: 50px; margin-right: 20px" ><input name="submit"  type="submit" class="but" value="Pemeriksaan Selesai" name="simpan"></a></div>
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


<div class="module" style="width: 50% ;margin-right: 15px ">
    <div  id="tabs">
        <ul>
            <li><a href="#tabs-a">Poli Gigi</a></li>
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
                            <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $rg['tanggal_kunjungan_gigi']; ?></a></td>
                            <td><?php echo $rg['anamnesis'];?></td>
                            <td><?php echo $rg['diagnosis'];?></td>
                            <td><?php echo  $rg['nama_layanan'];?>, <?php echo $rg['nama_penyakit'];?></td>
                            <td><?php echo $rg['keterangan'];?></td>
                        </tr>
                                <?php }
                        }
                        ?>
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


                    <?php if (count ($remed_umum)>0) {
                        foreach ($remed_umum as $ru) { ?>
                    <tr>
                        <td class="align-center">no</td>
                        <td><a href="index.php/pasien/data_remed_poli_lain" class="pop"><?php echo $ru['tanggal_kunjungan_umum']; ?></a></td>
                        <td><?php echo $ru['anamnesis'];?></td>
                        <td><?php echo $ru['diagnosa'];?></td>
                        <td><?php echo  $ru['nama_layanan'];?>, <?php echo $ru['nama_penyakit'];?></td>
                        <td><?php echo $ru['keterangan'];?></td>
                    </tr>
                            <?php }
                    }
                    ?>
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



<form action="" method="post">
    <div class="module" style="float: left; margin-left:15px; margin-top: 30px; width: 45%">
        <div>

            <div id="tabs1">
                <ul>
                    <li><a href="#tabs1-1">Umum</a></li>
                </ul>
                <div id="tabs1-1" >
                    <form method="post" action="">
                   <table  id="myTable"  class="noborder" style="width:100%">

                       <tr class="odd">
                            <td>Anamnesis:</td>
                            <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                        <tr>
                            <td>Diagnosis:</td>
                            <td><textarea name="n_diagnosa" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                        <tr class="odd">
                            <td>Penyakit:</td>
                            <td><textarea name="n_penyakit" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                        <tr>
                            <td>Keterangan:</td>
                            <td><textarea name="n_keterangan" rows="5" cols="40" input=""></textarea></td>
                        </tr>
                        <tr> <td></td>
                    <td>
                        <!--index.php/namacontroller/nama fungsi-->
                        <input name="submit"  type="submit" class="submit-green" value="Simpan">
                    </td>
                    <td valign="middle" align="right">
                        <a class="pop" href="index.php/antrian/tbc/<?php echo $data_pasien[0]['id_pasien'];?>" style="text-decoration: none"  class="btn-gplus gplus-blue">Tbc</a>
                    </td>
                    <td valign="middle" align="right">
                        <a class="pop" href="index.php/antrian/diare/<?php echo $data_pasien[0]['id_pasien'];?>" style="text-decoration: none" class="btn-gplus gplus-blue">Diare</a>
                    </td>
                    <td valign="middle" align="right">
                        <a class="pop" href="index.php/antrian/ispa/<?php echo $data_pasien[0]['id_pasien'];?>" style="text-decoration: none" class="btn-gplus gplus-blue">Ispa</a>
                    </td>
                </tr>
                    </form>
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