<?php $this->load->view('header');?>
 <div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
        <script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>


<script type="text/javascript">
            $(document).ready(function(){
                $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})

       });
        </script>

<script>
    $(function() {

        $( "#tabs" ).tabs();
         $( "#tabs2" ).tabs();
    });
</script>

<div class="container_12">
    <div class="grid_12" style=" width: 40%; margin-left:130px; margin-top: 20px ">

        <div  id="tabs" style="margin: 0 1%">
            <ul>
                <li><a href="#tabs-a">Statistik Penyakit</a></li>
            </ul>
            <div id="tabs-a">

                <script type="text/javascript">

                function update_href_bulanan_penyakit() {

                    var link = "index.php/statistik/grafik_bulanan_penyakit";
                    var bln = $('#bulan_peny').val();
                    var thn = $('#tahun_peny').val();

                    $('#btn_bulanan_penyakit').attr({'href': link + '/' + bln + '/' + thn});

                }

                </script>

                 <script type="text/javascript">

                function update_href_tahunan_penyakit() {

                    var link = "index.php/statistik/grafik_tahunan_penyakit";
                    var tahun = $('#tahun_p').val();

                    $('#btn_tahun_penyakit').attr({'href': link + '/' + thn});

                }

                </script>

                <table border="0" width="100%" class="noborder" style="text-align: center">
                    <tbody>
                        <tr>
                            <td>BULANAN</td>
                            <td>TAHUNAN</td>
                        </tr>
                        <tr>
                            <td>
                                <select name="bulan_peny" id="bulan_peny" onchange="update_href_bulanan_penyakit()">
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
                            </td>
                            <td>
                                <select name="tahun_penyakit">
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
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="tahun_peny" id="tahun_peny" style="margin-bottom:10px;" onchange="update_href_bulanan_penyakit()">
                                    <option value="0">Pilih tahun:</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td  style="text-align: center !important">
                                <div class="tombol-kotak">
                                    <a class="pop" href="index.php/statistik/grafik_bulanan_penyakit/" id="btn_bulanan_penyakit">
                                    <img src="Template_files/bulan.png" width="90" height="80" alt="edit" />
                                    <span>Lihat grafik</span>
                                </a>
                                </div>
                            </td>
                            <td style="text-align: center !important">
                                <div class="tombol-kotak">
                                <a class="pop"  href="index.php/statistik/grafik_tahunan_penyakit" id="btn_bulanan_penyakit">
                                    <img src="Template_files/tahun.png" width="80" height="80" alt="edit" />
                                    <span>Lihat grafik</span>
                                </a>
                                    </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

</div>
        
        <div  id="tabs2" style=" margin-left: 650px; margin-right:-600px; margin-top: -320px">
            <ul>
                <li><a href="#tabs-b">Statistik Wilayah</a></li>
            </ul>

            <div id="tabs-b">

                <table border="0" width="100%" class="noborder" style="text-align: center">
                    <tbody>
                        <tr>
                            <td>BULANAN</td>
                            <td>TAHUNAN</td>
                        </tr>
                        <tr>
                            <td>
                                <select name="bulan_wilayah">
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
                            </td>
                            <td>
                                <select name="tahun_wil"  style="margin-bottom:10px;">
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
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="tahun_wilayah">
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
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="text-align: center !important" >
                                <div class="tombol-kotak">
                                <a class="pop"  href="index.php/statistik/grafik_bulanan_wilayah" >
                                    <img src="Template_files/bulan.png" width="90" height="80" alt="edit" />
                                    <span>Lihat grafik</span>
                                </a>
                                    </div>
                            </td>
                            <td style="text-align: center !important">
                                <div class="tombol-kotak">
                                <a class="pop" href="index.php/statistik/grafik_tahunan_wilayah" >
                                    <img src="Template_files/tahun.png" width="80" height="80" alt="edit" />
                                    <span>Lihat grafik</span>
                                </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
