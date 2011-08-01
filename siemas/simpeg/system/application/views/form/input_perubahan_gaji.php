<?php $this->load->view('header'); ?>

<form action="" method="post">

<div class="belowribbon">
    <h1>
        Input perubahan gaji pokok
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
    </script>

    <div class="grid_6" style="width: 48%">

        <?php if(isset($saved)) : ?>
        <div class="notification n-success">
            Data telah disimpan
        </div>
        <?php else : ?>

        <div class="module">
            <h2><span>Masukkan data perubahan gaji pokok</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td width="30%">Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai" class="input-long" onchange="load_gaji($(this).val())">
                                    <option value="0">-</option>
                                    <?php
                                    foreach ($daftar_pegawai as $pegawai) {

                                        echo "<option value='{$pegawai['id_pegawai']}'>{$pegawai['nama']}</option>";

                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr id="riwayat" style="display: none">
                            <td>Riwayat gaji</td>
                            <td>
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Gaji</th>
                                            <th>TMT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Gaji baru</td>
                            <td>
                                <script type="text/javascript" src="js/textbox_money.js"></script>
                                <input type="text" name="gaji" maxlength="255" class="input-medium number"/>
                            </td>
                        </tr>
                        <tr>
                            <td>TMT</td>
                            <td><input type="text" name="tmt" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

</form>

<script type="text/javascript">

    function load_gaji(id) {

        if(id == 0) $('#riwayat').fadeOut();
        else {
            $('#riwayat').fadeOut(function(){
                $(this).load('index.php/pegawai/list_gaji/' + id, function(){$(this).fadeIn('fast')});
            });

        }
    }

    function hapus(id) {

        if(confirm("Hapus data ini? Data yang dihapus tidak dapat dikembalikan")) {
            $.get('index.php/pegawai/hapus_gaji/' + id, function(data){
                if(data == '1') {
                    $('#t_' + id).fadeOut(function(){$(this).remove()});
                }
            });
        }

    }

</script>

<?php $this->load->view('footer'); ?>