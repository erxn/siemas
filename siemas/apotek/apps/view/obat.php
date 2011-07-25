<?php $this->view_header_obat();?>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul style="margin-left: 50px;">

                            <li><a href="<?php echo $this->base_url?>index.php/obat/pemakaian_narkotik">Pemakaian Narkotik</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/obat/Kadaluarsa">Kadaluarsa</a></li>
                            <li><a href="<?php echo $this->base_url?>index.php/obat/pemakaian_obat">Pemakaian Obat</a></li>
                            <li id="current"><a href="<?php echo $this->base_url?>index.php/obat">Daftar Obat</a></li>

                        </ul>


                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

		<div class="container_12">



                <!-- Example table -->
                <div class="module" style="width: 756px ;">
                	<h2><span>Data Obat</span></h2>

                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter" >
                        	<thead>
                                <tr>
                                    <th style="width:7%">ID Obat</th>
                                    <th style="width:30%">Nama Obat</th>
                                    <th style="width:15%">Satuan</th>
                                    <th style="width:7%">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $list) { ?>
                                <tr>
                                    <td class="align-center"><?php echo $list->id_obat ; ?></td>
                                    <td><?php echo $list->nbk_obat ; ?></td>
                                    <td><?php echo $list->satuan_obat ; ?></td>
                                    <td><input type="text" maxlength="255" value="<?php echo $list->stok_obat ; ?>" disabled="disabled" /></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="<?php echo $this->base_url?>Template_files/arrow-st.gif" alt="first"/>
                                <img class="prev" src="<?php echo $this->base_url?>Template_files/arrow-18.gif" alt="prev"/>
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="<?php echo $this->base_url?>Template_files/arrow000.gif" alt="next"/>
                                <img class="last" src="<?php echo $this->base_url?>Template_files/arrow-su.gif" alt="last"/>
                                <select class="pagesize input-short align-center">
                                    <option value="<?php echo $jumlah ?>">Semua</option>
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                                </div>
                            </form>
                        </div>

                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->

			</div> <!-- End .grid_12 -->


        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2011. Siemas.</p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
