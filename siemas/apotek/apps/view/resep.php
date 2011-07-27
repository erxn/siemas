<?php $this->view_header();?>

<!-- Date Picker stylesheet -->
                <link rel="stylesheet" type="text/css" href="<?php echo $this->base_url?>js/jquery-ui/css/redmond/jquery-ui-1.7.3.custom.css" media="screen" />
        <!-- JQuery Date Picker Script -->
                <script language="JavaScript" type="text/javascript" src="<?php echo $this->base_url?>js/jquery-ui/js/jquery-1.3.2.min.js"></script>
                <script language="JavaScript" type="text/javascript" src="<?php echo $this->base_url?>js/jquery-ui/js/jquery-ui-1.7.3.custom.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $( "#tanggal" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd-mm-yy'
                });
            });
</script>

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
						<a href="<?php echo $this->base_url?>index.php/resep">
						<img src="<?php echo $this->base_url?>Template_files/images/resep.png" alt="member" width="50px" height="50px"/></a>
						<span id="current"><a href="<?php echo $this->base_url?>index.php/resep">
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
						<div id="resep">
							<form method="post">
								<form method="POST"
                        onsubmit="if(document.getElementById('antrian').value == '') {alert('No Antrian Harus Diisi'); return false} " id="form_resep" >Tanggal resep yang akan diinputkan adalah
                                                                <input id="tanggal" type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal">
								
								
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
						<td width="300px">
							<input type="text" class="input_angka" id="antrian" name="antrian"  maxlength="255" size="30">
						</td>
					</tr>
                                        
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
						<?php echo $verify; ?></td>
					</tr>
                                        
				</table>
                    <div class="module" style="width: 473px ;">
                    <h2><span>Data Obat</span></h2>

                    <div class="module-table-body">
                            <table><?php $n=1; ?>
                                        <thead>
					<tr>
						<th width="25%" class="align-center">
							id obat
						</th>
						<th width="50%" class="align-center">
							nama obat
						</th>
						<th width="25%" class="align-center">
							jumlah
						</th>
					</tr>
                                        </thead>
					<tr>
                                            <td class="align-center"><input type="text" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
                                        </tr>
					<tr>
                                            <td class="align-center"><input type="text" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
					<tr>
                                            <td class="align-center"><input type="text" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
					<tr>
                                            <td class="align-center"><input type="text" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
					<tr>
                                            <td></td>
                                            <td class="align-center"><input class="submit-green" type="submit" value="Benar"</td>
                                            <td></td>
					</tr>

				</table>
                                 </div></div>
                    </form>

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

        <script type="text/javascript">

    $(document).ready(function(){

        $('#form_obat').validity(function(){

           $('.input_angka').match('number');

        });

        $.validity.setup({ outputMode:"modal" });


    });


</script>
</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

