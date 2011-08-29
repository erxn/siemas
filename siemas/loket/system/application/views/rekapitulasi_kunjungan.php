<?php $this->load->view('header');?>

<script type="text/javascript">
    $(function() {
        $('.password').pstrength();
    });
</script>

<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<div style="font-size: 14px !important;padding: 2px; margin-left: 15px;"><a href="index.php/c_laporan">Laporan</a> > Rekapitulasi Kunjungan</div>
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>REKAPITULAS KUNJUNGAN</span></h2>
                <div class="module-body">
                    <div style="width: 800px; height: auto;padding: 8px; text-align: center; margin: 10px auto">
                        <a href="index.php/kunjungan/kunjungan_harian_askes" class="kotak">
                            ASKES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="index.php/kunjungan/kunjungan_harian_jam" class="kotak">
                            JAMKESMAS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="index.php/kunjungan/kunjungan_harian_umum" class="kotak">
                            UMUM</a>
                    </div>
                    <div>
                        <div id="container" style="width: 98%; height: 10%px; margin: 0 auto">
                            <!-- ini grafiknya -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
