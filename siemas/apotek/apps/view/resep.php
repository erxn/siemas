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
                                                                <input class="tanggal" type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal">
								
								
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
                            <table id="resep"><?php $n=1; ?>
                                 <thead>
					<tr>
						<th width="23%" class="align-center">
							id obat
						</th>
						<th width="50%" class="align-center">
							nama obat
						</th>
						<th width="27%" class="align-center">
							jumlah
						</th>
					</tr>
                                  </thead>

                                  <tbody>
					<tr>
                                            <td class="align-center"><input type="text" class="ido" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" class="autocomplete" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
                                        </tr>
					<tr>
                                            <td class="align-center"><input type="text" class="ido" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" class="autocomplete" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
					<tr>
                                            <td class="align-center"><input type="text" class="ido" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" class="autocomplete" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
					<tr>
                                            <td class="align-center"><input type="text" class="ido" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" class="autocomplete" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <?php $n++; ?>
					</tr>
                                  </tbody>
                                  <tfoot>
					<tr>
                                            <td></td>
                                            <td class="align-center"><input class="submit-green" type="submit" value="Benar"</td>
                                            <td><a href="#" class="button" onclick="tabelFleksibel(); return false;">
                    <span><img src="<?php echo $this->base_url?>template_files/plus-sma.gif" width="12" height="9" alt="" style="padding:10px 0 0 0;"/> Tambah data</span>
                </a></td>
					</tr>
                                  </tfoot>

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

            function tabelFleksibel() {
                $('#resep tbody>tr:last').clone(true).insertAfter('#resep tbody>tr:last');
                $('#resep tbody>tr:last input').val('');
                $('#resep tbody>tr:last input').first().focus();
            }

            var arrayObat = new Array();
                <?php if(isset($list_nama_obat)){ foreach ($list_nama_obat as $list) { ?>
                    arrayObat[<?php echo $list->id_obat; ?>] = "<?php echo $list->nbk_obat; ?>";
                <?php } } ?>

            $('.ido').keyup(function(){

              var id_obat = $(this).val();
              $(this).parent('td').next().find('input').val(arrayObat[id_obat]);

            })


        $(document).ready(function()
            {$("input.autocomplete").autocomplete({
			source: [
                        <?php if(isset($list_nama_obat)){ foreach ($list_nama_obat as $list) { ?>
			{"value":"<?php echo $list->nbk_obat; ?>","id":"<?php echo $list->id_obat; ?>"},
                        <?php } } ?>
                        {}
                        ],
                	select: function( event, ui ) {
				var nama_obat = ui.item.value;
                                var id_obat = ui.item.id;

                                $(this).parent('td').prev().find('input').val(id_obat);
                        },
                        delay: 0
            });
        });

        

</script>

</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

