<?php $this->view_header_obat();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">

                            <li><a href="<?php echo $this->base_url?>index.php/obat/pemakaian_narkotik">Pemakaian Narkotik</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/obat/Kadaluarsa">Kadaluarsa</a></li>
                            <li id="current"><a href="<?php echo $this->base_url?>index.php/obat/pemakaian_obat">Pemakaian Obat</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/obat">Daftar Obat</a></li>

                        </ul>


                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

		<div class="container_12">

                        <table>
					<tr>
						<td width="100px">
							<p align="right">Tanggal :</p>
						</td>
						<td width="120px">
							<input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal">
						</td>
					</tr>

                                        <tr>
						<td>
							<p align="right">Unit Pelayanan :</p>
						</td>
						<td>
                                                    <select name="layanan" style="width:150px;">
                                                        <option selected="selected">Pilih Unit</option>
                                                        <option value="umum">Umum</option>
                                                        <option value="gigi">Gigi</option>
                                                        <option value="kia">KIA</option>
                                                        <option value="lab">Laboratorium</option>
                                                        <option value="radiologi">Radiologi</option>
                                                        <option value="lainnya">Lainnya</option>
                                                    </select>
						</td>
					</tr>

                                        <tr>
						<td style="vertical-align: top">
							<p align="right">Keterangan :</p>
						</td>
						<td>
							<textarea name="keterangan" rows="3"></textarea>
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

