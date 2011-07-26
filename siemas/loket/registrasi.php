<?php include 'header.php';?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->


<!-- ISI -->
<div class="container_12">
    <div>
        <!--KIRI -->
        <div>
            <div class="grid_6" style="width: 48%">
                <div class="module">
                    <h2><span>Pendaftaran Pasien</span></h2>
                    <div class="module-body">
                        <table id="form_cari" class="noborder" style="width: 80%;">
                            <tr>
                                <td style="width: 30%;">ID Pasien</td>
                                <td style="width: 10%;">:</td>
                                <td style="width: 20%;"><input type="text" class="input-medium"/></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" class="input-medium" /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><input type="text" class="input-medium" /></td>
                                <td><div align="right">
                                        <input class="submit-green" type="submit" value="Cari" />
                                    </div></td>
                            </tr>

                        </table>
                        <hr style="width: 100%; border: 1px solid #cccccc"></hr>

                        <br/>
                        <h4  class="float-right">Hasil Pencarian: 5 orang</h4>
                        <div class="float-left">

                            <a class="tambah" href="registrasi.php">
                                <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/> Pasien Baru
                            </a>
                        </div>
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
                                <tr class="even">
                                    <td class="align-center">1</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                    <td align="center">
                                        <a id="test" href="reg_kunjungan.php">
                                            <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="align-center">2</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                    <td align="center">
                                        <a id="test" href="reg_kunjungan.php">
                                            <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="align-center">3</td>
                                    <td><a href="">Meri Marlina</a></td>
                                    <td>19 th</td>
                                    <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                                    <td><a href="">Dimas Putera</a></td>
                                    <td align="center">
                                        <a id="test" href="reg_kunjungan.php">
                                            <img width="20" height="20" src="Template_files/tambah.png" alt="Tambah"/>
                                        </a>
                                    </td>
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
        </div>
    </div>
    <!--KIRI AKHIR -->
    <!-- KANAN -->
    <div>
        <div class="grid_6" style="width: 48%">
            <div class="module">
                <h2><span>ANTRIAN SEKARANG</span></h2>
                <div class="module-body">
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
        </div>
    </div>
    <!--KANAN AKHIR -->
</div>
</div>
</body>
</html>
