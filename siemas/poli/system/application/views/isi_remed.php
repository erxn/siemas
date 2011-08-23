e<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

<script>
    $(function() {

        $( ".tabs" ).tabs();
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

        $.get('index.php/antrian/pasien_terisi/' + id);
        load_selesai();
        load_terisi();
    }

    
  
</script>
<div  class="tabs" style="float:right;  margin-right: 10px; width:45%">
    <ul>
        <li><a href="#tabs-a">Isi Rekam Medik Hari Ini</a></li>
    </ul>
    <div id="tabs-a" >
        <div class="module" style="background:none; float: none">
            <h3>Data Pasien</h3>

            <?php if($data_pasien == null) { ?>

           <h1> Pilih pasien dulu</h1>

            <?php } else { ?>

                <table style="width:90%;" id="myTable"  >
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
        </div>
        

        </div>

        <div id="tabs1">
            <ul>
                <li><a href="#tabs1-1">Diagnosis Dokter</a></li>
            </ul>
            <div id="tabs1-1" style="">
                <form action="" method="post">
                <table  id="myTable" style="width:100%; margin-left: 30px ; margin-top: 5px">


            <tr class="odd">
                <td>Anamnesis:</td>
                <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
            </tr>

            <tr>
                <td>Diagnosa:</td>
                <td><textarea name="n_diagnosa" rows="5" cols="40"></textarea></td>
            </tr>

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

            <tr class="odd">
                <td>Keterangan:</td>

                <td><textarea name="n_ket" rows="5" cols="40"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input name="submit"  type="submit"  class="submit-green" value="Simpan" name="simpan"></td>
            </tr>
   
                </table>
                </form>
            </div>
        </div>
    </div>

        <?php } ?>