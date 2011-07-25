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
        <div class="module">
            <h2><span>REGISTRASI PASIEN</span></h2>
        </div>
                <h5>CARI KK</h5>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="input-medium"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><div align="right">
                                <input type="submit" value="Cari">
                            </div></td>
                    </tr>
                </table>
                     </div>
               
         </div>
         <div style=";border: 1px black solid ">
            <h5>HASIL PENCARIAN KK</h5>
            <table width="500" border="1">
                <tr>
                    <td width="28"><strong>No.</strong></td>
                    <td width="138"><div align="center"><strong>Nama</strong> <strong>KK</strong></div></td>
                    <td width="200"><div align="center"><strong>Alamat</strong></div></td>
                    <td width="200"><div align="center"><strong>Anggota KK</strong></div></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="#">Adnan Alghani</a></td>
                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                    <td><a href="#">Annisa Anastasia</a>, <a href="#">Aditya Aradika</a></td>
                </tr>
            </table>
        </div>
        <div style="width: 49%">
            <table width="964">
                <strong>PENDAFTARAN KK BARU</strong>
                <tr>
                    <td width="5%">Tgl. Pendaftaran</td>
                    <td width="29%">date Picker</td>
                </tr>
                <tr>
                    <td>Nama KK</td>
                    <td><input type="text" name="nama_kk" maxlength="255" size="25"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jk_kk" value="L">
                            Laki-laki
                            <input type="radio" name="jk_kk" value="P" />
                            Perempuan </td>
                </tr>
                <tr>
                    <td></td>
                    <td width="29%">      </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="textarea" cols="25" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><table>
                            <tr>
                                <td>Kecamatan</td>
                                <td><input type="text" name="kecamatan"></td>
                            </tr>
                            <tr>
                                <td>Kelurahan </td>
                                <td><input type="text" name="kelurahan"></td>
                            </tr>
                            <tr>
                                <td>Kab / Kota </td>
                                <td><input type="text" name="kab_kota"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i>Keterangan Tambahan</i></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="status_wil" value="L">
                                        Luar Wilayah</td>
                                <td><input type="radio" name="status_wil" value="P" />
                                    Luar Kota</td>
                            </tr>
                            <tr>
                                <td height="29"></td>
                                <td><input type="submit" name="daftar_pasien" value="Daftar"></td>
                            </tr>
                        </table>        </td></tr></table>
        </div>
        <div style="border: 1px black solid">
            <p><strong>PENDAFTARAN KK BERHASIL</strong></p>
            <table width="500">
                <tr>
                    <td width="5%">Tgl. Pendaftaran</td>
                    <td width="29%"><strong>Selasa, 18 Januari 2011</strong></td>
                </tr>
                <tr>
                    <td>Nama KK</td>
                    <td><strong>Meri Marlina</strong></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><strong>Perempuan </strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td width="29%">&nbsp;</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><strong>Jl. Bara IV No. 13 Kecamatan Pabaton, Kelurahan Bogor Tengah, Bogor</strong></td>
                </tr>
            </table>
            <p>
                <input type="submit" name="daftar_pasien3" value="Tambah Data Anggota" />
            </p>
        </div>
        </div>
        <div style="width: 49%; float: left; border: 1px black solid">
            <h3>PASIEN</h3>
            <div style="border: 1px black solid">
                <h5>CARI PASIEN</h5>
                <table>
                    <tr>
                        <td>No. Index</td>
                        <td>:</td>
                        <td><input type="text" /></td>
                        <td>&nbsp;</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" /></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" /></td>
                        <td>&nbsp;</td>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="text" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div align="right">
                                <input type="submit" value="Cari" />
                            </div></td>
                    </tr>
                </table>
            </div>
            <div style=";border: 1px black solid ">
                <h5>HASIL PENCARIAN PASIEN</h5>
                <table width="550" border="1">
                    <tr>
                        <td width="25"><strong>No.</strong></td>
                        <td width="129"><div align="center"><strong>Nama</strong><strong> Pasien</strong></div></td>
                        <td width="64"><div align="center"><strong>Umur</strong></div></td>
                        <td width="139"><div align="center"><strong>Alamat</strong></div></td>
                        <td width="109"><div align="center"><strong>KK</strong></div></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Annisa Anastasia</a></td>
                        <td>19 tahun</td>
                        <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                        <td><a href="#">Adnan Alghani</a> </td>
                    </tr>
                </table>
                <p>&nbsp;</p>
            </div>
            <strong>PENDAFTARAN PASIEN BARU</strong>
            <table width="509">
                <tr>
                    <td width="35%">Tgl. Pendaftaran</td>
                    <td>date Picker</td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text" name="nama_pasien" size="25" maxlength="255"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jk_pasien" value="L">
                            Laki-laki
                            <input type="radio" name="jk_pasien" value="P" />
                            Perempuan </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="jk_pasien2" size="1" maxlength="2">
                            <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                            <select name="bulan_pasien2">
                                <?php  for($i=1;$i<=12;$i++) {?>
                                <option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
                                    <?php } ?>
                            </select>
                            <input type="text" name="tahun_pasien2" size="3" maxlength="4">        </td>
                                </tr>
                                <tr>
                                    <td>Status dlm Keluarga</td>
                                    <td><select name="status_keluarga">
                                            <option value="00">Kepala Keluarga</option>
                                            <option value="01">Ibu</option>
                                            <option value="02">Anak</option>
                                            <option value="03">Keponakan</option>
                                            <option value="04">Kakek</option>
                                            <option value="05">Nenek</option>
                                            <option value="06">Tinggal Sementara</option>
                                        </select>        </td>
                                </tr>
                                <tr>
                                    <td>Status Pelayanan</td>
                                    <td><select name="status_pelayanan">
                                            <option value="umum">Umum</option>
                                            <option value="askes">Askes</option>
                                            <option value="jamkesmas">Jamkesmas</option>
                                            <option value="lain">Lain-lain</option>
                                        </select>        </td>
                                </tr>
                                <tr>
                                    <td>No. Kartu</td>
                                    <td><input type="text" name="no_kartu"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="daftar_pasien2" value="Daftar"></td>
                                </tr>
                                </table>
                                <div style="border:1px solid black">
                                    <p><strong>PENDAFTARAN PASIEN BERHASIL</strong></p>
                                    <table width="509">
                                        <tr>
                                            <td width="35%">Tgl. Pendaftaran</td>
                                            <td><strong>date Picker</strong></td>
                                        </tr>
                                        <tr>
                                            <td>No. Index</td>
                                            <td><strong>M-23443242</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Pasien</td>
                                            <td><strong>Meri Marlina</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nama KK</td>
                                            <td><strong>Raden Dimas</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><strong>            Perempuan </strong></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><strong>8 Juli 2011</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Status dlm Keluarga</td>
                                            <td><strong>Ibu </strong></td>
                                        </tr>
                                        <tr>
                                            <td>Status Pelayanan</td>
                                            <td><strong>ASKES</strong></td>
                                        </tr>
                                        <tr>
                                            <td>No. Kartu</td>
                                            <td><strong>3212234343311</strong></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                    <p>&nbsp;</p>
                                </div>
                                </div>
                                </body>
                                </html>