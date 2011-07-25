<html> <head>

    </head>

    <body>

        <table border ="1">


            <div class="container_12"style="margin-left:8px" >
                <h3>Cari data pasien</h3>
                <tr >
                    <td>Id KK:</td>
                    <td style="width: 50%"><input type="text" class="input-long"></td>

                    <td>Nama:</td>
                    <td style="width: 50%"><input type="text" class="input-long"></td>

                    <td>Umur:</td>
                    <td style="width: 50%"><input type="text" class="input-long"></td>

                    <td>Alamat:</td>
                    <td style="width: 50%"><input type="text" class="input-long"></td>


                    <td ><img style="margin-top:px" src="images/cari.png"></td>

                </tr>



                <div class="module">
                    <h2><span>Data Pasien</span></h2>

                    <div class="module-table-body">	
                        <table id="myTable" class="tablesorter">
                            <thead>

                                <?php
                                foreach ($data_pasien->result() as $row) {
                                    ?>
                                    <tr>
                                        <th><?php echo $row->id_pasien; ?></th>
                                        <th><?php echo $row->tanggal_pendaftaran; ?></th>
                                        <th><?php echo $row->KK_Id_KK; ?></th>
                                        <th><?php echo $row->nama_pasien; ?></th>
                                        <th><?php echo $row->jk; ?></th>
                                        <th><?php echo $row->tanggal_lahir; ?></th>
                                        <th><?php echo $row->status_pelayanan; ?></th>
                                        <th><?php echo $row->no_kartu_layanan; ?></th>
                                        <th></th>
                                    </tr>
                                <?php } ?>



                            </thead>
                            <tbody>

                                <!--disini logic buat loopingnya-->


                            </tbody>

                        </table>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                    <img class="first" src="Template_files/arrow-st.gif" alt="first"/>
                                    <img class="prev" src="Template_files/arrow-18.gif" alt="prev"/> 
                                    <input type="text" class="pagedisplay input-short align-center"/>
                                    <img class="next" src="Template_files/arrow000.gif" alt="next"/>
                                    <img class="last" src="Template_files/arrow-su.gif" alt="last"/> 
                                    <select class="pagesize input-short align-center">
                                        <option value="10" selected="selected">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                    </select>
                                </div>
                        </div>

                        <div style="clear: both"></div>
                    </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->


                <div class="pagination">           
                    <a href="" class="button"><span><img src="Template_files/arrow-sv.gif" height="9" width="12" alt="First" /> First</span></a> 
                    <a href="" class="button"><span><img src="Template_files/arrow-19.gif" height="9" width="12" alt="Previous" /> Prev</span></a>
                    <div class="numbers">
                        <span>Page:</span> 
                        <a href="">1</a> 
                        <span>|</span> 
                        <a href="">2</a> 
                        <span>|</span> 
                        <span class="current">3</span> 
                        <span>|</span> 
                        <a href="">4</a> 
                        <span>|</span> 
                        <a href="">5</a> 
                        <span>|</span> 
                        <a href="">6</a> 
                        <span>|</span> 
                        <a href="">7</a> 
                        <span>|</span> 
                        <span>...</span> 
                        <span>|</span> 
                        <a href="">99</a>
                    </div> 
                    <a href="" class="button"><span>Next <img src="Template_files/arrow-00.gif" height="9" width="12" alt="Next" /></span></a> 
                    <a href="" class="button last"><span>Last <img src="Template_files/arrow-sw.gif" height="9" width="12" alt="Last" /></span></a>
                    <div style="clear: both;"></div> 
                </div>




            </div> <!-- End .grid_12 -->





</html>