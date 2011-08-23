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
        <div class="module" style="background:none; float: none; margin-bottom: 0px">
            <h3>Data Pasien</h3>

            <?php if($data_pasien == null) { ?>

            <h1> Pilih pasien dulu</h1>

                <?php } else { ?>

            <table style="">
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

<br/>

<div  class="tabs" style="float:right;  margin-right: 10px; margin-top: 20px; width:45%">
    <form action="" method="post">
        <ul>
            <li><a href="#tabs1-1">Isi Rekam Medik</a></li>
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
                <tr class="odd">
                    <td>Penyakit:</td>
                    <td><textarea name="n_penyakit" rows="3" cols="40" style="width: 90%"></textarea></td>
                </tr>
                <tr>
                    <td>Keterangan:</td>
                    <td><textarea name="n_keterangan" rows="3" cols="40" style="width: 90%"></textarea></td>
                </tr>
                <tr>
                    <td>P2M</td>
                    <td>
                        <a  href="#"  class="btn-gplus gplus-blue" onclick="$('#tbc').fadeIn(); $('#is_tbc').val('1'); return false;">TBC</a>
                        <a  href="#" class="btn-gplus gplus-blue" onclick="$('#diare').fadeIn(); $('#is_diare').val('1'); return false;">Diare</a>
                        <a  href="#" class="btn-gplus gplus-blue" onclick="$('#ispa').fadeIn(); $('#is_ispa').val('1'); return false;">ISPA</a>

                        <input type="hidden" id="is_tbc" value="0" name="is_tbc"/>
                        <input type="hidden" id="is_diare" value="0" name="is_diare"/>
                        <input type="hidden" id="is_ispa" value="0" name="is_ispa"/>
                    </td>
                </tr>

                <tr id="tbc" style="display: none">
                    <td><strong>TBC </strong><a href="#" class="btn-gplus gplus-red" onclick="$('#tbc').fadeOut(); $('#is_tbc').val('0'); return false;">x</a></td>
                    <td>
                        <table  class="noborder" style="width:100%">
                            <tr class="odd">
                                <td width="25%">Alasan Periksa Lab:</td>
                                <td><textarea name="n_alasan_periksa" rows="3" cols="40"></textarea></td>
                            </tr>
                            <tr>
                                <td>Hasil Periksa Lab:</td>
                                <td><textarea name="n_hasil_periksa" rows="3" cols="40"></textarea></td>
                            </tr>
                            <tr class="odd">
                                <td>Rejimen:</td>
                                <td><textarea name="n_rejimen" rows="3" cols="40"></textarea></td>
                            </tr>
                            <tr>
                                <td>Klasifikasi Penyakit:</td>
                                <td>  <input type="radio" name="n_paru" value="paru"/>Paru<br/>
                                    <input type="radio" name="n_paru" value="ekstra_paru" checked/>Ekstra Paru<br/>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>Tipe Penderita:</td>
                                <td> <select name="tipe_penderita">
                                        <option value="baru">Baru</option>
                                        <option value="kambuh">Kambuh</option>
                                        <option value="pindahan">Pindahan</option>
                                        <option value="default">Default</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Keterangan:</td>
                                <td><textarea name="n_keterangan" rows="3" cols="40"></textarea></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr id="diare" style="display: none">
                    <td><strong>Diare </strong><a href="#" class="btn-gplus gplus-red" onclick="$('#diare').fadeOut(); $('#is_diare').val('0'); return false;">x</a></td>
                    <td>
                        <table  class="noborder" style="width:100%">
                            <tr class="odd">
                                <td width="25%">Etiologi Diare:</td>
                                <td><textarea name="n_etiologi_diare" rows="3" cols="40"></textarea></td>
                            </tr>
                            <tr>
                                <td>Keadaan Umum:</td>
                                <td> <select name="n_keadaan_umum">
                                        <option value="baik">Baik</option>
                                        <option value="gelisah">Gelisah</option>
                                        <option value="lesu">Lesu</option>
                                    </select></td>
                            </tr>
                            <tr class="odd">
                                <td>Mata:</td>
                                <td> <select name="n_mata">
                                        <option value="normal">Normal</option>
                                        <option value="cekung">Cekung</option>
                                        <option value="sangat cekung">Sangat Cekung</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Air Mata:</td>
                                <td>  <input type="radio" name="air_mata" value="ada" />Ada<br />
                                    <input type="radio" name="air_mata" value="tidak ada" checked />Tidak Ada<br />
                                </td>

                            </tr>
                            <tr class="odd">
                                <td>Mulut:</td>
                                <td> <select name="n_mulut">
                                        <option value="basah">Basah</option>
                                        <option value="kering">Kering</option>
                                        <option value="sangat kering">Sangat Kering</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Rasa Haus:</td>
                                <td> <select name="n_haus">
                                        <option value="bisa minum">Bisa Minum</option>
                                        <option value="haus">Haus</option>
                                        <option value="malas minum">Malas Minum</option>
                                    </select></td>
                            </tr>
                            <tr class="odd">
                                <td>Turgor:</td>
                                <td> <select name="n_turgor">
                                        <option value="cepat kembali">Cepat kembali</option>
                                        <option value="kembali lambat">Kembali lambat </option>
                                        <option value="kembali sangat lambat">Kembali sangat lambat</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Derajat dehidrasi:</td>
                                <td> <select name="n_dehisrasi">
                                        <option value="tanpa">Tanpa</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="berat">Berat</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Pemeriksaan lab kholera:</td>
                                <td> <select name="n_lab">
                                        <option value="negatif">Negatif</option>
                                        <option value="positif">Positif</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Pemakaian:</td>
                                <td> <select name="n_pemakaia ">
                                        <option value="oralit">Oralit</option>
                                        <option value="ringer laktate">Ringer laktate</option>
                                        <option value="berat">Berat</option>
                                    </select></td>
                            </tr>
                            <tr class="odd">
                                <td>Keterangan:</td>
                                <td><textarea name="n_keterangan" rows="3" cols="40"></textarea></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr id="ispa" style="display: none">
                    <td><strong>ISPA </strong><a href="#" class="btn-gplus gplus-red" onclick="$('#ispa').fadeOut(); $('#is_ispa').val('0'); return false;">x</a></td>
                    <td>
                        <table  id="myTable"  class="noborder" style="width:100%">
                            <tr class="odd">
                                <td width="25%">Frekuensi Napas:</td>
                                <td><textarea name="n_frekuensi_napas" rows="3" cols="40"></textarea></td>
                            </tr>

                            <tr>
                                <td>Klasifikasi:</td>
                                <td> <select name="n_klasifikasi">
                                        <option value="bp">Bukan Pneumonia</option>
                                        <option value="p">Pneumonia</option>
                                        <option value="pb">Pneumonia Berat</option>
                                    </select>
                                </td>
                            </tr>

                            <tr class="odd">
                                <td>Tindak Lanjut:</td>
                                <td> <input type="radio" name="tindak" value="rawat jalan" />Rawat Jalan<br />
                                    <input type="radio" name="tindak" value="rujuk" checked />Rujuk<br />

                                </td>
                            </tr>
                            <tr>
                                <td>Antibiotika:</td>
                                <td> <input type="radio" name="antibiotik" value="ya" />Ya<br />
                                    <input type="radio" name="antibiotik" value="tidak" checked />Tidak<br />
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>Kondisi saat kunjungan ulang:</td>
                                <td> <select name="n_kunjungan_ulang">
                                        <option value="membaik">Membaik</option>
                                        <option value="tetap">Tetap</option>
                                        <option value="memburuk">Memburuk</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan:</td>
                                <td><textarea name="n_keterangan" rows="3" cols="40"></textarea></td>
                            </tr>
                        </table>

                    </td>
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
</div>


    <?php } ?>