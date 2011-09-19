<?php $this->view_header();?>

<!-- Header. Main part -->

            <div id="header-main">
					<div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                <li><a href="<?php echo $this->base_url?>index.php/Beranda">Beranda</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/riwayat">Riwayat</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/obat">Obat</a></li>
                                <li id="current""><a href="<?php echo $this->base_url?>index.php/kadaluarsa">Kadaluarsa
                                    <?php if($jumlah_kadaluarsa > 0) { ?>
                                    <div style="display: inline-block; padding: 0px 3px !important; background: red; color: white; font-weight: bold; margin-left: 5px; -moz-border-radius: 5px">
                                    <?php echo $jumlah_kadaluarsa ?>
                                    </div>
                                    <?php } ?>
                                </a></li>
				<li><a href="<?php echo $this->base_url?>index.php/statistik">Statistik</a></li>
                            </ul>
                    <div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/resep">
						<img src="<?php echo $this->base_url?>Template_files/images/resep.png" alt="member" width="50px" height="50px"/></a>
						<span><a href="<?php echo $this->base_url?>index.php/resep">
						Resep</a></span>
					</div>
					<div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/tambah_obat">
						<img src="<?php echo $this->base_url?>Template_files/images/tambah_obat.png" alt="member" width="50px" height="50px"/></a>
						<span><a href="<?php echo $this->base_url?>index.php/tambah_obat">
						Tambah Obat</a></span>
					</div>
					<div class="iconMenu">
						<a href="<?php echo $this->base_url?>index.php/laporan">
						<img src="<?php echo $this->base_url?>Template_files/images/laporan.png" alt="member" width="50px" height="50px"/></a>
						<span ><a href="<?php echo $this->base_url?>index.php/laporan">
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
                    <div style="clear: both;"></div>
                        <div class="module" style="width: 533px ;">
                            <h2><span>Informasi Obat Kadaluarsa</span></h2>
                        <div class="module-table-body">
                        <?php if($hasil) {   ?>
                        <table >
                        	<thead>
                                <tr>
                                    <th style="width:35%">Tanggal Input Obat</th>
                                    <th style="width:20%">No SBKK</th>
                                    <th style="width:35%">Jumlah jenis obat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n='1'; foreach ($hasil as $hasil3) { ?>
                                <tr>
                                    <td><?php echo $hasil3->tanggal ; ?></td>
                                    <td><?php echo $hasil3->no_sbkk ; ?></td>
                                    <td><?php echo $hasil3->jumlahnya ; ?></td>
                                    <td><a class="popup" href="<?php echo $this->base_url?>index.php/kadaluarsa/lihat_obat/<?php echo $hasil3->tanggal ; ?>/<?php echo $hasil3->no_sbkk ; ?>">
                                            <input type="submit" value="Lihat Obat" /></a></td>
                                </tr>
                                
                                <?php $n++; } ?>
                                <tr>
                                    <td></td>
                                    <td><b>Total :</b></td>
                                    <td><?php echo $jumlah_kadaluarsa ; ?></td>
                                    <td><a class="popup" href="<?php echo $this->base_url?>index.php/kadaluarsa/lihat_obat_total">
                                            <input type="submit" value="Lihat Obat" /></a></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } else if(isset ($alert)) { ?>
                            <h3 style="color:green; margin-left: 17px;">
                                <?php echo $alert; ?>
                            </h3>
                    <?php } ?>
                        </div></div>

                

		</div> <!-- End .grid_12 -->

                <div style="clear: both;"></div>
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
                $(".popup").colorbox({initialHeight: "1000px", initialWidth: "900px", width: "55%", height: "75%", onComplete: function(){
                        $( "#datepicker" ).datepicker({
                            changeMonth: true,
                            changeYear: true
                        });
                    }
                });
            });
        </script>

</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

