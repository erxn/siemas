<?php $this->view_header_history(); ?>
<!-- Sub navigation -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
            <ul style="margin-left: 50px;">


                <li id="current"><a href="<?php echo $this->base_url ?>index.php/riwayat/pemakaian_obat">Pemakaian Obat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/riwayat/tambah_obat">Penambahan Obat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/riwayat/resep">Resep</a></li>

            </ul>


        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div class="container_12">
    <div style="border: 0px solid fuchsia; width: 777px; height: auto;padding: 8px; ">
        <a href="<?php echo $this->base_url ?>index.php/riwayat/resep" class="kotak" style="color:#000;"><img src="<?php echo $this->base_url ?>Template_files/loket_pen.png" border="0"/> Riwayat Pemakaian Obat</a>
        <div class="module" style="width: 356px ; float:right;">
            <h2><span>Pilih berdasarkan bulan dan tahun !</span></h2>
            <form method="post"
                  onsubmit="if((document.getElementById('bulan').value != 'Pilih Bulan')&&(document.getElementById('tahun').value != 'Pilih tahun'))
                      return confirm('Apakah anda yakin ingin melihat Riwayat bulan ' + nama_bulan[document.getElementById('bulan').value]
                          + ' tahun ' + document.getElementById('tahun').value + '?'); else return false;">
                <div class="module-table-body">
                    <table>
                        <tr>
                            <td width="120px">
                                <select name="bulan" id="bulan" style="width:100px;">
                                    <option selected="selected">Pilih Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </td>
                            <td width="120px">
                                <select name="tahun" id="tahun" style="width:100px;">
                                    <option selected="selected">Pilih tahun</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="submit-green" value="PILIH">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <br /><br />
        <div class="module" style="width: 356px ; float:right;">
            <h2><span>Pilih berdasarkan tanggal !</span></h2>
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
        <?php if (isset($hasil)) {
        ?>
            <div class="module" style="width: 380px ;">
                <h2><span><?php echo $alert; ?></span></h2>
                <div class="module-table-body">
                    <table >
                        <thead>
                            <tr>
                                <th>unit pelayanan</th>
                                <th style="width:80px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($hasil as $hasilnya) {
                        ?>
                            <tr>
                                <td><?php echo $hasilnya->poli; ?></td>
                                <td><a class="popup" href="<?php echo $this->base_url ?>index.php/riwayat/isi_pemakaian/<?php echo str_replace(" ", "_", $hasilnya->poli); ?>/<?php echo $tanggal2; ?>">
                                        <input type="submit" value="Lihat Obat" /></a></td>
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



        <?php if (isset($hasil2)) {
        ?>
        <?php echo $alert2; ?>
        <?php foreach ($hasil2 as $hasilnya) {
        ?>
                            <div class="module" style="width: 350px ; margin-right: 37px;">
                                <h2><span><?php echo $hasilnya['tanggal']; ?></span></h2>
                                <div class="module-table-body">
                                    <br />
                                    <table >
                                        <thead>
                                            <tr>
                                                <th>unit pelayanan</th>
                                                <th style="width:80px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php foreach ($hasilnya['poli'] as $list) {
                        ?>
                                <tr>
                                    <td><?php echo $list->poli; ?></td>
                                    <td><a class="popup" href="<?php echo $this->base_url ?>index.php/riwayat/isi_pemakaian/<?php echo str_replace(" ", "_", $list->poli); ?>/<?php echo $hasilnya['tanggal2']; ?>">
                                            <input type="submit" value="Lihat Obat" /></a></td>
                                </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
        <?php } else if (isset($alert2)) {
        ?>
        <?php echo $alert2; ?>
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

