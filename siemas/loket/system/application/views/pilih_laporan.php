<style>
    .kotak {
        width: 250px;
        padding: 8px;
        display: inline-block;
        margin: 15px;
        -moz-border-radius: 10px;
        -moz-box-shadow: 1px 3px 10px #666666;
        text-decoration: none;
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
        font-size: 15px;
    }
    .kotak:hover {
        background: -moz-linear-gradient(top, #FFFFFF, #DDDDDD);
        color: #0063BE;
    }
</style>

<div style="border: 0px solid fuchsia; width: 600px; height: auto;padding: 8px; ">
    <a href="index.php/c_laporan/rekapitulasi_setoran"   class="kotak"><img src="images/loket_pen.png" border="0"/> Rekapitulasi Setoran</a>
    <a href="index.php/c_laporan/rekap_kunjungan_umum"  class="kotak"><img src="images/loket_pen.png" border="0"/> Rekap Kunjungan Umum</a>
    <a href="index.php/c_laporan/rekapitulasi_kunjungan" class="kotak"><img src="images/loket_pen.png" border="0"/> Kunjungan Harian</a>
    <a href="index.php/c_laporan/rekap_kunjungan_askes"  class="kotak"><img src="images/loket_pen.png" border="0"/> Rekap Kunjungan Askes</a>
    
    <a href="index.php/c_laporan/laporan_kunjungan_bulanan"  class="kotak"><img src="images/loket_pen.png" border="0"/> Kunjungan Bulanan</a>
    <a href="index.php/c_laporan/rekap_kunjungan_lb4"  class="kotak"><img src="images/loket_pen.png" border="0"/> LB4</a>
</div>

<script type="text/javascript">

function tambah_antrian(poli) {

    $('#poli').val(poli);
    $('#pasien_baru').submit();

}

</script>