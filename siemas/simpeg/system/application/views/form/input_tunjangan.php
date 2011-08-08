<?php $this->load->view('header'); ?>

<form action="" method="post">

<script type="text/javascript">

// KEYBOARD NAVIGATION FOR TEXTFIELDS

$(document).ready(function(){

    $('input[type=text]').each(function() {
        this.onfocus = function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            this.select();
            var cur_id = this.id.split('_');
            var cur_x = parseInt(cur_id[1]);
            var cur_y = parseInt(cur_id[2]);

            this.onkeydown = function(event) {
                if(!event) event = window.event;
                funcKeyDown(event,cur_x,cur_y);
                if(event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) return false;  // intercept arrow keys
            };
        };
    });
});

function funcKeyDown(evt, cur_x, cur_y) {

    var next_x = 0, next_y = 0;

    switch(evt.keyCode) {
        case 39: 	// kanan
            next_x = parseInt(cur_x + 1);
            next_y = cur_y;
            if($('#field_' + next_x + '_' + next_y).length) {
                $('#field_' + next_x + '_' + next_y).select();
                $('#field_' + cur_x + '_' + cur_y).blur();
            }
            return false;

        case 37: 	// kiri
            next_x = parseInt(cur_x - 1);
            next_y = cur_y;
            if($('#field_' + next_x + '_' + next_y).length) {
                $('#field_' + next_x + '_' + next_y).select();
                $('#field_' + cur_x + '_' + cur_y).blur();
            }
            return false;

        case 38: 	// atas
            next_x = cur_x;
            next_y = parseInt(cur_y - 1);
            if($('#field_' + next_x + '_' + next_y).length) {
                $('#field_' + next_x + '_' + next_y).select();
                $('#field_' + cur_x + '_' + cur_y).blur();
            }
            return false;

        case 40: 	// bawah
            next_x = cur_x;
            next_y = parseInt(cur_y + 1);
            if($('#field_' + next_x + '_' + next_y).length) {
                $('#field_' + next_x + '_' + next_y).select();
                $('#field_' + cur_x + '_' + cur_y).blur();
            }
            return false;

    }

}

</script>
<script type="text/javascript" src="js/textbox_money.js"></script>

<div class="belowribbon">
    <h1>
        Input tunjangan
        <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<?php
$nama_bulan = array(
    "",
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);

?>

<div id="page">

    <?php if(isset($saved)) : ?>
    <div style="margin: 0px 1%">
        <div class="notification n-success">
            Data telah disimpan
        </div>
    </div>
    <?php endif; ?>

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Pilih bulan dan tahun</span></h2>
            <div class="module-body">
                    Tahun&nbsp;&nbsp;&nbsp;
                    <input type="text" name="tahun" id="tahun" value="<?php echo $tahun; ?>" class="input-short" style="width: 70px"/>
                    Bulan&nbsp;&nbsp;&nbsp;
                    <select name="bulan" id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($i == $bulan) echo 'selected="selected"'; ?>><?php echo $nama_bulan[$i]; ?></option>
                        <?php endfor; ?>
                    </select>
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/penilaian/input_tunjangan/' + $('#bulan').val() + '/' + $('#tahun').val()"/>
            </div>
        </div>
    </div>

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Persentase PPh 21</span></h2>
            <div class="module-table-body">
                <table>
                    <thead>
                        <tr>
                            <th>Gol IV</th>
                            <th>Gol III</th>
                            <th>Gol II</th>
                            <th>Gol I</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" id="gol_IV" class="number input-long" value="5" maxlength="3"/> %
                            </td>
                            <td>
                                <input type="text" id="gol_III" class="number input-long" value="15" maxlength="3"/> %
                            </td>
                            <td>
                                <input type="text" id="gol_II" class="number input-long" value="0" maxlength="3"/> %
                            </td>
                            <td>
                                <input type="text" id="gol_I" class="number input-long" value="0" maxlength="3"/> %
                            </td>
                            <td>
                                <input type="button" value="Hitung PPh" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden;" onclick="hitung_PPh()"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Input tunjangan</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>Tunjangan</th>
                            <th>PPh 21</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($daftar_tunjangan as $data) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td>
                                    <input type="hidden" name="id_pegawai[]" value="<?php echo $data['id_pegawai'] ?>"/>
                                    <?php echo $i+1; ?>
                                </td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php $j = $this->pegawai->get_jabatan_terakhir($data['id_pegawai']); echo $j['jabatan'] ?></td>
                                <td><?php $g = $this->pegawai->get_pangkat_terakhir($data['id_pegawai']); echo $g['golongan'] ?></td>
                                <td><input type="text" maxlength="255" value="<?php echo intval($data['tunjangan']) ?>" id="field_0_<?php echo $i-1 ?>" name="tunjangan[]" class="number input-long tunjangan" golongan="<?php $g = $this->pegawai->get_pangkat_terakhir($data['id_pegawai']); $h = explode(" / ", $g['golongan']); echo $h[0] ?>"/></td>
                                <td><input type="text" maxlength="255" value="<?php echo intval($data['pph21']) ?>"     id="field_1_<?php echo $i-1 ?>" name="pph21[]"     class="number input-long"/></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</form>

<script type="text/javascript">

function formatUang(str) {
    var regex = /(-?[0-9]+)([0-9]{3})/;
    str += '';
    while (regex.test(str)) {
        str = str.replace(regex, '$1.$2');
    }
    str += '';
    return str;
};

function hitung_PPh() {

    var persentase = new Array();
    persentase['-'] = 0;
    persentase['I'] = $('#gol_I').val();
    persentase['II'] = $('#gol_II').val();
    persentase['III'] = $('#gol_III').val();
    persentase['IV'] = $('#gol_IV').val();

    $('.tunjangan').each(function(){
        var gol = $(this).attr('golongan');
        var pph = parseFloat(persentase[gol]);
        var tunjangan = parseFloat($(this).val().replace(/[^0-9]/g, ''));

        $(this).parent('td').next().find('input').val(formatUang(pph/100 * tunjangan));
    });

}

</script>

<?php $this->load->view('footer'); ?>