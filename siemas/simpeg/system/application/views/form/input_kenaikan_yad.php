<?php $this->load->view('header'); ?>

<form action="" method="post">

<div class="belowribbon">
    <h1>
        Input tanggal kenaikan gaji YAD
        <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
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

        <?php if(isset($updated)) : ?>
        <div class="notification n-success">
            Data disimpan
        </div>
        <?php endif; ?>

        <div class="module">
            <h2><span>Masukkan data</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td>Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai" class="input-long" onchange="load_kenaikan_yad($(this).val())">
                                    <option value="0">-</option>
                                    <?php foreach ($daftar_pegawai as $pegawai) { ?>

                                    <option value='<?php echo $pegawai['id_pegawai']; ?>' <?php if($pegawai['id_pegawai'] == $id_pegawai) echo 'selected'; ?>><?php echo $pegawai['nama']; ?></option>

                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kenaikan gaji YAD</td>
                            <td><input type="text" name="tanggal_yad" maxlength="255" class="datepicker input-medium" value="<?php if(isset($kenaikan_yad)) echo format_tanggal_tampilan ($kenaikan_yad); ?>"/></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</form>

<script type="text/javascript">

function load_kenaikan_yad(id) {

    window.location = 'index.php/pegawai/input_kenaikan_yad/' + id;

}

</script>

<?php $this->load->view('footer'); ?>