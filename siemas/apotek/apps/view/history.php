<?php $this->view_header();?>

<!-- Header. Main part -->

            <div id="header-main">
					<div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                <li><a href="">Home</a></li>
                                <li id="current"><a href="<?php echo $this->base_url?>index.php/history">History</a></li>
                                <li><a href="">Obat</a></li>
                                <li><a href="">Kadaluarsa</a></li>
				<li><a href="">Statistik</a></li>
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
						<span><a href="<?php echo $this->base_url?>index.php/laporan">
						Laporan</a></span>
					</div>
                    </div><!-- End. .grid_12-->

                    <div style="clear: both;"></div>

                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>

            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">
                            
                            <li><a href="<?php echo $this->base_url?>index.php/history/Kadaluarsa">Kadaluarsa</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/pemakaian_obat">Pemakaian Obat</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/tambah_obat">Tambah Obat</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/resep">Resep</a></li>

                        </ul>


                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

		<div class="container_12">

                    <ul>

			<li><a href="<?php echo $this->base_url?>index.php/history/resep">Resep</a></li>
                        <li><a href="<?php echo $this->base_url?>index.php/history/tambah_obat">Tambah Obat</a></li>
                        <li><a href="<?php echo $this->base_url?>index.php/history/pemakaian_obat">Pemakaian Obat</a></li>
			<li><a href="<?php echo $this->base_url?>index.php/history/Kadaluarsa">Kadaluarsa</a></li>

			</ul>

                        <div style="clear: both;"></div>

			</div> <!-- End .grid_12 -->


        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2009. Magic Admin.</p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
