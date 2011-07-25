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
        <script type="text/javascript">
            $(document).ready(function(){
                $("#test").colorbox({initialHeight: "200px", initialWidth: "200px", width: "50%", height: "65%"})
            });
        </script>

        <div class="container_12">
            <div>
                <div class="grid_6" style="width: 48%">
                    <div class="module">
                        <h2><span>Kepala Keluarga (KK)</span></h2>
                        <div class="module-body">
                            <div>
                                <span class="notification n-success" style="height: 5px">PENDAFTARAN KK BERHASIL</span>
                            </div>
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
                                </tbody>
                            </table>



                        </div>

                    </div>
                </div>

                <div class="grid_6" style="width: 48%">
                    <div class="module">
                        <h2><span>Anggota Keluarga</span></h2>
                        <div class="module-body">
                              <table class="noborder">
                    <tr>
                        <td>Tgl. Pendaftaran</td>
                        <td style="width: 65%"><input id="datepicker" type="text" class="input-medium"/></td>
                    </tr>
                    <tr class="odd">
                        <td>Nama Pasien</td>
                        <td><input class="input-medium" type="text" name="nama_pasien" size="25" maxlength="255"/></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jk_pasien" value="L">Laki-laki &nbsp;&nbsp;&nbsp;/>
                            <input type="radio" name="jk_pasien" value="P" />Perempuan
                        </td>
                    </tr>

                    <tr  class="odd">
                        <td>Tanggal Lahir</td>
                        <td><input class="input-short" style="width: 6%" type="text" name="jk_pasien" size="1" maxlength="2"/>
                            <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                            <select name="bulan_pasien"  style="width: 25%">
                                <?php  for($i=1;$i<=12;$i++) {?>
                                <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                    <?php } ?>
                            </select>
                            <input class="input-short"  style="width: 11%" type="text" name="tahun_pasien" size="3" maxlength="4"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Status dlm Keluarga</td>
                        <td>
                            <select name="status_keluarga">
                                <option value="00">Kepala Keluarga</option>
                                <option value="01">Ibu</option>
                                <option value="02">Anak</option>
                                <option value="03">Keponakan</option>
                                <option value="04">Kakek</option>
                                <option value="05">Nenek</option>
                                <option value="06">Tinggal Sementara</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="odd">
                        <td>Status Pelayanan</td>
                        <td>
                            <select name="status_pelayanan">
                                <option value="umum">Umum</option>
                                <option value="askes">Askes</option>
                                <option value="jamkesmas">Jamkesmas</option>
                                <option value="lain">Lain-lain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>No. Kartu</td>
                        <td><input class="input-medium" type="text" name="no_kartu"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div align="right">
                                <input class="submit-green" type="submit" value="Daftar" />
                            </div>
                        </td>

                    </tr>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
