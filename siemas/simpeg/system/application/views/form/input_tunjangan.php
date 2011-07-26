<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

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
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Masukkan jumlah tunjangan dan PPh</span></h2>
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
                        <?php for ($i = 1; $i < count($pegawai); $i++) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pegawai[$i]; ?></td>
                                <td>Dokter</td>
                                <td>III</td>
                                <td><input class="number input-long" type="text" value="0" maxlength="255" id="field_0_<?php echo $i-1 ?>" name="tunjangan[]"/></td>
                                <td><input class="number input-long" type="text" value="0" maxlength="255" id="field_1_<?php echo $i-1 ?>" name="pph[]"/></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



<?php include 'footer.php'; ?>