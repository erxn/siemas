<?php $this->view_header(); ?>

<!-- Header. Main part -->

<div id="header-main">
    <div class="container_12">
        <div class="grid_12">
            <ul id="nav">
                <li><a href="<?php echo $this->base_url ?>index.php/home">Home</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/history">History</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/obat">Obat</a></li>
                <li><a href="<?php echo $this->base_url ?>index.php/kadaluarsa">Kadaluarsa</a></li>
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

        <div style="clear: both;"></div>

    </div><!-- End. .container_12 -->
</div> <!-- End #header-main -->
<div style="clear: both;"></div>
</div> <!-- End #header -->

<div class="container_12">
    <form method="POST"
          onsubmit="if(document.getElementById('sbkk').value == '') {alert('No SBKK Harus Diisi'); return false} " id="form_obat" >
        <table>
            <tr>
                <td width="100px">
                    <p align="right">No SBKK :</p>
                </td>
                <td width="120px">
                    <input type="text" maxlength="255" name="no_sbkk" id="sbkk">
                </td>
            </tr>
            <tr>
                <td>
                    <p align="right">Tanggal :</p>
                </td>
                <td>
                    <input type="text" maxlength="255" name="tanggal" class="tanggal" value="<?php echo $tanggal; ?>">
                </td>
            </tr>
        </table>

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
                                <td><input  class="input_angka" type="text"  id="field_0_<?php echo $n - 1 ?>" name="tambah[<?php echo $n ?>]" maxlength="255" size="10px"
                                           ></td>
                                <td><input type="text" name="date" class="tanggal" value="<?php echo $tanggal; ?>"></td>
                                <td><input type="text"  id="field_1_<?php echo $n - 1 ?>" name="no_batch[<?php echo $n ?>]" maxlength="255" size="20px"></td>
                            </tr>
<?php $n++;
                        } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input class="submit-gray" type="submit" value="Tambah"</td>
                        </tr>
                    </tbody>
                </table>
                </form>
                <div class="pager" id="pager">
                    <form action="">
                        <div>
                            <img class="first" src="<?php echo $this->base_url ?>Template_files/arrow-st.gif" alt="first"/>
                            <img class="prev" src="<?php echo $this->base_url ?>Template_files/arrow-18.gif" alt="prev"/>
                            <input type="text" class="pagedisplay input-short align-center"/>
                            <img class="next" src="<?php echo $this->base_url ?>Template_files/arrow000.gif" alt="next"/>
                            <img class="last" src="<?php echo $this->base_url ?>Template_files/arrow-su.gif" alt="last"/>
                            <select class="pagesize input-short align-center">
                                <option value="<?php echo ($jumlah + 1) ?>">Semua</option>
                                <option value="10" selected="selected">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->
        </div> <!-- End .module -->

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
