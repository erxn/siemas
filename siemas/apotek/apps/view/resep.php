<?php $this->view_header();?>

<!-- Header. Main part -->
			
            <div id="header-main">
					<div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                <li><a href="<?php echo $this->base_url?>index.php/home">Home</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/history">History</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/obat">Obat</a></li>
                                <li><a href="<?php echo $this->base_url?>index.php/kadaluarsa">Kadaluarsa
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
                        <FORM method="POST">
                         Tanggal resep yang akan diinputkan adalah
                           <input class="tanggal" type="text" class="" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal2">
                           <input type="submit" value="Ubah" />
                        </FORM>
                    </div>
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">

                    <form method="POST"
                        onsubmit="if(document.getElementById('kunjungan').value == '') {alert('No kunjungan Harus Diisi'); return false} " id="form_resep" >
                    
                    <table>
					<tr>
						<td width="100px">
							<p align="left" style="margin-bottom: 5px;">No kunjungan :</p>
						</td>
						<td width="300px">
							<input type="text" class="input_angka ido2 input-long" id="kunjungan" name="kunjungan"  maxlength="255" size="30">
						</td>
					</tr>
                                        <tr>
						<td width="100px">
							<p align="left" style="margin-bottom: 5px;">Nama pasien :</p>
						</td>
						<td width="300px">
							<input type="text" class="input_angka input-long" id="kunjungan" name="kunjungan"  maxlength="255" size="30" disabled="disabled" />
						</td>
					</tr>
                                        
                                        <tr>
                                            <td>
                                                <input type="hidden" class="input_angka input-long" name="tanggal"  value="<?php echo $tanggal; ?>">
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
							ID obat
						</th>
						<th width="50%" class="align-center">
							Nama obat
						</th>
						<th width="27%" class="align-center">
							Jumlah
						</th>
					</tr>
                                  </thead>

                                  <tbody>
                                      <?php for($n=1; $n<=50; $n++){ ?>
					<tr id="tr_<?php echo $n; ?>" <?php if($n > 6) echo 'style="display:none"' ?>>
                                            <td class="align-center"><input type="text" class="ido input-long" name="id_obat[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                            <td class="align-center"><input type="text" class="autocomplete input-long" name="nama_obat[<?php echo $n; ?>]" maxlength="255" size="30"></td>
                                            <td class="align-center"><input type="text" class="input-long" name="jumlah[<?php echo $n; ?>]" maxlength="255" size="10"></td>
                                        </tr>
                                      <?php } ?>
                                  </tbody>
                                  <tfoot>
					<tr>
                                            <td></td>
                                            <td class="align-center"><input class="submit-green" type="submit" value="Simpan"</td>
                                            <td><a href="#" class="button" onclick="tabelFleksibel(); return false;">
                    <span><img src="<?php echo $this->base_url?>Template_files/plus-sma.gif" width="12" height="9" alt="" style="padding:10px 0 0 0;"/> Tambah data</span>
                </a></td>
					</tr>
                                  </tfoot>

				</table>
                    </form>
                            </div>
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

        <script type="text/javascript">

            var x = 7;

            function tabelFleksibel() {

                $('#tr_' + x).fadeIn();
                x++;

            }

            var arrayObat = new Array();
                <?php if(isset($list_nama_obat)){ foreach ($list_nama_obat as $list) { ?>
                    arrayObat[<?php echo $list->id_obat; ?>] = "<?php echo $list->nbk_obat; ?>";
                <?php } } ?>

            var arrayPasien = new Array();
                <?php if(isset($kunjungan_pasien)){ foreach ($kunjungan_pasien as $list) { ?>
                    arrayPasien[<?php echo $list->no_kunjungan; ?>] = "<?php echo $list->nama_pasien; ?>";
                <?php } } ?>

            $('.ido').keyup(function(){

              var id_obat = $(this).val();
              $(this).parent('td').next().find('input').val(arrayObat[id_obat]);

            })

            $('.ido2').keyup(function(){

              var id_pasien = $(this).val();
              $(this).parent('td').parent('tr').next().find('input').val(arrayPasien[id_pasien]);

            })

            function aktifinAutokomplit() {
                $(".autocomplete").autocomplete({
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
            }


        $(document).ready(function(){
            aktifinAutokomplit();
        });

        

</script>

</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

