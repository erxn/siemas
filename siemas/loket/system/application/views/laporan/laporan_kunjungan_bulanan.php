<?php $this->load->view('header');?>
<!-- SUBNAV -->
<?php $this->load->view('subnav_laporan');?>
<!-- END SUBNAV -->


<br/>
<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Laporan Kunjungan Bulanan</span></h2>
            <div class="module-body">
                 <form method="post" action="index.php/c_laporan/laporan_kunjungan_bulanan">
                    <table class="noborder" style="width: 100%">
                        <tr>
                            <td width="11%">Pilih Bulan/Tahun</td>
                            <td>:</td>
                            <td width="11%">
                                <?php $bulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sept','Okt','Nov','Des'); ?>
                                <select name="bulan_kunjungan" style="width: 100%">
                                    <?php for($i=1;$i<=12;$i++) {?>
                                    <option  value="<?php echo $i; ?>" <?php if($laporan[0]['bulan'] == $i) echo 'selected="selected"' ?>><?php echo $bulan[$i]; ?></option>
                                        <?php } ?>
                                </select>
                            </td>
                            <td width="11%">
                                <select name="tahun_kunjungan" style="width: 100%">
                                    <?php foreach($tahun as $thn) {?>
                                    <option value="<?php echo $thn['tahun'];?>" <?php if($laporan[0]['tahun'] == $thn) echo 'selected="selected"' ?>><?php echo $thn['tahun'];?></option>
                                        <?php }?>
                                </select>
                            </td>
                            <td width="7%">
                                <div align="right">
                                    <input type="submit" value="Pilih" class="submit-green" name="pilih">
                                </div>
                            </td>
                            <td align="right" width="67%">
                                <a href="index.php/c_laporan/kunjungan_bulanan_xls/<?php echo intval($laporan[0]['bulan'])."/".$laporan[0]['tahun']?>" class="submit-green xls-button" style="margin-left: 10px" title="Simpan sebagai file Excel">
                                    <img src="images/ms-excel.png" alt=""/>
                                    Simpan ke Excel
                                </a>
                            </td>
                        </tr>
                    </table>
                    </form>
                <hr/>
                <?php $nama_bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

                        ?>
                <h3 align="center"><strong>LAPORAN KUNJUNGAN PUSKESMAS BOGOR TENGAH</strong></h3>
                <h3 align="center"><strong>BULAN: <?php echo $nama_bulan[intval($laporan[0]['bulan'])]." ".$laporan[0]['tahun']?></strong></h3>
                <br/>
                <table height="317" style="width: 50%; font-size: 15px;">
                    <thead>
                        <tr>
                            <th class="header" width="40%" rowspan="2"><div align="center"><strong>JENIS KUNJUNGAN</strong></div></th>
                            <th class="header" width="20%" rowspan="2"><div align="center"><strong>ASKES</strong></div></th>
                            <th class="header" colspan="2"><div align="center"><strong>GRATIS</strong></div></th>
                            <th class="header" width="20%" rowspan="2"><div align="center"><strong>BAYAR</strong></div></th>
                        </tr>
                        <tr>
                            <th class="header" width="20%"><div align="center"><strong>ASKESKIN</strong></div></th>
                            <th class="header" width="20%"><div align="center"><strong>LAIN-LAIN</strong></div></th>
                        </tr>
                    </thead>
                    <tr>
                        <td>BP Umum</td>
                        <td align="center"><?php echo $laporan[0]['umum_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['umum_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>BP Gigi</td>
                        <td align="center"><?php echo $laporan[0]['gigi_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['gigi_bayar']?></td>
                    </tr>
                    <tr>
                        <td>KIA</td>
                        <td align="center"><?php echo $laporan[0]['kia_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['kia_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Laboratorium</td>
                        <td align="center"><?php echo $laporan[0]['lab_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['lab_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['lab_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['lab_bayar']?></td>
                    </tr>
                    <tr>
                        <td>RB</td>
                        <td align="center"><?php echo $laporan[0]['rb_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['rb_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['rb_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['rb_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Haji</td>
                        <td align="center"><?php echo $laporan[0]['haji_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['haji_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['haji_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['haji_bayar']?></td>
                    </tr>
                    <tr>
                        <td>EKG</td>
                        <td align="center"><?php echo $laporan[0]['ekg_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['ekg_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['ekg_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['ekg_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Spesialis anak</td>
                        <td align="center"><?php echo $laporan[0]['anak_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['anak_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['anak_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['anak_bayar']?></td>
                    </tr>
                    <tr>
                        <td>Spesialis Dalam</td>
                        <td align="center"><?php echo $laporan[0]['dalam_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['dalam_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['dalam_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['dalam_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Rontgen</td>
                        <td align="center"><?php echo $laporan[0]['rontgen_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_bayar']?></td>
                    </tr>
                    <tr>
                        <td>Rontgen Gigi</td>
                        <td align="center"><?php echo $laporan[0]['rontgen_gigi_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_gigi_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_gigi_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['rontgen_gigi_bayar']?></td>
                    </tr>
                    <tr class="odd">
                        <td>Rujukan</td>
                        <td align="center"><?php echo $laporan[0]['rujukan_askes']?></td>
                        <td align="center"><?php echo $laporan[0]['rujukan_askeskin']?></td>
                        <td align="center"><?php echo $laporan[0]['rujukan_gr']?></td>
                        <td align="center"><?php echo $laporan[0]['rujukan_bayar']?></td>
                    </tr>
                    <tr>
                        <td><div align="center"><strong>JUMLAH</strong></div></td>
                        <td style="font-weight: bold" align="center"><?php echo $laporan[0]['rontgen_askes']+$laporan[0]['dalam_askes']+$laporan[0]['anak_askes']+$laporan[0]['ekg_askes']+$laporan[0]['lab_askes']+$laporan[0]['lab_askes']+$laporan[0]['umum_askes']+$laporan[0]['gigi_askes']+$laporan[0]['kia_askes']+$laporan[0]['rb_askes']+$laporan[0]['haji_askes']+$laporan[0]['rujukan_askes']+$laporan[0]['rontgen_gigi_askes'];?></td>
                        <td style="font-weight: bold" align="center"><?php echo $laporan[0]['rontgen_askeskin']+$laporan[0]['dalam_askeskin']+$laporan[0]['anak_askeskin']+$laporan[0]['ekg_askeskin']+$laporan[0]['lab_askeskin']+$laporan[0]['lab_askeskin']+$laporan[0]['umum_askeskin']+$laporan[0]['gigi_askeskin']+$laporan[0]['kia_askeskin']+$laporan[0]['rb_askeskin']+$laporan[0]['haji_askeskin']+$laporan[0]['rujukan_askeskin']+$laporan[0]['rontgen_gigi_askeskin'];?></td>
                        <td style="font-weight: bold" align="center"><?php echo $laporan[0]['rontgen_gr']+$laporan[0]['dalam_gr']+$laporan[0]['anak_gr']+$laporan[0]['ekg_gr']+$laporan[0]['lab_gr']+$laporan[0]['lab_gr']+$laporan[0]['umum_gr']+$laporan[0]['gigi_gr']+$laporan[0]['kia_gr']+$laporan[0]['rb_gr']+$laporan[0]['haji_gr']+$laporan[0]['rujukan_gr']+$laporan[0]['rontgen_gigi_gr'];?></td>
                        <td style="font-weight: bold" align="center"><?php echo $laporan[0]['rontgen_bayar']+$laporan[0]['dalam_bayar']+$laporan[0]['anak_bayar']+$laporan[0]['ekg_bayar']+$laporan[0]['lab_bayar']+$laporan[0]['lab_bayar']+$laporan[0]['umum_bayar']+$laporan[0]['gigi_bayar']+$laporan[0]['kia_bayar']+$laporan[0]['rb_bayar']+$laporan[0]['haji_bayar']+$laporan[0]['rujukan_bayar']+$laporan[0]['rontgen_gigi_bayar'];?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

