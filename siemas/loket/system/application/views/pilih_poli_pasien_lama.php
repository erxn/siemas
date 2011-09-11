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

<div style="border: 0px solid fuchsia; width: 800px; height: auto;padding: 2px; text-align: center; margin: 0 auto">
    <a href="#" onclick="tambah_antrian('Umum'); return false;" class="kotak"><img src="images/umum.png" border="0"/><br/>Poli Umum</a>
    <a href="#" onclick="tambah_antrian('Gigi'); return false;" class="kotak"><img src="images/gigi.png" border="0"/><br/>Poli Gigi</a>
    <a href="#" onclick="tambah_antrian('Kia'); return false;" class="kotak"><img src="images/kia.png" border="0"/><br/>Poli KIA</a>
    <a href="#" onclick="tambah_antrian('Spesialis Anak'); return false;" class="kotak"><img src="images/lab.png" border="0"/><br/>Sps. Anak</a><br/>
    <a href="#" onclick="tambah_antrian('Spesialis Penyakit Dalam'); return false;" class="kotak"><img src="images/lab.png" border="0"/><br/>Sps. Dalam</a>
    <a href="#" onclick="tambah_antrian('Lab'); return false;" class="kotak"><img src="images/lab.png" border="0"/><br/>Laboratorium</a>
    <a href="#" onclick="tambah_antrian('Radiologi'); return false;" class="kotak"><img src="images/radiologi.jpg" border="0"/><br/>Radiologi</a>
    <a  href="#" onclick="tambah_antrian('Rujukan'); return false;" class="kotak"><img src="images/radiologi.jpg" border="0"/><br/>Rujukan</a>
</div>

<script type="text/javascript">

function tambah_antrian(poli) {

    $('#poli').val(poli);
    $('#pasien_lama').submit();

}
</script>