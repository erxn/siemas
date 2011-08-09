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
                    <table class="noborder">
                        <tr class="odd">
                            <td style="width: 15% ">Tgl Kunjungan</td>
                            <td style="width: 3%">:</td>
                            <td style="width:40% "><?php echo tgl_indo($kunjungan[0]['tanggal_kunjungan'])?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Pasien</td>
                            <td>:</td>
                            <td><?php echo $pasien[0]['nama_pasien']?></td>
                            <td></td>
                        </tr>
                        <tr class="odd">
                            <td>Umur</td>
                            <td>:</td>
                            <td><?php echo $pasien[0]['umur']?> tahun</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $pasien[0]['alamat_kk'].", Kel. ".$pasien[0]['kelurahan_kk']." Kec. ".$pasien[0]['kecamatan_kk'].", Kab/Kota ".$pasien[0]['kota_kab_kk']?></td>
                            <td></td>
                        </tr>
                        <tr class="odd">
                            <td>Status Pelayanan</td>
                            <td>:</td>
                            <td>Umum</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <form method="post" action="index.php/pembayaran">
                    <div style="width: 60%">
                        <h2 id="total_harga" align="right">TOTAL: Rp <?php  echo number_format($kunjungan[0]['total_harga']) ?></h2>
                        <br/>
                        <table id="myTable" class="tablesorter" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="header" style="width: 5%;">No.</th>
                                    <th class="header" style="width: 15%;">Poli</th>
                                    <th class="header" style="width: 30%;">Pelayanan</th>
                                    <th class="header" style="width: 25%;">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="even">
                                    <td class="align-center">1</td>
                                    <td>GIGI
                                    </td>
                                    <td>Tambal Amalgam</td>
                                    <td>Rp 60.000,-</td>
                                </tr>
                                <tr class="odd">
                                    <td class="align-center">2</td>
                                    <td><select name="poli">
                                            <option value="gigi">GIGI</option>
                                            <option value="kia">KIA</option>
                                            <option value="umum">Umum</option>
                                            <option value="lab">Laboratorium</option>
                                            <option value="radiologi">Radiologi</option>
                                        </select>
                                    </td>
                                    <td><input type="text" style="width: 80%" name="pelayanan1" class="input-medium"/></td>
                                    <td>Rp <input type="text" name="harga1"  class="input-medium" value="10000"/></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="right"><a href="#">Tambah</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div align="right">
                            <input name="submit" align="right" class="submit-green" type="submit" value="LUNAS" />
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


