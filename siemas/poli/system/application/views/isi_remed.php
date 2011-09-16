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

<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})

    });
</script>

<script type="text/javascript">

    function load_selesai() {
        $('#div-selesai').load("index.php/antrian/pasien_hari_ini/1");
    }

    function load_terisi() {
        $('#div-terisi').load("index.php/antrian/pasien_terisi/1");
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
              
            </ul>

        </div>
    </div>
    <div style="clear: both;"></div>
</div>


<div  class="tabs" style=" float:left; margin-top: 20px;margin-left: 1%; width:48%">
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

        $.get('index.php/antrian/pasien_terisi/' + id);
        load_selesai();
        load_terisi();
    }



</script>

<div style="float: right; width: 48%; margin-right: 1%">

    <div class="tabs" style="margin-top: 20px;">
        <ul>
            <li><a href="#tabs-a">Isi Rekam Medik Hari Ini</a></li>
        </ul>
        <div id="tabs-a" >
            <div class="module" style="background:none; float: none">

                <?php if($data_pasien == null) { ?>

                    <h4> Pilih pasien yang berada disebelah kiri terlebih dahulu</h4>

                    <?php } else { ?>

                <table style="width:100%;">
                    <tr>
                        <th colspan="2">Data Pasien</th>
                    </tr>
                    <tr  class="odd">
                        <td><b>Tanggal Pendaftaran:</b></td>
                        <td style="width: 50%"><?php echo $data_pasien[0]['tanggal_pendaftaran']; ?> </td>
                    </tr>
                    <tr>
                        <td><b>Nama Pasien:</b></td>
                        <td style="width: 50%"><b><h3><?php echo $data_pasien[0]['nama_pasien'];?></h3></b></td>
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
                        <td><?php  echo $data_pasien[0]['umur'];?></td>

                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $data_pasien[0]['alamat_kk'].", Kel. ".$data_pasien[0]['kelurahan_kk']."<br/>Kec. ".$data_pasien[0]['kecamatan_kk'].", Kab/Kota ".$data_pasien[0]['kota_kab_kk']?></td>
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

    <div  class="tabs" style="margin-top: 20px;">
        <ul>
            <li><a href="#tabs-a">Diagnosis Dokter</a></li>
            <li><a href="#tabs-b">Poli Gigi</a></li>
            <li><a href="#tabs-c">Poli Umum</a></li>
        </ul>
        <div id="tabs-a">
            <div class="module" style="padding: 0px; margin: 0px; border: none; background: none">
            <form action="" method="post">
                <table style="width:100%;">
                    <tr>
                        <th colspan="2">
                            Isi data pemeriksaan
                        </th>
                    </tr>

                    <tr class="odd">
                        <td style="vertical-align: top">Anamnesis:</td>
                        <td><textarea name="n_anamnesis" rows="3" cols="40" input="" style="width: 90%"></textarea></td>
                    </tr>

                    <tr>
                        <td style="vertical-align: top">Diagnosa:</td>
                        <td><textarea name="n_diagnosa" rows="3" cols="40" style="width: 90%"></textarea></td>
                    </tr>

                    <tr class="odd">
                        <td style="vertical-align: top">Penyakit:</td>
                        <td> <select name="n_penyakit">
                                    <?php foreach ($data_peny as $dp) {?>
                                <option value="<?php echo $dp['id_penyakit'];?>"><?php echo $dp['nama_penyakit'];?>  | 0<?php echo $dp['kode_penyakit'];?></option>
                                        <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="vertical-align: top">Layanan Gigi:</td>
                        <td>
                            <select name="n_layanan">
                                    <?php  foreach ($data_lay as $dl) { ?>
                                <option value="<?php echo $dl['id_layanan']; ?>"><?php echo $dl['nama_layanan'];?></option>
                                        <?php } ?>
                            </select>

                        </td>
                    </tr>
                    <tr class="odd">
                        <td style="vertical-align: top">Kunjungan ibu hamil:</td>
                        <td> <input type="radio" name="hamil" value="Ya" checked  />Ya<br />
                            <input type="radio" name="hamil" value="Tidak" />Tidak<br />

                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top">Kunjungan anak prasekolah:</td>
                        <td> <input type="radio" name="anak" value="Ya" checked />Ya<br />
                            <input type="radio" name="anak" value="Tidak"/>Tidak<br />

                        </td>
                    </tr>
                    <tr class="odd">
                        <td style="vertical-align: top">Kasus Penyakit:</td>
                        <td> <input type="radio" name="kasus" value="Baru" checked  />Baru<br />
                            <input type="radio" name="kasus" value="Lama" />Lama<br />

                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top">Keterangan:</td>

                        <td><textarea name="n_ket" rows="3" cols="40" style="width: 90%"></textarea></td>
                    </tr>

                    <tr class="odd">
                        <td></td>
                        <td><input id="sukses" name="submit"   type="submit"  class="submit-green" value="Simpan" name="simpan"></td>
                    </tr>

                </table>
            </form>
            </div>
            <div style="clear: both"></div>
        </div>

        <div id="tabs-b">
            <div>

                <div>
                    <!--
                    <form method="post" action="">
                        <input id="d_gigi" placeholder="Cari tanggal" name="n_tgl" type="text" class="input-long datepicker" style="vertical-align: top;"/>
                        <input type="button" class="submit-green" value="Cari " name="cari" id="b_gigi" />
                    </form>
                    -->
                </div>


            </div>
            <div class="module" style="padding: 0px; margin: 0px; border: none; background: none">
                <table width="100%">
                    <thead>
                        <tr >
                            <th style="width:5%">No</th>
                            <th style="width:23%">Tanggal Kunjungan</th>
                            <th style="width:21%">Anamnesis</th>
                            <th style="width:17%">Diagnosa</th>
                            <th style="width:17%">Penyakit</th>
                            <th style="width:17%">Layanan</th>
                            <th style="width:17%">Ket.</th>
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
                            <td><?php echo  word_limiter($rg['nama_penyakit'],5,'...');?></td>
                            <td><?php echo word_limiter($rg['nama_layanan'],5,'...>>');?></td>
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


        <div id="tabs-c">
            <div>
                <!--
                <form method="post" action="">
                    <input id="d_umum" placeholder="Cari tanggal" name="" type="text" class="input-long datepicker" style="vertical-align: top;"/>
                    <input type="button" class="submit-green" value="Cari " name="cari" id="" />
                </form>
                -->
            </div>
            <div class="module"  style="padding: 0px; margin: 0px; border: none; background: none">
                <table width="100%">
                    <thead>
                        <tr>
                            <th style="width:5%">No</th>
                            <th style="width:35%">Tanggal Kunjungan</th>
                            <th style="width:20%">Anamnesis</th>
                            <th style="width:15%">Diagnosa</th>
                            <th style="width:10%">Penyakit</th>
                            <th style="width:10%" colspan="3">P2M</th>
                            <th  style="width:6%">Ket.</th>
                        </tr>
                    </thead>
                    <tbody>


                            <?php if (count ($remed_umum)>0) {
                                $i=1;
                                $b=0;
                                foreach ($remed_umum as $ru) {

                                    $ispa = $this->remed->remed_poli_umum_ispa($ru['id_kunjungan'], $ru['tanggal_kunjungan_umum']);
                                    $tbc = $this->remed->remed_poli_umum_tbc($ru['id_kunjungan'], $ru['tanggal_kunjungan_umum']);
                                    $diare = $this->remed->remed_poli_umum_diare($ru['id_kunjungan'], $ru['tanggal_kunjungan_umum']);
                                    $penyakit = $this->remed->penyakit($ru['id_pasien'], $ru['tanggal_kunjungan_umum']);

                                    if($i%2==0) $x="odd";else $x="even";
                                    ?>
                        <tr clas="<?php echo $x ?>">
                            <td><?php echo $i++?></td>
                            <td><a class="pop" href="index.php/pasien/remed_poli_umum_pop/<?php echo $id_pasien;?>/<?php echo $ru['tanggal_kunjungan_umum']?>"><?php echo tgl_indo($ru['tanggal_kunjungan_umum']); ?></a></td>
                            <td><?php echo word_limiter($ru['anamnesis'],3,'...');?></td>
                            <td><?php echo word_limiter($ru['diagnosa'],3,'...');?></td>
                            <td><?php echo word_limiter($ru['nama_penyakit'],3,'...');?></td>
                            <td><a class="pop" href="index.php/antrian/tabel_ispa/<?php echo $ru['id_pasien']?>/<?php echo $ru['id_kunjungan']?>">
                                                <?php if(isset($ispa[$b]['id_ispa']) && $ispa[$b]['id_ispa']!==null) {
                                                    echo 'ispa';
                                                   // print_r($ispa);
                                                }
                                                else {
                                                    echo '';
                }
                ?> </a>
                            </td>
                            <td><a class="pop" href="index.php/antrian/tabel_tbc/<?php echo $ru['id_pasien']?>/<?php echo $ru['id_kunjungan']?>">
                                                <?php if(isset($tbc[$b]['id_tbc']) && $tbc[$b]['id_tbc']!==null) {
                                                    echo 'tbc';
                                                }
                                                else {
                                                    echo '';
                }
                ?> </a>
                            </td>
                            <td><a class="pop" href="index.php/antrian/tabel_diare/<?php echo $ru['id_pasien']?>/<?php echo $ru['id_kunjungan']?>">
                                                <?php if (isset($diare[$b]['id_diare']) && $diare[$b]['id_diare']!==null) {
                                                    echo 'diare';
                                                }
                                                else {
                                                    echo '';
                }
                $b++; ?> </a>
                            </td>
                            <td><?php echo word_limiter($ru['keterangan'],5,'...');?></td>

                        </tr>
                                    <?php }
        }
        ?>
                    </tbody>
                </table>


        <?php } ?>
            </div>

        </div>

</div>
    </div>
