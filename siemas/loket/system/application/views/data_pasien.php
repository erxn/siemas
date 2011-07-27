<?php $this->load->view('header');?>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<div class="module">
    <div class="module-body">
        <div>
            <div  class="tabs">
                <ul>
                    <li><h3>Data Pasien</h3></li>
                </ul>
                <br/>
                <div id="tabs-a">
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
                    <hr/><br/>
                    <table id="myTable" class="tablesorter" style="width: 99%" >
                        <thead>
                            <tr>
                                <th style="width:2%">No</th>
                                <th style="width:10%">Tgl Pendaftaran</th>
                                <th style="width:8%">Id Pasien</th>
                                <th style="width:13%">Nama KK</th>
                                <th style="width:13%">Nama Pasien</th>
                                <th style="width:3%">JK</th>
                                <th style="width:8%">Tanggal Lahir</th>
                                <th style="width:20%">Alamat</th>
                                <th style="width:10%">Status Pelayan</th>
                                <th style="width:10%">No Kartu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td>10-04-2010</td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
                            </tr>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="">10-04-2010</a></td>
                                <td>M-1234</td>
                                <td><a class="popup" href="index.php/pasien/profil_kk">Dimas Putera</a></td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                <td>P</td>
                                <td>20-05-1991</td>
                                <td>Dramaga tengah rt 09/08 no 309</td>
                                <td>Askes</td>
                                <td>0998889</td>
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

                    <div style="clear: both"></div>

                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </div>
</div>