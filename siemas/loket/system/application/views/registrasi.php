<?php $this->load->view('header');?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- END SUBNAV -->
<br/>

<!-- ISI -->

<div>
    <!--KIRI -->
    <div>
        <div class="grid_6" style="width: 50%">
            <div class="module">
                <h2><span>Pendaftaran Pasien</span></h2>
                <div class="module-body">
                    <form id="cari_pasien" action="index.php/registrasi">
                        <table id="form_cari" class="noborder" style="width: 80%;">
                            <tr>
                                <td style="width: 30%;">ID Pasien</td>
                                <td style="width: 10%;">:</td>
                                <td style="width: 20%;"><input name="kode_pasien" type="text" class="input-medium"/></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><b><center>atau</center></b></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input nama="nama_pasien"type="text" class="input-medium" /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><input name="umur_pasien" type="text" class="input-medium" /></td>
                                <td><div align="right">
                                        <input name="cari" class="submit-green" type="submit" value="Cari" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <hr style="width: 100%; border: 1px solid #cccccc"/>
                    <br/>
                    
                    <div class="float-left">

                        <a class="tambah" href="index.php/kk/registrasi_kk">
                            <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> Pasien Baru
                        </a>
                    </div>
                    <div id="hasil_cari_kk">
                    <h4  class="float-right">Hasil Pencarian: 5 orang</h4>
                    <br/>
                    <table id="myTable" class="tablesorter" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="header" style="width: 1%;">No</th>
                                <th class="header" style="width: 8%;">Nama</th>
                                <th class="header" style="width: 1%;">Umur</th>
                                <th class="header" style="width: 13%;">Alamat</th>
                                <th class="header" style="width: 8%;">KK</th>
                                <th class="header" style="width: 3%;">Antrian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hasil_cari_pasien as $pasien){?>
                            <tr class="even">
                                <td class="align-center">1</td>
                                <td><a class="popup" href="index.php/pasien/profil_pasien"><?php echo "annisa";?></a></td>
                                <td>19 th</td>
                                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                <td><a class="popup" href="index.php/kk/profil_kk">Dimas Putera</a></td>
                                <td align="center">
                                    <a class="popup" id="test" href="index.php/pasien/registrasi_kunjungan">
                                        <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
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
                    </div>
            </div>

        </div>
    </div>
</div>
<!--KIRI AKHIR -->


<!-- KANAN -->
<div>
    <div class="grid_6" style="width: 45%">
        <div class="module">
            <h2><span>Antrian Sekarang</span></h2>
            <div style="clear: both"></div>

            <div id="tabs">
                <ul>
                    <li><a href="#tabs-a">Poli Gigi</a></li>
                    <li><a href="#tabs-b">Poli KIA</a></li>
                    <li><a href="#tabs-c">Poli Umum</a></li>
                    <li><a href="#tabs-d">Lab</a></li>
                    <li><a href="#tabs-e">Radiologi</a></li>
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
                    <div style="width: 100%">
                        <h4 align="right">Total Pasien: 5 orang</h4>
                        
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 13%;">Nama</th>
                                    <th class="header" style="width: 1%;">Umur</th>
                                    <th class="header" style="width: 10%;">Alamat</th>
                                    <th class="header" style="width: 10%;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a class="popup" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
                                </tr>
                                <tr class="odd">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
                                </tr>

                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
                                </tr>
                                <tr class="odd">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Sedang diperiksa</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
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
                </div>
                <div id="tabs-b">
                    <div style="width: 100%">
                        <h4 align="right">Total Pasien: 5 orang</h4>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 12%;">Nama</th>
                                    <th class="header" style="width: 1%;">Umur</th>
                                    <th class="header" style="width: 22%;">Alamat</th>
                                    <th class="header" style="width: 8%;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
                                </tr>

                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Sedang diperiksa</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Cibogor</td>
                                    <td>Antri</td>
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
                </div>
                <div id="tabs-c">
                    <div style="width: 100%">
                        <h4 align="right">Total Pasien: 5 orang</h4>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 12%;">Nama</th>
                                    <th class="header" style="width: 1%;">Umur</th>
                                    <th class="header" style="width: 22%;">Alamat</th>
                                    <th class="header" style="width: 8%;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>

                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Sedang diperiksa</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
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
                </div>
                <div id="tabs-d">
                    <div style="width: 100%">
                        <h4 align="right">Total Pasien: 5 orang</h4>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 12%;">Nama</th>
                                    <th class="header" style="width: 1%;">Umur</th>
                                    <th class="header" style="width: 22%;">Alamat</th>
                                    <th class="header" style="width: 8%;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>

                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Sedang diperiksa</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
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
                </div>
                <div id="tabs-e">
                    <div style="width: 100%">
                        <h4 align="right">Total Pasien: 5 orang</h4>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 12%;">Nama</th>
                                    <th class="header" style="width: 1%;">Umur</th>
                                    <th class="header" style="width: 22%;">Alamat</th>
                                    <th class="header" style="width: 8%;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>

                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Sedang diperiksa</td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td>Antri</td>
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
                </div>



            </div>
            <div style="clear: both"></div>

        </div>

    </div>
</div>
<!--KANAN AKHIR -->






<div class="module" style="float: left; width: 40%">

    <link type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />

    <script>
        $(function() {
            $( "#tabs1" ).tabs();
            $( "#tabs" ).tabs();
        });
    </script>



    <!-- End demo -->
</div>

</body>
</html>
