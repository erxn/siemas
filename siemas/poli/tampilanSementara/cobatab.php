<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
        <title>Puskesmas Bogor Tengah</title>

        <!-- CSS Reset -->
        <link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" /><link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />
        <script type="text/javascript" src="Template_files/jquery-1.js"></script>

        <!-- JQuery WYSIWYG plugin script -->
        <script type="text/javascript" src="Template_files/jquery00.js"></script>
        <script type="text/javascript" src="Template_files/jquery01.js"></script>
        <script type="text/javascript" src="Template_files/jquery02.js"></script>
        <script type="text/javascript" src="Template_files/jquery03.js"></script>
        <script type="text/javascript" src="Template_files/thickbox.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />



        <script>
            $(function() {
                 
                $( "#tabs" ).tabs();
            });
        </script>
    </head>
    <body>

        <div class="module" style="width: 50% ;margin-right: 400px ">
            <div  id="tabs">
                <ul>
                    <li><a href="#tabs-a">Statistik Penyakit</a></li>
                    <li><a href="#tabs-b">Statistik Wilayah</a></li>
                </ul>

                <div id="tabs-a">

                    <table border="0" width="100%" class="noborder" style="text-align: center">
                        <tbody>
                            <tr>
                                <td>BULANAN</td>
                                <td>TAHUNAN</td>
                            </tr>
                            <tr>
                                <td>
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
                                </td>
                                <td>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
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
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="text-align: center !important">
                                    <a id="datepicker" href="bulanan_penyakit.php" class="tombol-kotak">
                                        <img src="Template_files/bulan.png" width="90" height="80" alt="edit" />
                                        <span>Lihat grafik</span>
                                    </a>
                                </td>
                                <td id="datepicker" style="text-align: center !important">
                                    <a id="datepicker1" href="tahunan_penyakit.php" class="tombol-kotak">
                                        <img src="Template_files/tahun.png" width="80" height="80" alt="edit" />
                                        <span>Lihat grafik</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                </div>

                <div id="tabs-b">
                    
                        <table border="0" width="100%" class="noborder" style="text-align: center">
                            <tbody>
                                <tr>
                                    <td>BULANAN</td>
                                    <td>TAHUNAN</td>
                                </tr>
                                <tr>
                                    <td>
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
                                    </td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>
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
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center !important">
                                        <a id="datepicker2" href="bulanan_wilayah.php" class="tombol-kotak">
                                            <img src="Template_files/bulan.png" width="90" height="80" alt="edit" />
                                            <span>Lihat grafik</span>
                                        </a>
                                    </td>
                                    <td style="text-align: center !important">
                                        <a id="datepicker3" href="tahunan_wilayah.php" class="tombol-kotak">
                                            <img src="Template_files/tahun.png" width="80" height="80" alt="edit" />
                                            <span>Lihat grafik</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                </div>
            </div>

        </div>

    </body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
