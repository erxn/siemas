<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
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
        <script type="text/javascript" src="Template_files/jquery-1.5.min.js"></script>
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
                $("#test").colorbox({initialHeight: "900px", initialWidth: "900px", width: "45%", height: "85%"})
            });
        </script>
        <div id="header">
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <img src="Template_files/logo0000.gif"/>
                        <ul id="nav">
                            <li><a href="">Home</a></li>
                            <li><a href="antrian.htm">Antrian</a></li>
                            <li><a href="data_pasien.htm">Pasien</a></li>
                            <li><a href="">Obat</a></li>
                            <li><a href="">Statistik</a></li>
                            <li id="current"><a href="laporan_harian.htm">Laporan</a></li>
                        </ul>

                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div>
                <!-- End. .container_12 -->
            </div>
            <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="">Dinas</a></li>
                            <li><a href="">Tahunan</a></li>
                            <li><a href="">Bulanan</a></li>
                            <li><a href="">Mingguan</a></li>
                            <li><a href="">Harian</a></li>
                        </ul>

                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div>
            <!-- End #subnav -->
        </div>
        <div class="container_12">
            <div>
                <div class="grid_6" style="width: 98%">
                    <div class="module">
                        <h2><span>PEMBAYARAN</span></h2>
                        <div class="module-body">
                            <table class="noborder" style="width: 28%">
                                <tr>
                                    <td width="137">Nama</td>
                                    <td width="16">:</td>
                                    <td width="216"><input type="text" class="input-medium"/></td>
                                </tr>
                                <tr>
                                    <td>Poli</td>
                                    <td>:</td>
                                    <td><form>
                                            <select>
                                                <option>GIGI</option>
                                                <option>KIA</option>
                                                <option>LAB</option>
                                                <option>RADIOLOGI</option>
                                            </select>
                                        </form>    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div align="right">
                                            <input class="submit-green" type="submit" value="Cari" />
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div>
                                <p>Total Pasien: <strong>5 orang</strong></p>
                                <table id="myTable" class="tablesorter" style="width: 80%;">
                                    <thead>
                                        <tr>
                                            <th class="header" style="width: 1%;">No</th>
                                            <th class="header" style="width: 12%;">Nama</th>
                                            <th class="header" style="width: 7%;">Umur</th>
                                            <th class="header" style="width: 13%;">Alamat</th>
                                            <th class="header" style="width: 8%;">Poli</th>
                                            <th class="header" style="width: 9%;" colspan="3">Total Harga</th>
                                            <th class="header" style="width: 3%;">Status Pembayaran</th>
                                        </tr>
                                    </thead>

                                    <tr>
                                        <td><div align="center">1</div></td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a id="test" href="rincian.php">
                                                Rincian
                                            </a>
                                        </td>
                                        </td>
                                        <td><form id="form1" name="form1" method="post" action="">
                                                <input type="checkbox" name="checkbox" id="checkbox" /> Lunas
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div align="center">1</div></td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a id="test" href="rincian.php">
                                                Rincian
                                            </a>
                                        </td>
                                        <td><form id="form1" name="form1" method="post" action="">
                                                <input type="checkbox" name="checkbox" id="checkbox" /> Lunas
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div align="center">1</div></td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a id="test" href="rincian.php">
                                                Rincian
                                            </a>
                                        </td>
                                        <td><form id="form1" name="form1" method="post" action="">
                                                <input type="checkbox" name="checkbox" id="checkbox" /> Lunas
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div align="center">1</div></td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a id="test" href="rincian.php">
                                                Rincian
                                            </a>
                                        </td>
                                        <td><form id="form1" name="form1" method="post" action="">
                                                <input type="checkbox" name="checkbox" id="checkbox" /> Lunas
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                                <div id="pager" class="pager">
                                    <form action="">
                                        <div>
                                            <img alt="first" src="Template_files/arrow-st.gif" class="first"/>
                                            <img alt="prev" src="Template_files/arrow-18.gif" class="prev"/>
                                            <input type="text" class="pagedisplay input-short align-center"/>
                                            <img alt="next" src="Template_files/arrow000.gif" class="next"/>
                                            <img alt="last" src="Template_files/arrow-su.gif" class="last"/>
                                            <select class="pagesize input-short align-center">
                                                <option selected="selected" value="10">10</option>
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
        </div>
    </body>
</html>





