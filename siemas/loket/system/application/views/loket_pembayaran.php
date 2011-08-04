<?php $this->load->view('header');?>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->

<br/>
<div class="container_12">
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>PEMBAYARAN</span></h2>
                <div class="module-body">
                    <h4>Cari Pasien </h4>
                    <form name="cari_pasien_pembayaran" method="post" action="">
                        <table class="noborder" style="width: 28%">
                            <tr>
                                <td width="137">Nama</td>
                                <td width="16">:</td>
                                <td width="216"><input type="text" class="input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Poli</td>
                                <td>:</td>
                                <td>
                                    <select>
                                        <option>GIGI</option>
                                        <option>KIA</option>
                                        <option>LAB</option>
                                        <option>RADIOLOGI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>
                                    <div align="right">
                                        <input class="submit-green" type="submit" value="Cari" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div>
                        <p>Total Pasien: <strong>5 orang</strong></p>
                        <table id="myTable" class="tablesorter" style="width: 85%;">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 1%;">No</th>
                                    <th class="header" style="width: 5%;">Poli</th>
                                    <th class="header" style="width: 10%;">Nama</th>
                                    <th class="header" style="width: 4%;">Umur</th>
                                    <th class="header" style="width: 10%;">Alamat</th>
                                    <th colspan="2" class="header" style="width: 10%;">Total Harga</th>
                                    <th class="header" style="width: 10%;">Status Pembayaran</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div align="center">1</div></td>
                                    <td align="center">Gigi</td>
                                    <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien">Dimas Putera</a></td>
                                    <td align="center">21 th</td>
                                    <td>Pabaton</td>
                                    <td colspan="2">
                                        <div  align="center">
                                        <a class="button" href="index.php/pembayaran/input_pembayaran">
                                            <span><img width="15" height="15" src="Template_files/tambah.png" alt="Tambah"/> Data Pembayaran</span>
                                        </a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="Template_files/cross-on.gif"/>
                                        Belum Lunas
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td align="center">Gigi</td>
                                    <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                    <td align="center">19 th</td>
                                    <td>Cibogor</td>
                                    <td>Rp 15.000,-</td>
                                    <td align="center">
                                        <a class="popup" id="test" href="index.php/pembayaran/rincian">
                                            Rincian
                                        </a>
                                    </td>
                                    <td>
                                        <img src="Template_files/tick-on.gif"/>
                                        Lunas
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
</div>
</body>
</html>





