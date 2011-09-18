<div class="container_12">



                <!-- Example table -->
                <div class="module" style="width: 100% ;">
                	<h2><span>Data Obat</span></h2>

                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter" >
                        	<thead>
                                <tr>
                                    <th style="width:8%">ID Obat</th>
                                    <th style="width:30%">Nama Obat</th>
                                    <th style="width:15%">Satuan</th>
                                    <th style="width:6%">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftar as $list) { ?>
                                <tr>
                                    <td class="align-center"><?php echo $list->id_obat ; ?></td>
                                    <td><?php echo $list->nbk_obat ; ?></td>
                                    <td><?php echo $list->satuan_obat ; ?></td>
                                    <td align="right"><?php echo $list->stok_obat ; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </form>
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                <div style="clear: both;"></div>
			</div> <!-- End .grid_12 -->