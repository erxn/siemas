<?php $this->view_header(); ?>

<!-- Header. Main part -->

<div id="header-main">
    <div class="container_12">
        <div class="grid_12">
            <ul id="nav">
                <li><a href="<?php echo $this->base_url ?>index.php/Beranda">Beranda</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/riwayat">Riwayat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/obat">Obat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/kadaluarsa">Kadaluarsa
                        <?php if ($jumlah_kadaluarsa > 0) {
 ?>
                            <div style="display: inline-block; padding: 0px 3px !important; background: red; color: white; font-weight: bold; margin-left: 5px; -moz-border-radius: 5px">
<?php echo $jumlah_kadaluarsa ?>
                        </div>
<?php } ?>
                    </a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/statistik">Statistik</a></li>
            </ul>
            <div class="iconMenu">
                <a href="<?php echo $this->base_url ?>index.php/resep">
                    <img src="<?php echo $this->base_url ?>Template_files/images/resep.png" alt="member" width="50px" height="50px"/></a>
                <span><a href="<?php echo $this->base_url ?>index.php/resep">
						Resep</a></span>
            </div>
            <div class="iconMenu">
                <a href="<?php echo $this->base_url ?>index.php/tambah_obat">
                    <img src="<?php echo $this->base_url ?>Template_files/images/tambah_obat.png" alt="member" width="50px" height="50px"/></a>
                <span id="current"><a href="<?php echo $this->base_url ?>index.php/tambah_obat">
						Tambah Obat</a></span>
            </div>
            <div class="iconMenu">
                <a href="<?php echo $this->base_url ?>index.php/laporan">
                    <img src="<?php echo $this->base_url ?>Template_files/images/laporan.png" alt="member" width="50px" height="50px"/></a>
                <span><a href="<?php echo $this->base_url ?>index.php/laporan">
						Laporan</a></span>
            </div>
        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
</div> <!-- End #header-main -->
<!-- Sub navigation -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div class="container_12">
    <form method="POST"
          onsubmit="if(document.getElementById('sbkk').value == '') {alert('No SBKK Harus Diisi'); return false} " id="form_obat" >
        <table>
            <tr>
                <td width="100px">
                    <p align="right">No SBKK :</p>
                </td>
                <td width="220px">
                    <input type="text" class=" input-long" maxlength="255" name="no_sbkk" id="sbkk">
                </td>
            </tr>
            <tr>
                <td>
                    <p align="right">Tanggal :</p>
                </td>
                <td>
                    <input type="text" maxlength="255" name="tanggal" class="tanggal input-long" value="<?php echo $tanggal; ?>">
                </td>
            </tr>
        </table>
        <div style="clear: both"></div>
        <?php if ($verify) {
 ?>
<?php echo $verify; ?>
<?php } ?>
                        <div style="clear: both"></div>
                        <!-- Example table -->
                        <div class="module" style="width: 933px ;">
                            <h2><span>Data Obat</span></h2>

                            <div class="module-table-body">
                                <table >
                                    <thead>
                                        <tr>
                                            <th style="width:7%">ID Obat</th>
                                            <th style="width:28%">Nama Obat</th>
                                            <th style="width:8%">Satuan</th>
                                            <th style="width:7%">Jumlah</th>
                                            <th style="width:17%">Kadaluarsa</th>
                                            <th style="width:13%">No Batch</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $n = 1;
                        foreach ($list as $list) { ?>
                            <tr>
                                <td class="align-center"><?php echo $list->id_obat; ?></td>
                                <td><?php echo $list->nbk_obat; ?></td>
                                <td><?php echo $list->satuan_obat; ?></td>
                                <td><input  class="input_angka input-long" type="text"  id="field_0_<?php echo $n - 1 ?>" name="tambah[<?php echo $n ?>]" maxlength="255" size="10px"
                                            ></td>
                                <td><input type="text" class="tanggal input-long" name="kadaluarsa[<?php echo $n ?>]" value="<?php echo $tanggal; ?>"></td>
                                <td><input type="text" class=" input-long"  id="field_1_<?php echo $n - 1 ?>" name="no_batch[<?php echo $n ?>]" maxlength="255" size="20px"></td>
                            </tr>
<?php $n++;
                        } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input class="submit-green" type="submit" value="Tambah"</td>
                        </tr>
                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->
    </form>
    <div style="clear: both"></div>
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

<script type="text/javascript">

    $(document).ready(function(){

        $('#form_obat').validity(function(){

            $('.input_angka').match('number');
            $( "#tanggal" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd-mm-yy'
            });

        });

        $.validity.setup({ outputMode:"modal" });


    });


</script>


</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->
