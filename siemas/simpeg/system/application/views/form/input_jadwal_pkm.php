<?php $this->load->view('header'); ?>

<script type="text/javascript" src="jquery.js"></script>

<form action="" method="post" id="form">

    <?php if(count($jadwal_pkm) == 0 || count($jadwal_bp) == 0) : ?>
    <script type="text/javascript">

    $(document).ready(function(){
        $('#submit').click();
    });

    </script>
    <?php endif; ?>

    <div class="belowribbon">
        <h1>
            Input jam kerja
            <input type="submit" name="submit" class="submit-green" value="Simpan" style="margin-left: 10px" id="submit"/>
        </h1>
    </div>

    <div id="page">

        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>Puskesmas Bogor Tengah</span></h2>
                <div class="module-table-body">

                    <table width="100%">
                        <thead>
                            <tr>
                                <th width="30%">Hari</th>
                                <th width="20%">Buka?</th>
                                <th width="25%">Jam buka</th>
                                <th width="25%">Jam tutup</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($jadwal_pkm as $j) : ?>
                            <tr>
                                <td><?php echo ucfirst($j['hari']); ?></td>
                                <td>
                                    <select name="<?php echo $j['hari'] ?>_buka" id="<?php echo $j['hari'] ?>_buka" class="input-long" onchange="aaaaa('<?php echo $j['hari'] ?>')">
                                        <option value="1" <?php if($j['buka'] == 1) echo "selected" ?>>Buka</option>
                                        <option value="0" <?php if($j['buka'] == 0) echo "selected" ?>>Tutup</option>
                                    </select>
                                </td>
                                <td><input type="text" name="<?php echo $j['hari'] ?>_mulai" maxlength="5" class="input-long" id="<?php echo $j['hari'] ?>_mulai" value="<?php echo date("H:i", strtotime($j['jam_mulai'])) ?>" <?php if($j['buka'] == 0) echo "style='display:none'" ?>/></td>
                                <td><input type="text" name="<?php echo $j['hari'] ?>_selesai" maxlength="5" class="input-long" id="<?php echo $j['hari'] ?>_selesai" value="<?php echo date("H:i", strtotime($j['jam_selesai'])) ?>" <?php if($j['buka'] == 0) echo "style='display:none'" ?>/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div align="center">
                        <strong>
                            Keterangan: Jam ditulis dengan pemisah titik dua, misalnya 07:30
                        </strong>
                    </div>
                    <br/>
                </div>
            </div>
        </div>

        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>BP Pemda</span></h2>
                <div class="module-table-body">

                    <table width="100%">
                        <thead>
                            <tr>
                                <th width="30%">Hari</th>
                                <th width="20%">Buka?</th>
                                <th width="25%">Jam buka</th>
                                <th width="25%">Jam tutup</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($jadwal_bp as $j) : ?>
                            <tr>
                                <td><?php echo ucfirst($j['hari']); ?></td>
                                <td>
                                    <select name="<?php echo $j['hari'] ?>_buka_bp" id="<?php echo $j['hari'] ?>_buka_bp" class="input-long" onchange="bbbbb('<?php echo $j['hari'] ?>')">
                                        <option value="1" <?php if($j['buka'] == 1) echo "selected" ?>>Buka</option>
                                        <option value="0" <?php if($j['buka'] == 0) echo "selected" ?>>Tutup</option>
                                    </select>
                                </td>
                                <td><input type="text" name="<?php echo $j['hari'] ?>_mulai_bp" maxlength="5" class="input-long" id="<?php echo $j['hari'] ?>_mulai_bp" value="<?php echo date("H:i", strtotime($j['jam_mulai'])) ?>" <?php if($j['buka'] == 0) echo "style='display:none'" ?>/></td>
                                <td><input type="text" name="<?php echo $j['hari'] ?>_selesai_bp" maxlength="5" class="input-long" id="<?php echo $j['hari'] ?>_selesai_bp" value="<?php echo date("H:i", strtotime($j['jam_selesai'])) ?>" <?php if($j['buka'] == 0) echo "style='display:none'" ?>/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div align="center">
                        <strong>
                            Keterangan: Jam ditulis dengan pemisah titik dua, misalnya 07:30
                        </strong>
                    </div>
                    <br/>

                </div>
            </div>
        </div>

    </div>

</form>

<script type="text/javascript">

function aaaaa(hari) {
    if($('#' + hari + '_buka').val() == '1') {
        $('#' + hari + '_mulai').fadeIn();
        $('#' + hari + '_selesai').fadeIn();
    } else {
        $('#' + hari + '_mulai').fadeOut();
        $('#' + hari + '_selesai').fadeOut();
    }
}

function bbbbb(hari) {
    if($('#' + hari + '_buka_bp').val() == '1') {
        $('#' + hari + '_mulai_bp').fadeIn();
        $('#' + hari + '_selesai_bp').fadeIn();
    } else {
        $('#' + hari + '_mulai_bp').fadeOut();
        $('#' + hari + '_selesai_bp').fadeOut();
    }
}

</script>

<?php $this->load->view('footer'); ?>