
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <base href="http://localhost/siemas/poli/" />
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


<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />


<script>
    $(function() {

        $( ".tabs" ).tabs();
    });
</script>

<div class="grid_6" style="width: 98%">
        <div class="module" style="background: none">
                        <h2>
                            <span>ISPA</span>
                            </h2>
                            <table style="width:100%" id="myTable"  border="none">


                                <tr class="odd">
                                    <td><b>Nama:</b></td>
                                    <td style="width: 50%"><?php echo $data_pasien[0]['nama_pasien'];?></td>

                                </tr>

                                <tr >
                                    <td><b>Umur:</b></td>
                                    <td>20</td>
                                </tr>


                                <tr class="odd">
                                    <td><b>Klasifikasi:</b></td>
                                    <td style="width: 50%"><?php echo $ispa[0]['klasifikasi'];?></td>
                                </tr>

                                 <tr>
                                    <td><b>Frekuensi Napas:</b></td>
                                    <td><?php echo $ispa[0]['frek_nafas'];?></td>
                                </tr>

                                <tr  class="odd">
                                    <td><b>Antibiotik:</b></td>
                                    <td><?php echo $ispa[0]['antibiotik'];?></td>
                                </tr>

                                 <tr>
                                    <td><b>Kondisi kunjungan ulang:</b></td>
                                    <td><?php echo $ispa[0]['kondisi_kunjungan_ulang'];?></td>
                                </tr>

                                <tr  class="odd">
                                    <td><b>Tindak lanjut:</b></td>
                                    <td><?php echo $ispa[0]['tindak_lanjut'];?></td>
                                </tr>

                                <tr>
                                    <td><b>Keterangan:</b></td>
                                    <td><?php echo $ispa[0]['keterangan'];?></td>
                                </tr>

                            </table>

                    </div> </div>
