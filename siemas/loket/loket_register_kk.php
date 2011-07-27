<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
        <title>Puskesmas Bogor Tengah</title>

        <!-- CSS Reset -->
        <link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />

        <!-- Fluid 960 Grid System - CSS framework -->
        <link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
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

                </div>
                <!-- End. .container_12 -->
            </div>

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
        <script>
            $(function() {
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#test").colorbox({initialHeight: "900px", initialWidth: "900px", width: "55%", height: "75%"})
            });
        </script>

        <div class="container_12">
            <div>
                <div class="grid_6" style="width: 49%">
                    <div class="module">
                        <h2><span>Kepala Keluarga (KK)</span></h2>
                        <div class="module-body">
                            <form action="loket_kk_sukses.php">
                                <table class="noborder" style="width: 98%">
                                    <strong>PENDAFTARAN KK BARU</strong>
                                    <tr>
                                        <td style="width: 5%">Tgl. Pendaftaran</td>
                                        <td style="width: 15%"><input id="datepicker" type="text" class="input-medium"/></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Nama KK</td>
                                        <td><input style="width: 80%" type="text" name="nama_kk" maxlength="255" size="25" class="input-medium"/></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <input type="radio" name="jk_kk" value="L"/>Laki-laki
                                            <input type="radio" name="jk_kk" value="P" />Perempuan
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Alamat</td>
                                        <td>
                                            <textarea name="textarea" cols="26" rows="2"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            
                                            <table style="width: 100%"  class="noborder" >
                                                <tr>
                                                    <td width="15%">Kecamatan</td>
                                                    <td><input type="text" name="kecamatan" class="input-medium"/></td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Kelurahan </td>
                                                    <td><input type="text" name="kelurahan" class="input-medium"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Kab / Kota </td>
                                                    <td><input type="text" name="kab_kota" class="input-medium"/></td>
                                                </tr>
                                                <tr  class="odd">
                                                    <td colspan="2"><i><b>Keterangan Tambahan</b></i></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="radio" name="status_wil" value="luar_wil"/>
                                                        Luar Wilayah &nbsp;&nbsp;<input type="radio" name="status_wil" value="luar_kota"/>
                                                        Luar Kota</td>
                                                </tr>
                                                <tr>
                                                    <td height="29"></td>
                                                    <td><div align="right">
                                                            <input class="submit-green" type="submit" value="Daftar" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
