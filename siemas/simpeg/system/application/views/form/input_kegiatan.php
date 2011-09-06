<?php $this->load->view('header'); ?>

<form action="" method="post" id="form">

    <div class="belowribbon">
        <h1>
            Input kegiatan luar Puskesmas
            <?php if(!isset($saved)) : ?>
            <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
            <?php endif; ?>
        </h1>
    </div>

    <div id="page">

        <script type="text/javascript" src="jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $( ".datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'dd-mm-yy'
                });
            });

            function load_kegiatan(id) {

                if(id == 0) $('#list_kegiatan').fadeOut();
                else {
                    $('#list_kegiatan').fadeOut(function(){
                        $(this).load('index.php/kegiatan/list_kegiatan/' + id, function(){$(this).fadeIn('fast')});
                    });

                }
            }

            function hapus(id) {

                if(confirm("Hapus data ini? Data yang dihapus tidak dapat dikembalikan")) {
                    $.get('index.php/kegiatan/hapus_kegiatan/' + id, function(data){
                        if(data == '1') {
                            $('#t_' + id).fadeOut(function(){$(this).remove()});
                        }
                    });
                }

            }
        </script>


        <div class="grid_6" style="width: 48%">

            <?php if(isset($saved)) : ?>
            <div class="notification n-success">
                Data telah disimpan
            </div>
            <?php else : ?>

            <div class="module">
                <h2><span>Masukkan data kegiatan</span></h2>
                <div class="module-body">
                    <table width="100%" class="noborder">
                        <tbody>
                            <tr>
                                <td>Pilih pegawai</td>
                                <td>
                                    <select name="sel_pegawai" class="input-long" onchange="load_kegiatan($(this).val())" id="pegawai">
                                        <option value="">-</option>
                                        <?php
                                        foreach ($daftar_pegawai as $pegawai) {

                                            echo "<option value='{$pegawai['id_pegawai']}'>{$pegawai['nama']}</option>";

                                        } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><input type="text" name="tanggal_kegiatan" maxlength="255" class="datepicker input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td><input type="text" name="lokasi_kegiatan" maxlength="255" class="input-medium" id="lokasi"/></td>
                            </tr>
                            <tr>
                                <td>Kegiatan</td>
                                <td><textarea cols="35" rows="3" name="kegiatan" id="kegiatan"></textarea></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <?php endif; ?>
            
        </div>

        <div class="grid_6" style="width: 48%">
            
            <?php if(!isset($saved)) : ?>
            <div class="module" style="display: none" id="list_kegiatan">

            </div>
            <?php endif; ?>
        </div>

    </div>

</form>

<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript">

$.validity.setup({ outputMode:"modal" });

$('#form').validity(function(){
    $('#pegawai').require("Pilih salah satu pegawai");
    $('.datepicker').require("Tanggal harus diisi").match(/^([012]\d|30|31)\-([01]\d)\-\d{1,4}$/, 'Tanggal tidak valid');
    $('#lokasi').require("Lokasi harus diisi");
    $('#kegiatan').require("Kegiatan harus diisi");
});

</script>


<?php $this->load->view('footer'); ?>