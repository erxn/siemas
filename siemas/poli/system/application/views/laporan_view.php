<?php $this->load->view('header')?>
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

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


<table border="0">
    <tbody>
        <tr>
            <td><div  class="tabs"  style="margin:70px; margin-left:270px;width:500px">
                    <ul>
                        <li><a href="#tabs-2">Laporan Bulanan</a></li>
                    </ul>
                    <div id="tabs-2">
                      <table>
                            <tr>
                            <select style="margin-left:100px; margin-bottom: 30px">
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
                            <select style="margin-left:10px;">
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
                       
                            <tr>
                                <td>
                                    <a style="text-decoration:none; margin-left:50px " href="index.php/laporan/bulanan_layanan" class="dashboard-module">
                                        <img src="Template_files/lap_bul_tindakan.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan</span>
                                    </a>
                                </td>

                            
                                <td>
                                    <a style="text-decoration:none; margin-left:30px" href="index.php/laporan/bulanan_penyakit" class="dashboard-module">
                                        <img src="Template_files/lap_bul_penyakit.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Penyakit</span>
                                    </a>
                                </td>

                            </tr>

                        </table>

                    </div>


                </div>
            </td>
            <td>
                <div  class="tabs"  style="width:300px">
                    <ul>
                        <li><a href="#tabs-4">Laporan Tahunan</a></li>
                    </ul>

                    <div id="tabs-4">
                        <table>
                            <tr>
                                <select style="margin-left: 60px;margin-bottom: 30px">
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
                           </tr>
                            <tr>
                                <td >
                                    <a style="text-decoration:none; margin-left: 60px" href="index.php/laporan/tahunan" class="dashboard-module">
                                        <img src="Template_files/reportorium.png" width="64" height="64" alt="edit" />
                                        <span>Laporan Tindakan & Penyakit Gigi</span>
                                    </a>
                                </td>

                            </tr>

                        </table>

                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>






