<style>
    .kotak {
        width: 75px;
        padding: 8px;
        display: inline-block;
        margin: 5px;
        -moz-border-radius: 10px;
        -moz-box-shadow: 1px 3px 10px #666666;
        text-decoration: none;
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
        font-size: 12px;
    }
    .kotak:hover {
        background: -moz-linear-gradient(top, #FFFFFF, #DDDDDD);
    }
</style>

<div style="border: 0px solid fuchsia; width: 400px; height: auto;padding: 2px; text-align: center; margin: 0 auto">
    <a href="#" onclick="tambah_antrian('umum'); return false;" class="kotak"><img src="images/umum.png" border="0"/><br/>Poli Umum</a>
    <a href="#" onclick="tambah_antrian('gigi'); return false;" class="kotak"><img src="images/gigi.png" border="0"/><br/>Poli Gigi</a>
    <a href="#" onclick="tambah_antrian('kia'); return false;" class="kotak"><img src="images/kia.png" border="0"/><br/>Poli KIA</a>
    <a href="#" onclick="tambah_antrian('lab'); return false;" class="kotak"><img src="images/lab.png" border="0"/><br/>Laboratorium</a>
    <a href="#" onclick="tambah_antrian('radiologi'); return false;" class="kotak"><img src="images/radiologi.jpg" border="0"/><br/>Radiologi</a>
    <a href="#" onclick="tambah_antrian('apotek'); return false;" class="kotak"><img src="images/apotek.png" border="0"/><br/>Apotek</a>
</div>

<script type="text/javascript">

function tambah_antrian(poli) {

    $('#poli').val(poli);
    $('#pasien_baru').submit();

}

</script>