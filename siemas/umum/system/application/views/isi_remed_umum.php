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

        $( ".tabs" ).tabs();
    });


</script>

<script type="text/javascript">

    function load_selesai() {
        $('#div-selesai').load("index.php/antrian/pasien_hari_ini/2");
    }

    function load_terisi() {
        $('#div-terisi').load("index.php/antrian/tabel_terisi/2");
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
        <div class="module" style="background:none; float: none">
            <h3>Data Pasien</h3>

            <?php if($data_pasien == null) { ?>

            <h1> Pilih pasien dulu</h1>

                <?php } else { ?>

            <table style="width:90%;margin-left: 30px;margin-top: 30px" id="myTable"  >
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
                    <td><?php echo $data_pasien[0]['umur']?> tahun</td>

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
        </div>


    </div>
</div>

<div style="clear: both"></div>

<form action="" method="post">

    <div  class="tabs" style="float:right; width:45%">
        <ul>
            <li><a href="#tabs1-1">Umum</a></li>
        </ul>
        <div id="tabs1-1">
            <table  id="myTable"  class="noborder" style="width:100%">

                <tr class="odd">
                    <td>Anamnesis:</td>
                    <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
                </tr>
                <tr>
                    <td>Diagnosis:</td>
                    <td><textarea name="n_diagnosis" rows="5" cols="40" input=""></textarea></td>
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
            </table>
        </div>
    </div>
</form>

    <?php } ?>