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
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" />

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
            <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>

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
        <script type="text/javascript">
            $(document).ready(function(){
                $("#test").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%", onComplete: function(){            
                      $( "#datepicker" ).datepicker({
                            changeMonth: true,
                            changeYear: true
                        });
                    }
                });
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
        <script type="text/javascript">
            function tampilkan_profil_kk() {
                $('#daftar_kk').hide();
                $('#profil_kk').show();
                return false;
            };
            function tampilkan_hasil_cari(){
                $('#daftar_kk').show();
                $('#profil_kk').hide();
                return false;
            };
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


    </head>

    <body>
        <div>
            <!-- KIRI -->
            <div class="grid_6" style="width: 47%">
                <div class="module">
                    <h2><span>Kepala Keluarga (KK)</span></h2>
                    <div class="module-body">
                        <div id="daftar_kk">
                            <h5>Cari KK</h5>
                            <table style="width:60% " class="noborder" >
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td style="width:50%"><input type="text" class="input-medium"/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text" class="input-medium"/></td>
                                    <td><div align="right">
                                            <input class="submit-green" type="submit" value="Cari"/>
                                        </div></td>
                                </tr>
                            </table>
                            <hr style="width: 100%; border: 1px solid #cccccc"></hr>
                            <br/>
                            <h4 align="left">Hasil Pencarian: 5 orang</h4>
                            <div class="float-right">
                                <a href="loket_register_kk.php">
                                    <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> KK Baru
                                </a>
                            </div>


                            <table id="myTable" class="tablesorter" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="header" style="width: 3%;">No</th>
                                        <th class="header" style="width: 7%;">Nama</th>
                                        <th class="header" style="width: 16%;">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="even">
                                        <td class="align-center">1</td>
                                        <td><a href="" onclick="tampilkan_profil_kk(); return false;">Meri Marlina</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="align-center">1</td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="align-center">1</td>
                                        <td><a href="">Meri Marlina</a></td>
                                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
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
                        <br/>
                        <div style="clear: both;"></div>
                        <div id="profil_kk" style="display: none">
                            <div align="left">
                                <input class="submit-green" type="submit" onclick="tampilkan_hasil_cari();return false;" value="<< Kembali"/>
                            </div>
                            <br/> 
                            <table class="noborder" style="width: 100%">
                                <tbody>
                                    <tr class="odd">
                                        <td colspan="2"><strong>Profil KK</strong></td>
                                    </tr>
                                    <tr>
                                        <td  style="width: 25%;" >Tgl. Pendaftaran</td>
                                        <td>Selasa, 18 Januari 2011</td>
                                    </tr>
                                    <tr  class="odd">
                                        <td>Nama KK</td>
                                        <td><span style="color: #24cc57; font-weight: bold">Dimas Putera</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Alamat</td>
                                        <td>Jl. Bara IV No. 13 Kecamatan Pabaton, Kelurahan Bogor Tengah, Bogor</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><strong>Anggota Keluarga</strong>
                                            <div class="float-right">
                                                <a id="test" href="reg_pasien.php">
                                                    <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah Anggota KK"/> Tambah Anggota KK
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr  class="odd">
                                        <td>Kepala Keluarga</td>
                                        <td><a href="">Dimas Putera</a></td>

                                    </tr>
                                    <tr>
                                        <td>Istri</td>
                                        <td><a href="">Meri Marlina</a></td>

                                    </tr>
                                    <tr  class="odd">
                                        <td>Anak</td>
                                        <td><a href="">Annisa Anastasia</a></td>

                                    </tr>
                                </tbody>
                            </table>


                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- KANAN -->
        <div class="grid_6" style="width: 47%">
            <div class="module">
                <h2><span>Pasien</span></h2>
                <div class="module-body">
                    <h5>Cari Pasien</h5>
                    <table class="noborder">
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
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>

    </body>

</html>