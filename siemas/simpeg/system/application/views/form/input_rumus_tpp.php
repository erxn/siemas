<?php $this->load->view('header') ?>

<script type="text/javascript" src="jquery.js"></script>

<form action="" method="post" id="form">

<div class="belowribbon">
    <h1>
        Input perhitungan TPP
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px" name="submit"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <?php if(isset($saved)) : ?>
        <div class="notification n-success">
            Data telah disimpan
        </div>
        <?php endif; ?>

        <div class="module">
            <h2><span>Persentase masing-masing penilaian terhadap nilai TPP</span></h2>
            <div class="module-table-body">
                <table width="100%" border="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kehadiran</td>
                            <td><input type="text" name="kehadiran" maxlength="4" class="input-short" value="<?php echo $kontribusi['jumlah_kehadiran']; ?>"/> %</td>
                        </tr>
                        <tr>
                            <td>Jam efektif</td>
                            <td><input type="text" name="jam_efektif" maxlength="4" class="input-short" value="<?php echo $kontribusi['jumlah_jam_efek']; ?>"/> %</td>
                        </tr>
                        <tr>
                            <td>Jumlah apel</td>
                            <td><input type="text" name="apel" maxlength="4" class="input-short" value="<?php echo $kontribusi['jumlah_apel']; ?>"/> %</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</form>

<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript">

$.validity.setup({ outputMode:"modal" });

$('#form').validity(function(){
    $('form input').require('Harus diisi').match('number', 'Harus diisi angka');
});

</script>


<?php $this->load->view('footer') ?>