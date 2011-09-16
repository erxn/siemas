
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <base href="<?php echo base_url(); ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
        <title>Puskesmas Bogor Tengah</title>



        <link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />

        <!-- JQuery engine script-->
        <script type="text/javascript" src="Template_files/jquery-1.js"></script>
        <script type="text/javascript" src="Template_files/jquery00.js"></script>
        <script type="text/javascript" src="Template_files/jquery01.js"></script>
        <script type="text/javascript" src="Template_files/jquery02.js"></script>
        <script type="text/javascript" src="Template_files/jquery03.js"></script>
        <script type="text/javascript" src="Template_files/thickbox.js"></script>

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

        <!-- Header -->
        <div id="header">



            <img src="Template_files/logo0000.gif" style="position: absolute; top:16px; left:30px" />
            <img src="Template_files/puskesmas.png" style="position: absolute; top:4px; left:85px" />
            <img src="Template_files/alamat.png" style="position: absolute; top:40px; left:85px" />
            <img src="Template_files/gigi.png" style="position: absolute; top:10px; right:2px" />
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <ul id="nav">
                            <li id="<?php if($this->uri->segment(1)== "antrian" && $this->uri->segment(2)=="antri" ) echo "current"?>"><a href="index.php/antrian/antri/1">Antrian</a></li>

                            <li id="<?php if(($this->uri->segment(1)=="antrian" && $this->uri->segment(2)=="isi_remed_hari_ini")|| $this->uri->segment(2)=="remed_berhasil") echo "current"?>"><a href="index.php/antrian/isi_remed_hari_ini">Isi Rekam Medik</a></li>
                            <li id="<?php if($this->uri->segment(1)== "stat") echo "current"?>"><a href="index.php/stat">Statistik</a></li>
                            <li id="<?php if($this->uri->segment(1)== "laporan") echo "current"?>"><a href="index.php/laporan">Laporan</a></li>
                            <li id="<?php if($this->uri->segment(1)== "kunjungan") echo "current"?>"><a href="index.php/kunjungan/kunjungan_hari_ini">Kunjungan</a></li>
                             <li><a href="index.php/">Logout</a></li>

                        </ul>

                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            </html>
