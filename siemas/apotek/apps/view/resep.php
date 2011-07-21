<?php $this->view_header();?>

<!-- Header. Main part -->
			
            <div id="header-main">
					<div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                <li><a href="<?php echo $this->base_url?>index.php/home">Home</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/history">History</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/obat">Obat</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/kadaluarsa">Kadaluarsa</a></li>
				<li><a href="<?php echo $this->base_url?>index.php/statistik">Statistik</a></li>
                            </ul>
                    <div class="iconMenu">
						<a href="resep">
						<img src="<?php echo $this->base_url?>Template_files/images/resep.png" alt="member" width="50px" height="50px"/></a>
						<span id="current"><a href="resep">
						Resep</a></span>
					</div>
					<div class="iconMenu">
						<a href="tambah_obat">
						<img src="<?php echo $this->base_url?>Template_files/images/tambah_obat.png" alt="member" width="50px" height="50px"/></a>
						<span><a href="tambah_obat">
						Tambah Obat</a></span>
					</div>
					<div class="iconMenu">
						<a href="laporan">
						<img src="<?php echo $this->base_url?>Template_files/images/laporan.png" alt="member" width="50px" height="50px"/></a>
						<span ><a href="laporan">
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
						<div id="resep">
							<form method="post">
								Tanggal resep yang akan diinputkan adalah
								<input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal">
								<input type="submit" value="ubah">
							</form>		
						</div>
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">

                    <table>
					<tr>
						<td width="75px">
							<p align="right">no antrian :</p>
						</td>
						<td width="100px">
							<input type="text" maxlength="255" size="30">
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td width="30px">
							<p align="center">id obat</p>
						</td>
						<td width="100px">
							<p align="center">nama obat</p>
						</td>
						<td width="30px">
							<p align="center">jumlah</p>
						</td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
					<tr>
						<td><input type="text" maxlength="255" size="10"></td>
						<td><input type="text" maxlength="255" size="30"></td>
						<td><input type="text" maxlength="255" size="10"></td>
					</tr>
				</table>

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
