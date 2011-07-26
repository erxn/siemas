<?php include 'header.php';?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->

<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Data Pasien</span></h2>
            <div class="module-body">
                <h4>Cari Pasien</h4>
                <table class="noborder" style="width: 50%">
                    <tr>
                        <td>No. Index</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                        <td>&nbsp;</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                        <td>&nbsp;</td>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="Cari" />
                            </div></td>
                    </tr>
                </table>
                <div>
                   <table id="myTable" class="tablesorter" style="width: 98%" >
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
                                <th style="width:20%"> Alamat</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                            <tr>
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
                            <tr>
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
                            <tr>
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
                            <tr>
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
                        </form>
                   </div>
                </div>
            </div>
         </div>
    </div>
</div>