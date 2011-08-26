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
<style>
    .kotak {
        width: 75px;
        padding: 6px;
        display: inline-block;
        margin: 9px;
        -moz-border-radius: 5px;
        -moz-box-shadow: 1px 3px 10px #666666;
        text-decoration: none;
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE);
        font-size: 12px;
    }
    .kotak:hover {
        background: -moz-linear-gradient(top, #FFFFFF, #DDDDDD);
    }
</style>


<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>PERMOHONAN ANALISA</span></h2>
        <div class="module-body" style="margin: 10px 0px 0px 30px !important">
            <table class="noborder" style="width: 85%">
                <tr>
                    <td style="width: 2%">
                        <div class="kotak" style="border: 0px solid fuchsia; width: 40px; height: 40px;padding: 2px; text-align: center; margin: 0 auto; font-size: 25px">
                            <b><?php echo $kunjungan[0]['no_kunjungan'];?></b>
                        </div>
                    </td>
                    <td style="width: 25%"><a href="#" style="font-size: 22px"><?php echo $pasien[0]['nama_pasien']?></a>
                        <br/>
                        <small style="font-size: 14px; color: #777777; font-weight: normal"><?php echo $pasien[0]['jk_pasien'].", ".$pasien[0]['umur']." th, ".$pasien[0]['kelurahan_kk']?></small>
                    </td>
                    <td align="right" style="width: 16%">
                            <table class="noborder" style="font-size: 14px">
                                <tr>
                                    <td style="width: 40% ">Tgl Permohonan</td>
                                    <td style="width: 3%">:</td>
                                    <td style="width:5% "><?php echo tgl_indo($kunjungan[0]['tanggal_kunjungan'])?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Status Pelayanan</td>
                                    <td>:</td>
                                    <td><?php echo $pasien[0]['status_pelayanan']?></td>
                                    <td></td>
                                </tr>
                                <tr  class="odd">
                                    <td>Dokter</td>
                                    <td>:</td>
                                    <td><input type="text" name="dokter" class="input-medium" /></td>
                                    <td></td>
                                </tr>
                            </table>
                        
                    </td>
                </tr>
            </table>

            <script type="text/javascript">


                var x = 6;

                function tambahPembayaran() {

                    $('#tr_'+x).fadeIn();
                    x++;

                }

            </script>

            <br/>
            <form method="post" action="">
                <div style="width: 85%">
                    <h2 id="total_harga" align="right">TOTAL: Rp <?php  echo number_format($kunjungan[0]['total_harga']) ?></h2>
                    <br/>
                    <table  style="width: 100%" >
                        <thead>
                            <tr style="font-size: 16px !important">
                                <th class="header" style="width: 5%;">No.</th>
                                <th class="header" style="width: 20%;">Pelayanan</th>
                                
                                <th class="header" style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;foreach($layanan as $layan){?>
                            <tr class=" <?if($i%2==0) echo "odd";?>">
                                <td class="align-center"><?php echo $i++; ?></td>
                                <td><?php echo $layan['nama_layanan']?></td>
                                
                                <td><a href="" class="button"><span>Input Hasil</span></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                    
                </div>
            </form>
        </div>
    </div>
</div>