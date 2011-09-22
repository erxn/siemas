<?php $this->view_header_laporan(); ?>
<!-- Sub navigation -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul style="margin-left: 677px;">

                <li><a href="<?php echo $this->base_url ?>index.php/laporan/tahunan">Tahunan</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/laporan/bulanan">Bulanan</a></li>
                <li id="current"><a href="<?php echo $this->base_url ?>index.php/laporan/harian">Harian</a></li>
            </ul>


        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div><div>
        <div class="container_12">
            <div style="border: 0px solid fuchsia; width: 777px; height: auto;padding: 8px; ">
                <a href="#" class="kotak" style="color:#000;"><img src="<?php echo $this->base_url ?>Template_files/loket_pen.png" border="0"/> Laporan Harian</a>
                <div class="module" style="width: 390px ; float:right;">
                    <h2><span>Pilih tanggal !</span></h2>

                    <form method="post" onsubmit="if(document.getElementById('tanggal').value != '') return confirm('Apakah anda yakin ingin membuat laporan tanggal ' + document.getElementById('tanggal').value + '?');
                        else return false;">
                        <div class="module-table-body">
                            <table>
                                <tr>
                                    <td width="250px">
                                        <input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal" class="tanggal input-long">

                                    </td>
                                    <td>
                                        <img src="<?php echo $this->base_url ?>Template_files/ms-excel.png" alt=""/>&nbsp;<input type="submit" class="submit-green" value="Simpan">
                                    </td>
                                </tr>
                                <tr>
                                    <?php
                                    if (isset($alert)) {
                                        echo $alert;
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- End .grid_12 -->
    </div></div>
<div style="clear: both;"></div>
<!-- Footer -->
<div id="footer">
    <div class="container_12">
        <div class="grid_12">
            <!-- You can change the copyright line for your own -->
            <p>&copy; 2011. Siemas.</p>
        </div>
    </div>
    <div style="clear:both;"></div>
</div> <!-- End #footer -->
</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->
