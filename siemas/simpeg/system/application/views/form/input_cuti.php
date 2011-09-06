<?php $this->load->view('header'); ?>

<form action="" method="post" id="form">

<div class="belowribbon">
    <h1>
        Input cuti pegawai
        <?php if(!isset($saved)) : ?>
        <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
        <?php endif; ?>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <?php if(isset($saved)) : ?>
        <div class="notification n-success">
            Data telah disimpan
        </div>
        <?php else : ?>

        <div class="module">
            <h2><span>Masukkan data cuti</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td>Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai" class="input-long" onchange="load_cuti($(this).val())" id="pegawai">
                                    <option value="">-</option>
                                    <?php
                                    foreach ($daftar_pegawai as $pegawai) {

                                        echo "<option value='{$pegawai['id_pegawai']}'>{$pegawai['nama']}</option>";
                                        
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Dari tanggal</td>
                            <td><input type="text" name="dari_tanggal" maxlength="255" class="input-medium datepicker" id="from"/></td>
                        </tr>
                        <tr>
                            <td>Sampai tanggal</td>
                            <td><input type="text" name="sampai_tanggal" maxlength="255" class="input-medium datepicker" id="to"/></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>
                                <select name="keperluan" class="input-long">
                                    <option value="Cuti tahunan">Cuti tahunan</option>
                                    <option value="Cuti besar">Cuti besar</option>
                                    <option value="Cuti sakit">Cuti sakit</option>
                                    <option value="Cuti bersalin">Cuti bersalin</option>
                                    <option value="Cuti karena alasan penting">Cuti karena alasan penting</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan tambahan</td>
                            <td><textarea cols="35" rows="3" name="keterangan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Alamat selama cuti</td>
                            <td><textarea cols="35" rows="3" name="alamat" id="alamat"></textarea></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <?php endif; ?>
    </div>

    <div class="grid_6" style="width: 48%">

        <?php if(!isset($saved)) : ?>
        <div class="module" style="display: none" id="list_cuti">

        </div>
        <?php endif; ?>
    </div>
</div>
    
</form>

<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>
<script type="text/javascript">
    $(function() {
        var dates = $( "#from, #to" ).datepicker({
//            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onSelect: function( selectedDate ) {
                var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $( this ).data( "datepicker" ),
                date = $.datepicker.parseDate(
                instance.settings.dateFormat ||
                    $.datepicker._defaults.dateFormat,
                selectedDate, instance.settings );
                dates.not( this ).datepicker( "option", option, date );
            },
            dateFormat: 'dd-mm-yy'
        });
    });

    function load_cuti(id) {

        if(id == 0) $('#list_cuti').fadeOut();
        else {
            $('#list_cuti').fadeOut(function(){
                $(this).load('index.php/cuti/list_cuti/' + id, function(){$(this).fadeIn('fast')});
            });
            
        }
    }

    function hapus(id) {

        if(confirm("Hapus data cuti ini? Data yang dihapus tidak dapat dikembalikan")) {
            $.get('index.php/cuti/hapus_cuti/' + id, function(data){
                if(data == '1') {
                    $('#t_' + id).fadeOut(function(){$(this).remove()});
                }
            });
        }

    }
</script>

<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript">

$.validity.setup({ outputMode:"modal" });

$('#form').validity(function(){
    $('#pegawai').require("Pilih salah satu pegawai");
    $('.datepicker').require("Tanggal harus diisi").match(/^([012]\d|30|31)\-([01]\d)\-\d{1,4}$/, 'Tanggal tidak valid');
    $('#alamat').require("Alamat harus diisi");
});

</script>

<?php $this->load->view('footer'); ?>