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
                                <td width="216"><input name="nama" type="text" class="input-medium"/></td>
                            </tr>
                            <tr>
                                <td>Poli</td>
                                <td>:</td>
                                <td>
                                    <select namw="poli">
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
                                        <input name="cari" class="submit-green" type="submit" value="Cari" />
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
                               
                                <?php $i=1; foreach($pembayaran as $p){ ?>
                                <tr>
                                    <td><div align="center"><?php echo $i++?></div></td>
                                    <td align="center"><?php echo $p['nama_poli']?></td>
                                    <td><a class="popup" id="profil_pasien" href="index.php/pasien/profil_pasien/<?php echo $p['id_kk']."/".$p['id_pasien']?>"><?php echo $p['nama_pasien']?></a></td>
                                    <td align="center"><?php echo $p['umur']?> tahun</td>
                                    <td><?php echo $p['idkunjungan']?></td>
                                    <td colspan="2">
                                        <div  align="center">
                                            <?php if($p['status_pembayaran'] == "Belum Lunas"){?>
                                        <a class="button" href="index.php/pembayaran/input_pembayaran/<?php echo $p['idkunjungan']?>">
                                            <span><img width="15" height="15" src="Template_files/tambah.png" alt="Tambah"/> Data Pembayaran</span>
                                        </a>
                                            <?php } else if($p['status_pembayaran'] == "Lunas") { ?>
                                            <a href="index.php/pembayaran/rincian/<?php echo $p['idkunjungan']?>/rincian">Rincian</a>
                                            <?php }?>
                                        </div>
                                    </td>
                                    <td><?php if($p['status_pembayaran'] == "Lunas"){?>
                                        <img src="Template_files/tick-on.gif" alt="Lunas"/>
                                            Lunas
                                        <?php } else if($p['status_pembayaran'] == "Belum Lunas") {?>
                                            <img src="Template_files/cross-on.gif" alt="Belum Lunas"/>
                                            Belum Lunas
                                         <?php }?>
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
</body>
</html>





