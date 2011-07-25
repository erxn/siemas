<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <title>Puskesmas Bogor Tengah</title>

        <!-- CSS Reset -->
        <link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />

        <!-- Fluid 960 Grid System - CSS framework -->
        <link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
		      <link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />
        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />

        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />

        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />

        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" />

        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />
        <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->

        <!-- JQuery engine script-->
        <script type="text/javascript" src="Template_files/jquery-1.js"></script>

        <!-- JQuery WYSIWYG plugin script -->
        <script type="text/javascript" src="Template_files/jquery00.js"></script>

        <!-- JQuery tablesorter plugin script-->
        <script type="text/javascript" src="Template_files/jquery01.js"></script>

        <!-- JQuery pager plugin script for tablesorter tables -->
        <script type="text/javascript" src="Template_files/jquery02.js"></script>

        <!-- JQuery password strength plugin script -->
        <script type="text/javascript" src="Template_files/jquery03.js"></script>

        <!-- JQuery thickbox plugin script -->
        <script type="text/javascript" src="Template_files/thickbox.js"></script>
		
        <script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>

        <!-- Initiate WYIWYG text area -->
        <script type="text/javascript">
            $(function()
            {
                $('#wysiwyg').wysiwyg(
                {
                    controls : {
                        separator01 : { visible : true },
                        separator03 : { visible : true },
                        separator04 : { visible : true },
                        separator00 : { visible : true },
                        separator07 : { visible : false },
                        separator02 : { visible : false },
                        separator08 : { visible : false },
                        insertOrderedList : { visible : true },
                        insertUnorderedList : { visible : true },
                        undo: { visible : true },
                        redo: { visible : true },
                        justifyLeft: { visible : true },
                        justifyCenter: { visible : true },
                        justifyRight: { visible : true },
                        justifyFull: { visible : true },
                        subscript: { visible : true },
                        superscript: { visible : true },
                        underline: { visible : true },
                        increaseFontSize : { visible : false },
                        decreaseFontSize : { visible : false }
                    }
                } );
            });
        </script>

        <!-- Initiate tablesorter script -->
        <script type="text/javascript">
            $(document).ready(function() { 
                $("#myTable") 
                .tablesorter({
                    // zebra coloring
                    widgets: ['zebra'],
                    // pass the headers argument and assing a object 
                    headers: { 
                        // assign the sixth column (we start counting zero) 
                        6: { 
                            // disable it by setting the property sorter to false 
                            sorter: false 
                        } 
                    }
                }) 
                .tablesorterPager({container: $("#pager")}); 
            }); 
        </script>

        <!-- Initiate password strength script -->
        <script type="text/javascript">
            $(function() {
                $('.password').pstrength();
            });
        </script>
        
    </head>
    <body>
	  <script type="text/javascript">
            $(document).ready(function(){
                $("#datepicker").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
				$("#datepicker1").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
				$("#datepicker2").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
				$("#datepicker3").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
            });
        </script>
        <!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
			
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
                        <span id="text-invitation"></span>
                        <!-- Messages displayed through the thickbox -->

                    </div>
                    <div class="grid_4">
                        <a href="" id="logout">
                            Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->

             <img src="Template_files/logo0000.gif" style="position: absolute; top:56px; left:60px" />
            <img src="Template_files/puskesmas.png" style="position: absolute; top:45px; left:120px" />
            <img src="Template_files/alamat.png" style="position: absolute; top:95px; left:120px" />
            <img src="Template_files/gigi.png" style="position: absolute; top:40px; right:2px" />

                        <!-- Header. Main part -->
                        <div id="header-main">
                            <div class="container_12">
                                <div class="grid_12">
                                    <ul id="nav">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Antrian</a></li>
                                        <li><a href="#">Pasien</a></li>
                                        <li id="current"><a href="#">Statistik</a></li>
                                        <li><a href="laporan.php">Laporan</a></li>
                                    </ul>

                                </div><!-- End. .grid_12-->
                                <div style="clear: both;"></div>
                            </div><!-- End. .container_12 -->
                        </div> <!-- End #header-main -->
                        <div style="clear: both;"></div>
                        <!-- Sub navigation -->
                        <div id="subnav">
                            <div class="container_12">
                                <div class="grid_12">

                                </div><!-- End. .grid_12-->
                            </div><!-- End. .container_12 -->
                            <div style="clear: both;"></div>
                        </div> <!-- End #subnav -->
                        </div> <!-- End #header -->

                        <div class="container_12">



                            <!-- Form elements -->    
                            <div class="grid_12" style=" padding: 20px 1.5% 20px 1.5%;  width: 100%; ">

                                <div class="module" style="float: left; width: 48%">

                                    <h2><span>Statistik Berdasarkan Penyakit</span></h2>

                                    <div class="module-body">
                                        
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
                                        
                                    </div> <!-- End .module-body -->
                                </div>



                                <div class="module" style="float: left; width: 48%">

                                    <h2><span>Statistik Berdasarkan Wilayah</span></h2>

                                    <div class="module-body">
                                        
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
                                        
                                    </div> <!-- End .module-body -->
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
