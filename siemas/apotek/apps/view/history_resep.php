<?php $this->view_header_history();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">

                            
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

                            <form method="post" onsubmit="if(document.getElementById('tanggal').value != '') return confirm('Apakah anda yakin ingin membuat laporan tanggal ' + document.getElementById('tanggal').value + '?'); else return false;">
                    <table>
					<tr>
						<td width="100px">
						<p style="font-size:13px;">Pilih tanggal :</p>
						</td>
						<td width="100px">
							<input type="text" maxlength="255" value="<?php echo $tanggal; ?>" name="tanggal" class="tanggal">
						</td>
						<td> &nbsp &nbsp &nbsp
							<input type="submit" class="submit-green" value="PILIH">
						</td>
					</tr>
					</table>
					</form>
                    <?php if($hasil) {   ?>
                        <?php echo $alert; ?>
                        <br />
                        <br />
                        <div class="module" style="width: 377px ;">
                        <div class="module-table-body">
                        <table id="myTable" class="tablesorter" >
                        	<thead>
                                <tr>
                                    <th style="width:30%">no kunjungan</th>
                                    <th style="width:50%">nama</th>
                                    <th style="width:20%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hasil as $hasil) { ?>
                                <tr>
                                    <td><?php echo $hasil['no_kunjungan'] ; ?></td>
                                    <td><?php echo $hasil['nama_pasien'] ; ?></td>
                                    <td><a class="popup" href="<?php echo $this->base_url?>index.php/history/isi_resep/<?php echo $hasil['id_pasien'] ; ?>/<?php echo $hasil['tanggal'] ; ?>">
                                            <input type="submit" value="Lihat Resep" /></a></td>
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
<script type="text/javascript">
            $(document).ready(function(){
                $(".popup").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%", onComplete: function(){
                        $( "#datepicker" ).datepicker({
                            changeMonth: true,
                            changeYear: true
                        });
                    }
                });
            });
        </script>
</html>
<!-- This document originaly created by R Bagus Dimas Putra r4yv1n@yahoo.com -->

