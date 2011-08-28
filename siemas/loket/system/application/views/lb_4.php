<?php $this->load->view('header');?>
<!-- SUBNAV -->
<?php $this->load->view('subnav_laporan');?>
<!-- END SUBNAV -->
<div style="font-size: 14px !important;padding: 4px; margin-left: 10px;"><a href="index.php/c_laporan">Laporan</a> > <a href="index.php/c_laporan/rekapitulasi_kunjungan">Rekapitulasi Kunjungan</a> > JAMKESMAS</div>
<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Laporan Kunjungan: JAMKESMAS</span></h2>
            <div class="module-body">
<form method="post" action="">
                    <table class="noborder" style="width: 35%">
                        <tr>
                            <td>Pilih Bulan/Tahun</td>
                            <td>:</td>
                            <td>
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_kunjungan" style="width: 100%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option  value="<?php echo $i; ?>" <?php if($laporan[0]['bulan'] == $i) echo 'selected="selected"' ?>><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                            </td>
                            <td>
                                <select name="tahun_kunjungan" style="width: 100%">
                                    <?php foreach($tahun as $thn) {?>
                                    <option value="<?php echo $thn['tahun'];?>" <?php if($laporan[0]['tahun'] == $thn) echo 'selected="selected"' ?>><?php echo $thn['tahun'];?></option>
                                        <?php }?>
                                </select>
                            </td>
                            <td>
                                <div align="right">
                                    <input type="submit" value="Pilih" class="submit-green" name="pilih">
                                </div>
                            </td>
                        </tr>
                    </table>
                    </form>
                <hr/>
                <?php $nama_bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

                        ?>
                <h3 align="center"><strong>LAPORAN BULANAN PEMBERANTASAN PENCEGAHAN PENYAKIT</strong></h3>
                <h3 align="center"><strong>BULAN: <?php echo $nama_bulan[intval($laporan[0]['bulan'])]." ".$laporan[0]['tahun']?></strong></h3>
                <br/>
                <table height="317" class="tablesorter" id="myTable" style="width: 100%; font-size: 15px;">
                    <thead>
                    <tr>
                        <th style="font-size: 15px;" rowspan="2"><div align="center"><strong>No</strong></div>      <div align="center"></div></th>
                        <th style="font-size: 15px;" rowspan="2"><div align="center"><strong>Kegiatan</strong></div>      <div align="center"></div></th>
                        <th style="font-size: 15px;" colspan="2"><div align="center"><strong>Kel. PABATON</strong></div></th>
                        <th style="font-size: 15px;" colspan="2"><div align="center"><strong>Kel. CIBOGOR</strong></div></th>
                        <th style="font-size: 15px;" colspan="2"><div align="center"><strong>Luar Wilayah</strong></div></th>
                        <th style="font-size: 15px;" colspan="2"><div align="center"><strong>Kab</strong></div></th>
                        <th style="font-size: 15px;" colspan="2"><div align="center"><strong>Jumlah</strong></div></th>
                        <th style="font-size: 15px;" rowspan="2"><div align="center"><strong>TOTAL</strong></div>      <div align="center"></div></th>
                    </tr>
                    <tr>
                        <th><div align="center"><strong>GAKIN</strong></div></th>
                        <th><div align="center"><strong>NON GAKIN</strong></div></th>
                        <th><div align="center"><strong>GAKIN</strong></div></th>
                        <th><div align="center"><strong>NON GAKIN</strong></div></th>
                        <th><div align="center"><strong>GAKIN</strong></div></th>
                        <th><div align="center"><strong>NON GAKIN</strong></div></th>
                        <th><div align="center"><strong>GAKIN</strong></div></th>
                        <th><div align="center"><strong>NON GAKIN</strong></div></th>
                        <th><div align="center"><strong>GAKIN</strong></div></th>
                        <th><div align="center"><strong>NON GAKIN</strong></div></th>
                    </tr>
                    </thead>
                    <tr>
                        <td><div align="center">1</div></td>
                        <td>KUNJUNGAN PUSKESMAS</td>
                        <td align="center"><?php echo $laporan[0]['kunj_gakin_pab']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_ngakin_pab']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_gakin_cib']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_ngakin_cib']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_gakin_lw']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_ngakin_lw']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_gakin_lk']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_ngakin_lk']?></td>
                        <td align="center">&nbsp;</td>
                        <td align="center">&nbsp;</td>
                        <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">2</div></td>
                        <td>Kunjungan Puskesmas</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">3</div></td>
                        <td>Kunjungan Baru</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">4</div></td>
                        <td>Kunjungan Lama</td>
                        <td align="center"><?php echo $laporan[0]['kunj_lama_g_pab']?></td>
                        <td align="center"><?php echo $laporan[0]['kunj_lama_ng_pab']?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">5</div></td>
                        <td>Kunjungan Rawat Jalan Umum</td>
                        <td align="center"><?php echo $laporan[0]['umum_pab_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_pab_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_cib_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_cib_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_lw_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_lw_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_lk_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_lk_ngakin']?></td>
                        <?php $jum_gakin = $laporan[0]['umum_pab_gakin']+$laporan[0]['umum_cib_gakin']+$laporan[0]['umum_lw_gakin']+$laporan[0]['umum_lk_gakin']?>
                        <td align="center"><?php echo $jum_gakin;?></td>
                        <?php $jum_ngakin = $laporan[0]['umum_pab_ngakin']+$laporan[0]['umum_cib_ngakin']+$laporan[0]['umum_lw_ngakin']+$laporan[0]['umum_lk_ngakin']?>
                        <td align="center"><?php echo $jum_ngakin;?></td>
                        <td align="center"><?php echo $jum_gakin+$jum_ngakin;?></td>
                    </tr>
                    <tr>
                        <td><div align="center">6</div></td>
                        <td>Kunjungan Rawat Jalan KIA</td>
                        <td align="center"><?php echo $laporan[0]['kia_pab_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_pab_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_cib_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_cib_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_lw_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_lw_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_lk_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_lk_ngakin']?></td>
                        <?php $jum_gakin = $laporan[0]['kia_pab_gakin']+$laporan[0]['kia_cib_gakin']+$laporan[0]['kia_lw_gakin']+$laporan[0]['kia_lk_gakin']?>
                        <td align="center"><?php echo $jum_gakin;?></td>
                        <?php $jum_ngakin = $laporan[0]['kia_pab_ngakin']+$laporan[0]['kia_cib_ngakin']+$laporan[0]['kia_lw_ngakin']+$laporan[0]['kia_lk_ngakin']?>
                        <td align="center"><?php echo $jum_ngakin;?></td>
                        <td align="center"><?php echo $jum_gakin+$jum_ngakin;?></td>
                    </tr>
                    <tr>
                        <td><div align="center">7</div></td>
                        <td>Kunjungan Rawat Jalan KB</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">8</div></td>
                        <td>Kunjungan Rawat Jalan Gigi</td>
                        <td align="center"><?php echo $laporan[0]['gigi_pab_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_pab_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_cib_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_cib_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_lw_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_lw_ngakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_lk_gakin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_lk_ngakin']?></td>
                        <?php $jum_gakin = $laporan[0]['gigi_pab_gakin']+$laporan[0]['gigi_cib_gakin']+$laporan[0]['gigi_lw_gakin']+$laporan[0]['gigi_lk_gakin']?>
                        <td align="center"><?php echo $jum_gakin;?></td>
                        <?php $jum_ngakin = $laporan[0]['gigi_pab_ngakin']+$laporan[0]['gigi_cib_ngakin']+$laporan[0]['gigi_lw_ngakin']+$laporan[0]['gigi_lk_ngakin']?>
                        <td align="center"><?php echo $jum_ngakin;?></td>
                        <td align="center"><?php echo $jum_gakin+$jum_ngakin;?></td>
                    </tr>
                    <tr>
                        <td><div align="center">9</div></td>
                        <td>Kunjungan Lain-lain/RB</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">10</div></td>
                        <td>Penderita yg dirawat</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">11</div></td>
                        <td>Hari Perawatan</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">12</div></td>
                        <td>Lama Perawatan</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">13</div></td>
                        <td>Penderita keluar hidup</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">14</div></td>
                        <td>Penderita Keluar meninggal kurang dari 48 jam</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">15</div></td>
                        <td>Penderita Keluar meninggal lebih dari 48 jam</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">16</div></td>
                        <td>Penderita yang dirujuk ke Rumah sakit/Puskesmas DTP</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">17</div></td>
                        <td>Rujukan dari kader,Pos yandu,BP,Sekolah,dll</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">18</div></td>
                        <td>Kunjungan dokter ahli</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">19</div></td>
                        <td>Rujukan dari Rumah Sakit ke Puskesmas</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">20</div></td>
                        <td>Kunjungan Kartu Sehat</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">21</div></td>
                        <td>Kunjungan Peserta ASKES</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">22</div></td>
                        <td>Kunjungan Peserta Jamsostek</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">23</div></td>
                        <td>Kunjungan Peserta J P K M</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">24</div></td>
                        <td>Kunjungan peserta Asuransi Kesehatan Swasta</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">25</div></td>
                        <td>Kunjungan Peserta Asuransi Lainnya</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">26</div></td>
                        <td>Kunjungan Kartu Sehat terdaftar di Puskesmas</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><div align="center">27</div></td>
                        <td>Peserta Kartu Sehat yg dirujuk ke Rumah sakit/Puskesmas DTP</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                      <td colspan="2"><div align="center"><strong>JUMLAH</strong></div></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                </table>
          </div>
        </div>
    </div>
</div>
