<?php $this->view_header_history();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">

                            <li><a href="<?php echo $this->base_url?>index.php/history/Kadaluarsa">Kadaluarsa</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/pemakaian_obat">Pemakaian Obat</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/history/tambah_obat">Tambah Obat</a></li>
                            <li id="current"><a href="<?php echo $this->base_url?>index.php/history/resep">Resep</a></li>

                        </ul>


                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

		<div class="container_12">

                   <form method="post"
                                              onsubmit="if((document.getElementById('bulan').value != 'Pilih Bulan')&&(document.getElementById('tahun').value != 'Pilih tahun'))
                                                        return confirm('Apakah anda yakin ingin membuat laporan bulan ' + document.getElementById('bulan').value
                                                        + ' tahun ' + document.getElementById('tahun').value + '?'); else return false;">
                                <table>
					<tr>
						<td width="120px">
                                                    <select name="bulan" id="bulan" style="width:100px;">
                                                        <option selected="selected">Pilih Bulan</option>
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
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

                                        <br /> <br />
                            <form method="post" onsubmit="if(document.getElementById('tanggal').value != '') return confirm('Apakah anda yakin ingin membuat laporan tanggal ' + document.getElementById('tanggal').value + '?'); else return false;">
                    <table>
					<tr>
						<td width="100px">
						<p style="font-size:13px;">Pilih tanggal :</p>
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
                    <?php if(isset($hasil)) {   ?>
                        <div class="module" style="width: 333px ;">
                        <div class="module-table-body">
                        <table id="myTable" class="tablesorter" >
                        	<thead>
                                <tr>
                                    <th style="width:40%">Tanggal</th>
                                    <th style="width:60%">No SBKK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hasil as $hasil) { ?>
                                <tr>
                                    <td><?php echo $hasil['tanggal'] ; ?></td>
                                    <td><?php echo $hasil['no_sbkk'] ; ?></td>
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
	</body>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->
