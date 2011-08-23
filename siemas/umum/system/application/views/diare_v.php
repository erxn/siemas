


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
                            <td>Etiologi Diare:</td>
                            <td><textarea name="n_etiologi_diare" rows="5" cols="40"></textarea></td>
                       </tr>
                        <tr>
                            <td>Keadaan Umum:</td>
                            <td> <select name="n_keadaan_umum">
                                    <option value="baik">Baik</option>
                                    <option value="gelisah">Gelisah</option>
                                    <option value="lesu">Lesu</option>
                                     </select></td>
                        </tr>
                        <tr class="odd">
                            <td>Mata:</td>
                            <td> <select name="n_mata">
                                    <option value="normal">Normal</option>
                                    <option value="cekung">Cekung</option>
                                    <option value="sangat cekung">Sangat Cekung</option>
                                     </select></td>
                        </tr>
                        <tr>
                            <td>Air Mata:</td>
                            <td>  <input type="radio" name="air_mata" value="ada" />Ada<br />
                        <input type="radio" name="air_mata" value="tidak ada" checked />Tidak Ada<br />
                            </td> 

                        </tr>
                        <tr class="odd">
                            <td>Mulut:</td>
                            <td> <select name="n_mulut">
                                    <option value="basah">Basah</option>
                                    <option value="kering">Kering</option>
                                    <option value="sangat kering">Sangat Kering</option>
                                 </select></td>
                        </tr>
                        <tr>
                            <td>Rasa Haus:</td>
                            <td> <select name="n_haus">
                                    <option value="bisa minum">Bisa Minum</option>
                                    <option value="haus">Haus</option>
                                    <option value="malas minum">Malas Minum</option>
                                 </select></td>
                        </tr>
                        <tr class="odd">
                            <td>Turgor:</td>
                            <td> <select name="n_turgor">
                                    <option value="cepat kembali">Cepat kembali</option>
                                    <option value="kembali lambat">Kembali lambat </option>
                                    <option value="kembali sangat lambat">Kembali sangat lambat</option>
                                 </select></td>
                        </tr>
                        <tr>
                            <td>Derajat dehidrasi:</td>
                            <td> <select name="n_dehisrasi">
                                    <option value="tanpa">Tanpa</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="berat">Berat</option>
                                 </select></td>
                        </tr>
                        <tr>
                            <td>Pemeriksaan lab kholera:</td>
                            <td> <select name="n_lab">
                                    <option value="negatif">Negatif</option>
                                    <option value="positif">Positif</option>
                                 </select></td>
                        </tr>
                        <tr>
                            <td>Pemakaian:</td>
                            <td> <select name="n_pemakaia ">
                                    <option value="oralit">Oralit</option>
                                    <option value="ringer laktate">Ringer laktate</option>
                                    <option value="berat">Berat</option>
                                 </select></td>
                        </tr>
                         <tr class="odd">
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