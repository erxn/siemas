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
<script>
    
</script>
<br/>
        <div class="container_12">
            <div>
                <div class="grid_6" style="width: 98%">
                    <div class="module">
                        <h2><span>PEMBAYARAN</span></h2>
                        <div class="module-body">
                            <table class="noborder" style="width: 28%">
                                <tr>
                                    <td width="137">Nama</td>
                                    <td width="16">:</td>
                                    <td width="216"><input type="text" class="input-medium"/></td>
                                </tr>
                                <tr>
                                    <td>Poli</td>
                                    <td>:</td>
                                    <td><form>
                                            <select>
                                                <option>GIGI</option>
                                                <option>KIA</option>
                                                <option>LAB</option>
                                                <option>RADIOLOGI</option>
                                            </select>
                                        </form>    </td>
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
                            <div>
                                <p>Total Pasien: <strong>5 orang</strong></p>
                                <table id="myTable" class="tablesorter" style="width: 80%;">
                                    <thead>
                                        <tr>
                                            <th class="header" style="width: 1%;">No</th>
                                            <th class="header" style="width: 12%;">Nama</th>
                                            <th class="header" style="width: 7%;">Umur</th>
                                            <th class="header" style="width: 13%;">Alamat</th>
                                            <th class="header" style="width: 8%;">Poli</th>
                                            <th class="header" style="width: 9%;" colspan="3">Total Harga</th>
                                            <th class="header" style="width: 3%;">Status Pembayaran</th>
                                        </tr>
                                    </thead>

                                    <tr>
                                        <td><div align="center">1</div></td>
                                        <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a class="popup" id="test" href="index.php/pembayaran/rincian">
                                                Rincian
                                            </a>
                                        </td>
                                        <td>
                                            <img src="Template_files/tick-cir.gif"/>
                                            Lunas
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div align="center">2</div></td>
                                        <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien">Meri Marlina</a></td>
                                        <td>19 tahun</td>
                                        <td>Cibogor</td>
                                        <td>Gigi</td>
                                        <td width="35"><div align="right">Rp</div></td>
                                        <td width="61"><div align="right">15.000 </div></td>
                                        <td align="center">
                                            <a class="popup" id="test" href="index.php/pembayaran/rincian">
                                                Rincian
                                            </a>
                                        </td>
                                        <td>
                                            <img src="Template_files/cross-on.gif"/>
                                            Lunas
                                        </td>
                                    </tr>
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





