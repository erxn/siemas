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
                            <li id="current"><a href="#">Pasien</a></li>
                            <li><a href="#">Statistik</a></li>
                            <li><a href="#">Laporan</a></li>
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
                        <ul>
                            <li><a href="#">Medical Record</a></li>
                            <li><a href="#">Data Pasien</a></li>
                        </ul>

                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->

         <h2 style="margin-left: 15px">Rekam Medik Pasien</h2>
        <div class="grid_6" style="width: 45%; margin-left:15px">
            <div class="module">
                <h2><span>Data Pasien </span></h2>
                <div class="module-body">
                    <form>
                        <table style="width:90%;" class="noborder">
                            <strong></strong>
                            <tr  class="odd">
                                <td>Tanggal Pendaftaran:</td>
                                <td style="width: 50%">  20-09-2011 </td>
                            </tr>
                            <tr>
                                <td>Nama Pasien:</td>
                                <td style="width: 50%">Meri MArlina</td>
                            </tr>
                            <tr  class="odd">
                                <td>Jenis Kelamin:</td>
                                <td style="width: 50%">P</td>

                            </tr>

                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>19-02-1990</td>

                            </tr>
                            <tr class="odd">
                                <td >Status Dalam Keluarga:</td>
                                <td>Istri</td>

                            </tr>
                            <tr>
                                <td >Status Dalam Keluarga:</td>
                                <td>Istri</td>

                            </tr>
                            <tr class="odd">
                                <td>Status PElayanan</td>
                                <td>Askes</td>
                            </tr>
                            <tr>
                                <td>No Kartu</td>
                                <td>090998989</td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>


        <div class="module" style="width: 50% ;margin-right: 15px ">
            <div  id="tabs">
                <ul>
                    <li><a href="#tabs-a">Poli Gigi</a></li>
                    <li><a href="#tabs-b">Poli KIA</a></li>
                    <li><a href="#tabs-c">Poli Umum</a></li>
                    <li><a href="#tabs-d">Lab</a></li>
                    <li><a href="#tabs-e">Rontgen</a></li>

                </ul>



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

                <!-- Example table -->
                <div id="tabs-a">

                    <div style="padding: 10px;">

                        <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;"/>

                        <img src="Template_files/cari.png">
                    </div>
                    <table id="">
                        <thead>
                            <tr>
                                <th style="width:5%">No</th>
                                <th style="width:20%">Tanggal Kunjungan</th>
                                <th style="width:21%">Anamnesis</th>
                                <th style="width:13%">Diagnosa</th>
                                <th style="width:13%">Layanan</th>
                                <th style="width:13%">Resep Dokter</th>
                                <th style="width:13%">Ket.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td><a href="data_akhir_tabel.php" class="pop">20-08-2009</a></td>
                                <td>Sariawan</td>
                                <td>Bolong gigi</td>
                                <td>Karies, Cabut Gigi</td>
                                <td>AMoksilin</td>
                                <td>Perlu tindakan cepatttttt!!</td>
                            </tr>
                            <tr class="odd">
                                <td class="align-center">2</td>
                                <td><a href="#" class="pop">20-08-2009</a></td>
                                <td>Sariawan</td>
                                <td>Bolong gigi</td>
                                <td>Karies, Cabut Gigi</td>
                                <td>AMoksilin</td>
                                <td>Perlu tindakan cepatttttt!!</td>
                            </tr>
                            <tr>
                                <td class="align-center">3</td>
                                <td><a href="#" class="pop">20-08-2009</a></td>
                                <td>Sariawan</td>
                                <td>Bolong gigi</td>
                                <td>Karies, Cabut Gigi</td>
                                <td>AMoksilin</td>
                                <td>Perlu tindakan cepatttttt!!</td>
                            </tr>

                        </tbody>
                    </table>
                   
                    <div class="pager" id="pager">
                        <form action="">
                            <div>
                                <img class="first" src="Template_files/arrow-st.gif" alt="first"/>
                                <img class="prev" src="Template_files/arrow-18.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="Template_files/arrow000.gif" alt="next"/>
                                <img class="last" src="Template_files/arrow-su.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                            </div>
                    </div>
                    <br/>
                    <br/>
                </div>




            </div>
        </div>



        <link rel="stylesheet" type="text/css" href="Template_files/colorbox.css" />                <!--java script buat pop up-->
        <script type="text/javascript" src="Template_files/jquery.colorbox-min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".pop").colorbox({initialHeight: "900px", initialWidth: "900px", width: "70%", height: "85%"})
            });
        </script>

        <div class="module" style="float: left; margin-left:15px; margin-top: -70px; width: 45%">

            
            <script>
                $(function() {
                    $( "#tabs1" ).tabs();
                    $( "#tabs" ).tabs();
                });
            </script>



            <div class="">

                <div id="tabs1">
                    <ul>
                        <li><a href="#tabs1-1">Anamnesis</a></li>
                        <li><a href="#tabs2-2">Diagnosa</a></li>
                        <li><a href="#tabs3-3">Layanan</a></li>
                        <li><a href="#tabs4-4">Resep Dokter</a></li>
                        <li><a href="#tabs5-5">Keterangan</a></li>
                    </ul>
                    <div id="tabs1-1">
                        <table class="noborder" style="width:100%">
                            <tr>
                                <td>Anamnesis:</td>
                                <td><textarea rows="5" cols="40"></textarea></td>
                            </tr>
                        </table>
                    </div>
                    <div id="tabs2-2">
                        <table class="noborder" style="width:100%">
                            <tr>
                                <td>Diagnosa:</td>
                                <td><textarea rows="5" cols="40"></textarea></td>
                            </tr>
                        </table>
                    </div>
                    <div id="tabs3-3">

                        <table class="noborder" style="width:100%">
                            <tr>
                                <td>Layanan:</td>
                                <td><textarea rows="5" cols="40"></textarea></td>
                            </tr>
                        </table>

                    </div>

                    <div id="tabs4-4">
                        <table class="noborder" style="width:100%">
                            <tr>
                                <td>Resep Dokter:</td>
                                <td><textarea rows="5" cols="40"></textarea></td>
                            </tr>
                        </table>

                    </div>

                    <div id="tabs5-5">
                        <table class="noborder" style="width:100%">
                            <tr>
                                <td>Keterangan:</td>
                                <td><textarea rows="5" cols="40"></textarea></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td style="margin-rightt: 300px">
                                    <a class="pop" href="data_akhir_diagnosis.php">
                                        <img src="Template_files/masukkandata.png">
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>

                </div>

            </div><!-- End demo -->
        </div>


        <!-- Footer -->
        <div id="footer">
            <div class="container_12">
                <div class="grid_12">
                    <!-- You can change the copyright line for your own -->
                    <p>&copy; 2009. Magic Admin.</p>
                </div>
            </div>
        </div> <!-- End #footer -->
    </body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
