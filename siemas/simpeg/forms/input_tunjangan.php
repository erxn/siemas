<?php include 'list_pegawai.php';?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

$(function() {
    var numberInputs = $("input.number");
    var convertToCurrencyDisplayFormat = function(str) {
        var regex = /(-?[0-9]+)([0-9]{3})/;
        str += '';
        while (regex.test(str)) {
            str = str.replace(regex, '$1.$2');
        }
        str += '';
        return str;
    };
    var stripNonNumeric = function(str) {
        str += '';
        str = str.replace(/[^0-9]/g, '');
        return str;
    };
    numberInputs.each(function() {
        this.value = convertToCurrencyDisplayFormat(this.value);
    });
    numberInputs.blur(function() {
        this.value = convertToCurrencyDisplayFormat(this.value);
        this.style.textAlign = 'right';
    });
    numberInputs.focus(function() {
        this.value = stripNonNumeric(this.value);
        this.style.textAlign = 'left';
    });
    $("form").submit(function() {
        numberInputs.each(function() {
            this.value = stripNonNumeric(this.value);
        });
    });

    $('.number').css("text-align", "right");

});

</script>

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
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $pegawai[$i]; ?></td>
                <td>Dokter</td>
                <td>III</td>
                <td><input class="number" type="text" value="0" maxlength="255" name="tunjangan[]"/></td>
                <td><input class="number" type="text" value="0" maxlength="255" name="pph[]"/></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>