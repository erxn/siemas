<?php $this->load->view('header')?>

 <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

        <script>
            $(function() {
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'dd-mm-yy'
                });
            });
        </script>

        <script>
            $(function() {
                $( ".tabs" ).tabs();
            });
        </script>




        <div class="grid_5" style=" margin-right: -190px; margin-top: 90px; float: right; width: 93%">

            <div class="grid_7" style=" margin-right:3px">
                <div  class="tabs">
                    <ul>
                        <li><a href="#tabs-1">Laporan Harian</a></li>
                        <li><a href="#tabs-2">Laporan Bulanan</a></li>
                    </ul>
                   <div id="tabs-1">
                        <div style="margin: 5px">
                        <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>
                    </div>
                        <table>
                            <tr>
                                <td>
                                    <a href="" class="dashboard-module">
                                        <img src="Template_files/lap_tindakan.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan</span>
                                    </a>
                                </td>

                                <td>
                                    <a href="#" class="dashboard-module">
                                        <img src="Template_files/lap_penyakit.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Penyakit</span>
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>


                    <div id="tabs-2">
                        <div>
                             <tr>
                                    <select>
                                        <option value="0">Pilih bulan:</option>
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
                                </tr>
                                <tr>
                                    <select>
                                        <option value="0">Pilih tahun:</option>
                                        <option value="1">2000</option>
                                        <option value="2">2001</option>
                                        <option value="3">2002</option>
                                        <option value="4">2003</option>
                                        <option value="5">2004</option>
                                        <option value="6">2005</option>
                                        <option value="7">2006</option>
                                        <option value="8">2007</option>
                                        <option value="9">2008</option>
                                        <option value="10">2009</option>
                                        <option value="11">2010</option>
                                        <option value="12">2011</option>
                                    </select>
                                </tr>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <a href="#" class="dashboard-module">
                                        <img src="Template_files/lap_bul_tindakan.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan</span>
                                    </a>
                                </td>

                                <td>
                                    <a href="" class="dashboard-module">
                                        <img src="Template_files/lap_bul_penyakit.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Penyakit</span>
                                    </a>
                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <div class="grid_7" style=" margin-right:30px">
                <div  class="tabs">
                    <ul>
                        <li><a href="#tabs-3">Laporan Triwulan</a></li>
                        <li><a href="#tabs-4">Laporan Tahunan</a></li>
                    </ul>

                    <div id="tabs-3">

                        <table style="margin-left:60px">
                            <tr>
                                <td>
                                    <a href="#" class="dashboard-module">
                                        <img src="Template_files/lap_triwulan.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan & Penyakit Gigi</span>
                                    </a>

                                </td>
                            </tr>
                        </table>

                    </div>


                    <div id="tabs-4">
                        <table style="margin-left:60px">
                            <div style="margin: 5px">
                                <select>
                                    <option value="0">Masukkan Tahun:</option>
                                    <option value="1">2000</option>
                                    <option value="2">2001</option>
                                    <option value="3">2002</option>
                                    <option value="4">2003</option>
                                    <option value="5">2004</option>
                                    <option value="6">2005</option>
                                    <option value="7">2006</option>
                                    <option value="8">2007</option>
                                    <option value="9">2008</option>
                                    <option value="10">2009</option>
                                    <option value="11">2010</option>
                                    <option value="12">2011</option>
                                </select>
                            </div>
                            <tr>
                                <td >
                                    <a href="#" class="dashboard-module">
                                        <img src="Template_files/reportorium.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan & Penyakit Gigi</span>
                                    </a>
                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>


        </div>
