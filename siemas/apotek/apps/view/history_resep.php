<?php $this->view_header_history(); ?>
<!-- Sub navigation -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul style="margin-left: 50px;">


                <li><a href="<?php echo $this->base_url ?>index.php/riwayat/pemakaian_obat">Pemakaian Obat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/riwayat/tambah_obat">Penambahan Obat</a></li>
                <li id="current"><a href="<?php echo $this->base_url ?>index.php/riwayat/resep">Resep</a></li>

            </ul>


        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div class="container_12">
    <div style="border: 0px solid fuchsia; width: 777px; height: auto;padding: 8px; ">
        <a href="<?php echo $this->base_url ?>index.php/riwayat/resep" class="kotak" style="color:#000;"><img src="<?php echo $this->base_url ?>Template_files/loket_pen.png" border="0"/> Riwayat Resep</a>
        <div class="module" style="width: 356px ; float:right;">
            <h2><span>Pilih tanggal !</span></h2>
            <form method="post" onsubmit="if(document.getElementById('tanggal').value != '') return confirm('Apakah anda yakin ingin membuat laporan tanggal ' + document.getElementById('tanggal').value + '?'); else return false;">
                <div class="module-table-body">
                    <table>
                        <tr>
                            <td width="250px">
                                <input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal" class="tanggal input-long">
                            </td>
                            <td>
                                <input type="submit" class="submit-green" value="PILIH">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <div style="clear: both;"></div>
    <?php if ($hasil) {
    ?>
        <div class="module" style="width: 380px ;">
            <h2><span><?php echo $alert; ?></span></h2>
            <div class="module-table-body">
                <table>
                    <thead>
                        <tr>
                            <th style="width:30%">no kunjungan</th>
                            <th style="width:50%">nama</th>
                            <th style="width:20%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hasil as $hasil) {
                    ?>
                        <tr>
                            <td><?php echo $hasil['no_kunjungan']; ?></td>
                            <td><?php echo $hasil['nama_pasien']; ?></td>
                            <td><a class="popup" href="<?php echo $this->base_url ?>index.php/riwayat/isi_resep/<?php echo $hasil['id_pasien']; ?>/<?php echo $hasil['tanggal']; ?>">
                                    <input type="submit" value="Lihat Resep" /></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php } else if (isset($alert)) {
    ?>
    <?php echo $alert; ?>
    <?php } ?>
</div>

<div style="clear: both;"></div>

</div> <!-- End .grid_12 -->


<!-- Footer -->
<div id="footer">
    <div class="container_12">
        <div class="grid_12">
            <p>&copy; 2011. Siemas.</p>
        </div>
    </div>
    <div style="clear:both;"></div>
</div> <!-- End #footer -->
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $(".popup").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%", onComplete: function(){
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            }
        });
    });
</script>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

