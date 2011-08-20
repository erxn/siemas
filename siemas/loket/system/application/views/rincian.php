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

<div>
    <div class="grid_6" style="width: 98%">
        <div class="module">
            <h2><span>RINCIAN BIAYA</span></h2>
            <div class="module-body">
                <table class="noborder" style="font-size: 16px !important">
                    <tr class="odd">
                        <td style="width: 25% ">Tgl Kunjungan</td>
                        <td style="width: 3%">:</td>
                        <td style="width: 40"><?php echo tgl_indo($rincian[0]['tanggal_kunjungan'])?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Nama Pasien</b></td>
                        <td>:</td>
                        <td><b><?php echo $pasien[0]['nama_pasien']?></b></td>
                        <td></td>
                    </tr>
                    <tr  class="odd">
                        <td>No. Kunjungan</td>
                        <td>:</td>
                        <td><?php echo $rincian[0]['no_kunjungan']?></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><?php echo $pasien[0]['umur']. " tahun"?></td>
                        <td></td>
                    </tr>
                    <tr  class="odd">
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Cibogor</td>
                        <td></td>
                    </tr>
                    <tr>
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
                <?php if($status == "Lunas"){?>
                <div>
                    <span class="notification n-success" style="height: 5px; width: 78%">PEMBAYARAN LUNAS</span>
                </div>
                <?php }?>
                <h2 id="total_harga" align="right"  style="width: 70%; float: none !important">Total: Rp <?php  echo number_format($total[0]['total_harga'])?> </h2>

                <table style="width: 70%">
                    <thead>
                        <tr>
                            <th class="header" style="width: 5%;">No.</th>
                            <th class="header" style="width: 20%;">Poli</th>
                            <th class="header" style="width: 50%;">Pelayanan</th>
                            <th class="header" style="width: 30%;">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                        if(isset($rincian)) foreach($rincian as $rinci) {?>
                        <tr class="<?php if($i%2==0) echo "odd"; else echo "even"?>" style="font-size: 14px !important">
                            <td class="align-center"><?php echo $i++?></td>
                            <td><?php echo $rinci['poli']?></td>
                            <td><?php echo $rinci['nama_layanan']?></td>
                            <td class="align-right"><?php  echo number_format($rinci['harga_layanan'])?></td>
                        </tr>
                                <?php }?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


