<?php $this->view_header_laporan();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
							
							<li><a href="<?php echo $this->base_url?>index.php/laporan/pemakaian">Pemakaian Obat</a></li>
							<li><a href="<?php echo $this->base_url?>index.php/laporan/pemasukan">Pemasukan Obat</a></li>
							<li><a href="<?php echo $this->base_url?>index.php/laporan/tahunan">Tahunan</a></li>
							<li><a href="<?php echo $this->base_url?>index.php/laporan/bulanan">Bulanan</a></li>
							<li id="current"><a href="<?php echo $this->base_url?>index.php/laporan/harian">Harian</a></li>
						</ul>
							
							              
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">
		
					<form method="post" onsubmit="if(document.getElementById('tanggal').value != '') return confirm('Apakah anda yakin ingin membuat laporan tanggal ' + document.getElementById('tanggal').value + '?'); else return false;">
                    <table>
					<tr>
						<td width="100px">
							Pilih tanggal :
						</td>
						<td width="100px">
							<input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal" id="tanggal">
						</td>
						<td> &nbsp &nbsp &nbsp
							<input type="submit" class="submit-green" value="PILIH">
						</td>
					</tr>
					</table>
					
					
					</form>
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
