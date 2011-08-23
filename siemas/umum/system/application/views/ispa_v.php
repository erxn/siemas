


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <base href="http://localhost/siemas/umum/" />
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
<div  class="tabs" style=" margin-left: 400px; margin-top: 90px;  width:45%">
    <ul>
        <li><a href="#tabs-1">TBC</a></li>
    </ul>
    <div id="tabs-1">
        <form action="" method="post">
        <table  id="myTable"  class="noborder" style="width:100%">
            <tr class="odd">
                <td>Frekuensi Napas:</td>
                <td><textarea name="n_frekuensi_napas" rows="5" cols="40"></textarea></td>
            </tr>

            <tr>
                <td>Klasifikasi:</td>
                <td> <select name="n_klasifikasi">
                        <option value="bp">Bukan Pneumonia</option>
                        <option value="p">Pneumonia</option>
                        <option value="pb">Pneumonia Berat</option>
                    </select>
                </td>
            </tr>

            <tr class="odd">
                <td>Tindak Lanjut:</td>
                <td> <input type="radio" name="tindak" value="rawat jalan" />Rawat Jalan<br />
                    <input type="radio" name="tindak" value="rujuk" checked />Rujuk<br />

                </td>
            </tr>
            <tr>
                <td>Antibiotika:</td>
                <td> <input type="radio" name="antibiotik" value="ya" />Ya<br />
                    <input type="radio" name="antibiotik" value="tidak" checked />Tidak<br />
                </td>
            </tr>
            <tr class="odd">
                <td>Kondisi saat kunjungan ulang:</td>
                <td> <select name="n_kunjungan_ulang">
                        <option value="membaik">Membaik</option>
                        <option value="tetap">Tetap</option>
                        <option value="memburuk">Memburuk</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keterangan:</td>
                <td><textarea name="n_keterangan" rows="5" cols="40"></textarea></td>
            </tr>
            <tr> <td></td>
                <td>
                    <!--index.php/namacontroller/nama fungsi-->
                    <input name="submit"  type="submit" class="submit-green" value="Simpan" />

                </td>
            </tr>
        </table>
        </form>
    </div>

</div>
</html>
