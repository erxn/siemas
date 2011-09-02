<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
<script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.uitablefilter.js"></script>


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


<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})

    });
</script>
<script>
    $(function() {

        $( ".tabs" ).tabs();
    });


</script>

<script type="text/javascript">

    function load_selesai() {
        $('#div-selesai').load("index.php/antrian/pasien_hari_ini/3");
    }

    function load_terisi() {
        $('#div-terisi').load("index.php/antrian/tabel_terisi/3");
    }
    $(document).ready(function(){

        load_terisi();
        load_selesai();
        setInterval("load_selesai()", 3000);
        setInterval("load_terisi()", 3000);

    });

</script>


<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="index.php/antrian/isi_remed_hari_ini">Isi Rekam Medik</a></li>
                <li><a href="index.php/antrian/antri/3">Antrian</a></li>
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<div  class="tabs" style=" float:left; margin-top: 20px;margin-left: 30px; width:45%">
    <ul>
        <li><a href="#tabs-a">Daftar Pasien Hari ini</a></li>
    </ul>
    <div id="tabs-a" >


        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-selesai">
        </div>

        <div class="module" style="background:none; float: none; margin-bottom: 0px" id="div-terisi">
        </div>
    </div>
</div>
<script type="text/javascript">

    function selesai(id) {

        $.get('index.php/antrian/pasien_hari_ini/' + id);
        load_selesai();
        load_terisi();
    }

    function terisi(id) {

        $.get('index.php/antrian/tabel_terisi/' + id);
        load_selesai();
        load_terisi();
    }



</script>
<div  class="tabs" style="float:right;  margin-right: 10px; margin-top: 20px; width:45%">
    <ul>
        <li><a href="#tabs-a">Isi Rekam Medik Hari Ini</a></li>
    </ul>
    <div id="tabs-a" >
        <div class="module" style="background:none; float: none; margin-bottom: 0px">
            <h3>Data Pasien</h3>

            <?php if($data_pasien == null) { ?>

            <h1> Pilih pasien dulu</h1>

                <?php } else { ?>

            <table style="">
                <strong></strong>
                <tr  class="odd">
                    <td><b>Tanggal Pendaftaran:</b></td>
                    <td style="width: 50%"><?php echo $data_pasien[0]['tanggal_pendaftaran']; ?> </td>
                </tr>
                <tr>
                    <td><b>Nama Pasien:</b></td>
                    <td style="width: 50%"><b><h4><?php echo $data_pasien[0]['nama_pasien'];?></h4></b></td>
                </tr>
                <tr  class="odd">
                    <td><b>Jenis Kelamin:</b></td>
                    <td style="width: 50%"><?php echo $data_pasien[0]['jk_pasien'];?></td>

                </tr>

                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td><?php  echo $data_pasien[0]['tanggal_lahir'];?></td>

                </tr>
                <tr class="odd">
                    <td ><b>Umur</b></td>
                    <td><?php echo $data_pasien[0]['umur']?> tahun</td>

                </tr>
                <tr>
                    <td ><b>Status Dalam Keluarga:</b></td>
                    <td><?php echo $data_pasien[0]['status_dalam_keluarga'];?></td>

                </tr>
                <tr class="odd">
                    <td><b>Status Pelayanan</b></td>
                    <td><?php echo $data_pasien[0]['status_pelayanan'];?></td>
                </tr>
                <tr>
                    <td><b>No Kartu</b></td>
                    <td><?php echo $data_pasien[0]['no_kartu_layanan'];?></td>
                </tr>
            </table>
        </div>


    </div>
</div>

<br/>

<div  class="tabs" style="float:right;  margin-right: 10px; margin-top: 20px; width:45%">
    <form action="" method="post">
        <ul>
            <li><a href="#tabs1-1">Isi Rekam Medik</a></li>
            <li><a href="#tabs-a">Poli Gigi</a></li>
            <li><a href="#tabs-b">Poli Umum</a></li>
            <li><a href="#tabs-c">Poli KIA</a></li>
        </ul>
        <div id="tabs1-1">
            <table  id="myTable"  class="noborder" style="width:100%">

                <tr class="odd">
                    <td width="25%">Anamnesis:</td>
                    <td><textarea name="n_anamnesis" rows="3" cols="40" style="width: 90%"></textarea></td>
                </tr>
                <tr>
                    <td>Diagnosis:</td>
                    <td><textarea name="n_diagnosis" rows="3" cols="40" style="width: 90%"></textarea></td>
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
                <tr>
                    <td>Keterangan:</td>
                    <td><textarea name="n_keterangan" rows="3" cols="40" style="width: 90%"></textarea></td>
                </tr>
                

                <tr>
                    <td></td>
                    <td>
                        <!--index.php/namacontroller/nama fungsi-->
                        <input name="submit"  type="submit" class="submit-green" value="Simpan">
                    </td>
                </tr>
            </table>
        </div>
    </form>
     <div id="tabs-a">
            <div style="padding: 10px; width:100%">

                <div>
                    <form method="post" action="">
                        <input id="d_gigi" placeholder="Cari tanggal" name="n_tgl" type="text" class="input-long datepicker" style="vertical-align: top;"/>
                        <input type="button" class="submit-green" value="Cari " name="cari" id="b_gigi" />
                    </form>
                </div>


            </div>
         <div class="module" style="background:none">
            <table id="t_gigi"   style="width:99%">
                <thead>
                    <tr >
                        <th style="width:5%">No</th>
                        <th style="width:30%">Tanggal Kunjungan</th>
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
                    <tr class="<?php echo $x ?>" >
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
         </div>
            

            <div style="clear: both"></div>

        </div>


        <div id="tabs-b">

            <div style="padding: 10px;">

                   <div>
                    <form method="post" action="">
                        <input id="d_umum" placeholder="Cari tanggal" name="n_tgl" type="text" class="input-long datepicker" style="vertical-align: top;"/>
                        <input type="button" class="submit-green" value="Cari " name="cari" id="b_umum" />
                    </form>
                </div>


            </div>
         <div class="module" style="background:none">
            <table id="t_umum"   style="width:99%">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:40%">Tanggal Kunjungan</th>
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
                        <td><a class="pop" href="index.php/pasien/remed_poli_umum_pop/<?php echo $id_pasien;?>/<?php echo $ru['tanggal_kunjungan_umum']?>"><?php echo tgl_indo($ru['tanggal_kunjungan_umum']); ?></a></td>
                       <td><?php echo word_limiter($ru['anamnesis'],5,'...');?></td>
                        <td><?php echo word_limiter($ru['diagnosa'],5,'...');?></td>
                        <td><?php echo word_limiter($ru['penyakit_umum'],5,'...');?></td>
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
</div>



    <?php } ?>