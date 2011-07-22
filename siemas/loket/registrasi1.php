<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
        <title>Puskesmas Bogor Tengah</title>

        <!-- CSS Reset -->
        <link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />

        <!-- Fluid 960 Grid System - CSS framework -->
        <link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />


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
        <div>
            <div class="grid_6" style="width: 49%">
                <div class="module">
                    <h2><span>Kepala Keluarga (KK)</span></h2>
                    <div class="module-body">
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
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="width:50%"><div align="right">
                                        <input class="submit-green" type="submit" value="Cari"/>
                                    </div></td>
                                <td style="width: 60px"></td>
                            </tr>
                        </table>

                        <div class="float-right">
                            <a class="button" href="loket_kk_sukses.php">
                                <span>
                                    <img height="9" width="12" alt="Tambah KK" src="Template_files/plus-sma.gif"/>
                                    Tambah KK
                                </span>
                            </a>
                        </div>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 3%;">No</th>
                                    <th class="header" style="width: 10%;">Nama</th>
                                    <th class="header" style="width: 5%;">Umur</th>
                                    <th class="header" style="width: 13%;">Alamat</th>
                                    <th class="header" style="width: 8%;">KK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 tahun</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                </tr>
                                <tr class="even">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 tahun</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                </tr>
                                <tr class="even">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 tahun</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>

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

        </div>

    </body>

</html>