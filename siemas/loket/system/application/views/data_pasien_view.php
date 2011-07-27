
<?php $this->load->view('header') ?>


     <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

        <script>
            $(function() {

                $( ".tabs" ).tabs();
            });
        </script>
<!-- Sub navigation -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">
        </div><!-- End. .grid_12-->
    </div><!-- End. .container_12 -->
    <div style="clear: both;"></div>
</div> <!-- End #subnav -->
</div> <!-- End #header -->

<div class="container_12"style="margin-left:8px; margin-top: 30px" >
    <h3 style="margin-bottom: 40px">Cari data pasien</h3>
    <tr>
        <td>Id KK:</td>
        <td style="width: 50%"><input type="text" class="input-long"></td>

        <td>Nama:</td>
        <td style="width: 50%"><input type="text" class="input-long"></td>

        <td>Umur:</td>
        <td style="width: 50%"><input type="text" class="input-long"></td>

        <td>Alamat:</td>
        <td style="width: 50%"><input type="text" class="input-long"></td>


        <td ><input type="submit" class="submit-green" value="Cari "/></td>

    </tr>


        <div  class="tabs" style="margin-top:20px">
            <ul>
                <li><a href="#tabs-a">Data Pasien</a></li>

            </ul>
            <div id="tabs-a">
                <div class="module-table-body">
                    <table id="myTable" class="tablesorter">
                        <thead>
                            <tr>
                                <th style="width:2%">No</th>
                                <th style="width:10%">Tanggal Pendaftaran</th>
                                <th style="width:10%">Id KK</th>
                                <th style="width:10%">Nama  Pasien</th>
                                <th style="width:5%">Jenis Kelamin</th>
                                <th style="width:10%">Tanggal Lahir</th>
                                <th style="width:10%"> Status Pelayan</th>
                                <th style="width:10%">No Kartu</th>
                                <th style="width:10%"> Alamat</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>1234</td>
                                <td>Meri Marlina</td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Askes</td>
                                <td>0998889</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">2</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>1454</td>
                                <td>Annisa Anastasia</td>
                                <td>P</td>
                                <td>12-09-1998</td>
                                <td>Umum</td>
                                <td>989898</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr  class="odd">
                                <td class="align-center">3</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>12334</td>
                                <td>Muhammad Abrari</td>
                                <td>L</td>
                                <td>12-08-1998</td>
                                <td>Umum</td>
                                <td>98766</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr  >
                                <td class="align-center">4</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>98767</td>
                                <td>Trio</td>
                                <td>P</td>
                                <td>10-08-1997</td>
                                <td>Jamkesmas</td>
                                <td>9874</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr  class="odd">
                                <td class="align-center">5</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>97653</td>
                                <td>Andrio</td>
                                <td>L</td>
                                <td>20-09-1998</td>
                                <td>Askes</td>
                                <td>8765</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">6</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>98887</td>
                                <td>Mutiara Wide</td>
                                <td>P</td>
                                <td>10-09-1999</td>
                                <td>Umum</td>
                                <td>98766</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>
                            <tr  class="odd">
                                <td class="align-center">7</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>9898498</td>
                                <td>Dimas Bagus</td>
                                <td>L</td>
                                <td>14-09-1995</td>
                                <td>Umum</td>
                                <td>998878</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td><input type="checkbox" />
                                    <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                    <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                    <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                    <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="pager" id="pager" style="margin-top: -25px" >

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

                </div>

            </div>

        </div>




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
