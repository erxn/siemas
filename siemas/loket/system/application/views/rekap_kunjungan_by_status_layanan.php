<?php $this->load->view('header');?>
<!-- SUBNAV -->
<?php $this->load->view('subnav_laporan');?>
<!-- END SUBNAV -->

<br/>
<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>Rekapitulasi Kunjungan: ASKES</span></h2>
            <div class="module-body">
                <div>
                    <form method="post" action="index.php/c_laporan/rekap_status_askes_poli">
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
                                        <option value="<?php echo $thn['tahun'];?>"  <?php if($laporan[0]['tahun'] == $thn) echo 'selected="selected"' ?>><?php echo $thn['tahun'];?></option>
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
                    
                    <div align="right" style="font-size: 14px;"><a href="index.php/c_laporan/rekapitulasi_kunjungan">Rekap Pasien UMUM</a> <b>&nbsp;|&nbsp;</b> <a href="index.php/c_laporan/rekapitulasi_kunjungan"> Rekap Pasien JAMKESMAS</a></div>
                    <hr/>
                </div>
                <?php $nama_bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

                        ?>
                <h3 align="center" class="style2">REKAPITULASI KUNJUNGAN PUSKESMAS BOGOR TENGAH</h3>
                <h3 align="center"><strong>BULAN: <?php echo $nama_bulan[intval($laporan[0]['bulan'])]." ".$laporan[0]['tahun']?></strong></h3>
                <br/>
                <table style="width: 100%" border="1">
                    <thead>
                        <tr>
                            <th rowspan="2"><div align="center"><strong>Tgl</strong></div></th>
                            <th rowspan="2"><div align="center"><strong>Jml ASKES</strong></div></th>
                            <th colspan="2"><div align="center"><strong>UMUM</strong></div></th>
                            <th colspan="4"><div align="center"><strong>ASKES GIGI</strong></div></th>
                            <th colspan="4"><div align="center"><strong>ASKES KIA</strong></div></th>
                            <th rowspan="2"><div align="center"><strong>Rujukan</strong></div></th>
                            <th colspan="2"><div align="center"><strong>ASKESKIN</strong></div></th>
                            <th rowspan="2"><div align="center"><strong>GR</strong></div></th>
                        </tr>
                        <tr>
                            <th><div align="center"><strong>Pab</strong></div></th>
                            <th><div align="center"><strong>Cib</strong></div></th>
                            <th><div align="center"><strong>Pab</strong></div></th>
                            <th><div align="center"><strong>Cib</strong></div></th>
                            <th><div align="center"><strong>LPKM</strong></div></th>
                            <th><div align="center"><strong>L. Kota</strong></div></th>
                            <th><div align="center"><strong>Pab</strong></div></th>
                            <th><div align="center"><strong>Cib</strong></div></th>
                            <th><div align="center"><strong>LPKM</strong></div></th>
                            <th><div align="center"><strong>L. Kota</strong></div></th>
                            <th><div align="center"><strong>Pab</strong></div></th>
                            <th><div align="center"><strong>Cib</strong></div></th>
                        </tr>
                    </thead>
                    <?php $askes = 0;
                          $umum_pab=0;$umum_cib=0;  $gigi_pab=0;$gigi_cib=0; $gigi_LW=0; $gigi_LK=0;
                          $kia_cib=0;$kia_pab=0;$kia_LW=0;$kia_LK=0;$rjk_cib=0;$rujuk=0;
                          $jam_pab=0;$jam_cib=0;$gr=0;
                          
                          $i=1; foreach($laporan as $lap){?>
                          
                    <tr class="<?php if($i%2==0) echo "odd"?>">
                        <td align="center" width="5%"><b><?php echo $i++;?></b></td>
                        <td align="center" width="6%"><?php echo $lap['askes']?></td>
                        <td align="center" width="6%"><?php echo $lap['umum_pab']?></td>
                        <td align="center" width="6%"><?php echo $lap['umum_cib']?></td>
                        <td align="center" width="6%"><?php echo $lap['gigi_pab']?></td>
                        <td align="center" width="6%"><?php echo $lap['gigi_cib']?></td>
                        <td align="center" width="6%"><?php echo $lap['gigi_LW']?></td>
                        <td align="center" width="6%"><?php echo $lap['gigi_LKot']?></td>
                        <td align="center" width="6%"><?php echo $lap['kia_pab']?></td>
                        <td align="center" width="6%"><?php echo $lap['kia_cib']?></td>
                        <td align="center" width="6%"><?php echo $lap['kia_LW']?></td>
                        <td align="center" width="6%"><?php echo $lap['kia_LKot']?></td>
                        <td align="center" width="6%"><?php echo $lap['rujuk']?></td>
                        <td align="center" width="6%"><?php echo $lap['jam_pab']?></td>
                        <td align="center" width="6%"><?php echo $lap['jam_cib']?></td>
                        <td align="center" width="6%"><?php echo $lap['gr']?></td>
                    </tr>

                    <?php
                        $askes  += $lap['askes'];
                        $umum_pab += $lap['umum_pab'];  $umum_cib += $lap['umum_cib'];
                        $gigi_pab += $lap['gigi_pab'];  $gigi_cib += $lap['gigi_cib'];
                        $gigi_LW += $lap['gigi_LW'];  $gigi_LK += $lap['gigi_LKot'];
                        $kia_pab += $lap['kia_pab'];  $kia_cib += $lap['kia_cib'];
                        $kia_pab += $lap['kia_LW'];  $kia_cib += $lap['kia_LKot'];
                        $rujuk += $lap['rujuk'];    $gr += $lap['gr'];
                        $jam_pab += $lap['jam_pab']; $jam_cib += $lap['jam_cib'];
                    }?>
                    <tr class="header">
                        <th align="center" width="5%"><b>Jumlah</b></th>
                        <th align="center" width="5%"><b><?php echo $askes?></b></th>
                        <th align="center" width="5%"><b><?php echo $umum_pab?></b></th>
                        <th align="center" width="5%"><b><?php echo $umum_cib?></b></th>
                        <th align="center" width="5%"><b><?php echo $gigi_pab?></b></th>
                        <th align="center" width="5%"><b><?php echo $gigi_cib?></b></th>
                        <th align="center" width="5%"><b><?php echo $gigi_LW?></b></th>
                        <th align="center" width="5%"><b><?php echo $gigi_LK?></b></th>
                        <th align="center" width="5%"><b><?php echo $kia_pab?></b></th>
                        <th align="center" width="5%"><b><?php echo $kia_cib?></b></th>
                        <th align="center" width="5%"><b><?php echo $kia_LW?></b></th>
                        <th align="center" width="5%"><b><?php echo $kia_LK?></b></th>
                        <th align="center" width="5%"><b><?php echo $rujuk?></b></th>
                        <th align="center" width="5%"><b><?php echo $jam_pab?></b></th>
                        <th align="center" width="5%"><b><?php echo $jam_cib?></b></th>
                        <th align="center" width="5%"><b><?php echo $gr?></b></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<th align="center" width="5%"><b></b></th>