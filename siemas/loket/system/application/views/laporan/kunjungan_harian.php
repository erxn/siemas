<?php $this->load->view('header');?>
<style>
    .kotak {
        width: 70px;
        padding: 4px;
        display: inline-block;
        margin: 0px;
        -moz-border-radius: 10px;
        -moz-box-shadow: 1px 2px 10px #666666;
        text-decoration: none;
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
        font-size: 12px;
    }
    .kotak:hover {
        background: -moz-linear-gradient(top, #FFFFFF, #DDDDDD);
    }
    .current {
        width: 70px;
        padding: 4px;
        display: inline-block;
        margin: 0px;
        -moz-border-radius: 10px;
        -moz-box-shadow: 1px 2px 10px #9FCFE5;
        text-decoration: none;
        background: -moz-linear-gradient(top, #ffffff, #9FCFE5);
        font-size: 12px;
    }
</style>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<div style="font-size: 14px !important;padding: 4px; margin-left: 10px;"><a href="index.php/c_laporan">Laporan</a> > <a href="index.php/c_laporan/rekapitulasi_kunjungan">Kunjungan Harian</a> > Semua Pasien</div>
<!--<div style="font-size: 14px !important;padding: 2px; margin-left: 15px;"><a href="index.php/c_laporan">Laporan</a> > Rekapitulasi Kunjungan</div>-->
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>REKAPITULAS KUNJUNGAN HARIAN</span></h2>
                <div class="module-body">
                   <form action="" method="post">

                Pilih tanggal:
                <input type="text" id="datepicker" name="tgl_kunjungan" class="input-medium" value="<?php echo $tgl ?>"/>
                <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>
                <br/><br/>
                Pilih Jenis Pelayanan:
               <?php $this->load->view('pilih_layanan')?>
            </form>
            <br/>
            <hr/>
            <h3 align="right">Total Pasien: <?php echo count($all);?> orang</h3>
<table style="width: 99%" >
                <thead>
                    <tr>
                        <th style="width:2%">No</th>
                        <th style="width:8%">Id Pasien</th>
                        <th style="width:3%">No. Kunjungan</th>
                        <th style="width:13%">Nama Pasien</th>
                        <th style="width:20%">Alamat</th>
                        <th style="width:10%">Status Pelayanan</th>
                        <th style="width:6%">Kartu</th>
                        <th style="width:6%">Poli Tujuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($all)) { foreach ($all as $hasil) {?>
                    <tr class="<?if($i%2==0) echo "odd"; else echo "even";?>">
                        <td class="align-center"><?php echo $i++; ?></td>
                        <td><?php echo $hasil['kode_pasien']?></td>
                        <td class="align-center"class="align-center"><?php echo $hasil['no_kunjungan'];?></td>
                        <td><a class="popup" href="index.php/pasien/profil_pasien/<?php echo $hasil['id_KK']."/".$hasil['id_pasien'];?>">
                            <?php echo $hasil['nama_pasien'];?></a>
                            <br/>
                            <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $hasil['jk_pasien'] . ', ' . $hasil['umur'] . ' th'; ?></small>
                        </td>
                        <td><?php echo $hasil['alamat_kk']." Kel. ".$hasil['kelurahan_kk'].", Kec. ".$hasil['kecamatan_kk'].", ".$hasil['kota_kab_kk'];?></td>
                        <td align="center"><?php echo $hasil['status_pelayanan']?><br/>
                            <small style="font-size: 12px; color: #777777; font-weight: normal"><?php echo $hasil['no_kartu_layanan']?></small>
                        </td>
                        <td align="center"><?php if($hasil['status_pelayanan'] == 'Umum' || $hasil['status_pelayanan'] == 'Lain-lain') echo '-'; else if($hasil['status_bawa_kartu']=='Tidak') echo 'Tidak Bawa'; else echo '-'?></td>
                        <td class="align-center"><?php echo $hasil['nama_poli']?></td>
                    </tr>
                    <?php }}else { ?>
                            <tr>
                                <td></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
