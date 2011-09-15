<?php $this->view_header_history();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">

                            
                            <li><a href="<?php echo $this->base_url?>index.php/history/pemakaian_obat">Pemakaian Obat</a></li>
                            <li id="current"><a href="<?php echo $this->base_url?>index.php/history/tambah_obat">Tambah Obat</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/resep">Resep</a></li>

                        </ul>


                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

		<div class="container_12">

                   <form method="post">
                                <table>
					<tr>
						<td width="120px">
                                                    <select name="bulan" id="bulan" style="width:100px;">
                                                        <option selected="selected">Pilih Bulan</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
						</td>
						<td width="120px">
							<select name="tahun" id="tahun" style="width:100px;">
                                                        <option selected="selected">Pilih tahun</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                    </select>
						</td>
						<td>
							<input type="submit" class="submit-green" value="PILIH">
						</td>
					</tr>
					</table>

					</form>


                    <?php if($hasil) {   ?>
                        <div class="module" style="width: 333px ;">
                        <div class="module-table-body">
                        <table id="myTable" class="tablesorter" >
                        	<thead>
                                <tr>
                                    <th style="width:40%">Tanggal</th>
                                    <th style="width:40%">No SBKK</th>
                                    <th style="width:20%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hasil as $hasil) { ?>
                                <tr>
                                    <td><?php echo $hasil->tanggal ; ?></td>
                                    <td><?php echo $hasil->no_sbkk ; ?></td>
                                    <td><a class="popup" href="<?php echo $this->base_url?>index.php/history/lihat_isi_pemasukan/<?php echo $hasil->tanggal ; ?>/<?php echo $hasil->no_sbkk ; ?>">
                                            <input type="submit" value="Lihat Obat" /></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table></div></div>
                    <?php } else if(isset ($alert)) { ?>
                                <?php echo $alert; ?>
                    <?php } ?>
					


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

