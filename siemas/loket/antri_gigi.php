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

        <!-- awal HEADER -->
        <div id="header">

            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <img src="Template_files/logo0000.gif">
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
            </div> <!-- End #header-main -->
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
            </div> <!-- End #subnav -->
        </div>
        <!-- header akhir -->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#test").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%"})
            });
        </script>
    </head>
    <body>
        

        <!-- ISI -->
        <div class="container_12">
            <h2>ANTRIAN POLI GIGI</h2>
            <div>
                <!--KIRI -->
                <div>
                    <div class="grid_6" style="width: 48%">
                        <div class="module">
                            <h2><span>Tambah Antrian</span></h2>
                            <div class="module-body">
                                <table id="form_cari" class="noborder" style="width: 80%;">
                                    <tr>
                                        <td style="width: 30%;">ID Pasien</td>
                                        <td style="width: 10%;">:</td>
                                        <td style="width: 20%;"><input type="text" class="input-medium"/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><input type="text" class="input-medium" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Umur</td>
                                        <td>:</td>
                                        <td><input type="text" class="input-medium" /></td>
                                        <td><div align="right">
                                                <input class="submit-green" type="submit" value="Cari" />
                                            </div></td>
                                    </tr>

                                </table>
                                <hr style="width: 100%; border: 1px solid #cccccc"></hr>

                                <br/>
                                <h4 align="left">Hasil Pencarian: 5 orang</h4>
                                <div class="float-right">
                                    <a href="registrasi.php">
                                        <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> Pasien Baru
                                    </a>
                                </div>
                                <table id="myTable" class="tablesorter" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="header" style="width: 1%;">No</th>
                                            <th class="header" style="width: 8%;">Nama</th>
                                            <th class="header" style="width: 1%;">Umur</th>
                                            <th class="header" style="width: 13%;">Alamat</th>
                                            <th class="header" style="width: 8%;">KK</th>
                                            <th class="header" style="width: 3%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="even">
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td><a href="">Dimas Putera</a></td>
                                            <td align="center">
                                                <a id="test" href="reg_kunjungan.php">
                                                    <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="align-center">2</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td><a href="">Dimas Putera</a></td>
                                            <td align="center">
                                                <a id="test" href="reg_kunjungan.php">
                                                    <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="align-center">3</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td><a href="">Dimas Putera</a></td>
                                            <td align="center">
                                                <a id="test" href="reg_kunjungan.php">
                                                    <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
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
            <!--KIRI AKHIR -->
            <!-- KANAN -->
            <div>
                <div class="grid_6" style="width: 48%">
                    <div class="module">
                        <h2><span>ANTRIAN SEKARANG</span></h2>
                        <div class="module-body">
                            <div style="width: 100%">
                                <h4 align="right">Total Pasien: 5 orang</h4>
                                <table id="myTable" class="tablesorter" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="header" style="width: 1%;">No</th>
                                            <th class="header" style="width: 12%;">Nama</th>
                                            <th class="header" style="width: 1%;">Umur</th>
                                            <th class="header" style="width: 22%;">Alamat</th>
                                            <th class="header" style="width: 8%;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td>Antri</td>
                                        </tr>
                                        <tr>
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td>Antri</td>
                                        </tr>

                                        <tr>
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td>Antri</td>
                                        </tr>
                                        <tr>
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td>Sedang diperiksa</td>
                                        </tr>
                                        <tr>
                                            <td class="align-center">1</td>
                                            <td><a href="">Meri Marlina</a></td>
                                            <td>19 th</td>
                                            <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                            <td>Antri</td>
                                        </tr>
                                    </tbody>
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
            <!--KANAN AKHIR -->
        </div>
        </div>
    </body>
</html>