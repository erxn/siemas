<?php $this->load->view('header');?>
<style>
    .kotak {
        width: 70px;
        height:20px;
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
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "dd-mm-yy"
        });
    });
</script>
<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span></span></h2>
                <div class="module-body">
                   <form action="" method="post">

                Pilih tanggal:
                <input type="text" id="datepicker" name="tgl_kunjungan" class="input-medium" value="<?php echo $tgl ?>"/>
                <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>
                <br/><br/>
                Pilih Jenis Pelayanan:
                <?php $this->load->view('pilih_status')?>
            </form>
            <br/>
            <hr/>

            <h4 align="right">Total Pasien: <?php echo count($kunj_jamkesmas);?> orang</h4>
<table style="width: 99%" >
                <thead>
                    <tr>
                        <th style="width:2%">No</th>
                        <th style="width:3%">No. Kunjungan</th>
                        <th style="width:13%">Nama Pasien</th>
                        <th style="width:20%">Alamat</th>
                        <th style="width:10%">No. Kartu</th>
                        <th style="width:6%">Penyakit</th>
                        <th style="width:6%">Layanan</th>
                        <th style="width:6%">Harga</th>
                   </tr>
                </thead>
                <tbody>
                    <?php $i=1; if(isset($kunj_jamkesmas)) { foreach ($kunj_jamkesmas as $jamkesmas) {?>
                    <tr class="<?php if($i%2==0) echo "odd"; else echo "even";?>">
                        <td class="align-center"><?php echo $i++; ?></td>
                       <td><?php echo $jamkesmas['no_kunjungan'];?></td>
                        <td><?php echo $jamkesmas['nama_pasien'];?> <br/>
                            <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $jamkesmas['jk_pasien'] . ', ' . $jamkesmas['umur'] . ' th'; ?></small></td>
                        <td><?php echo $jamkesmas['alamat_kk']." KEl. ".$jamkesmas['kelurahan_kk']." Kec. ".$jamkesmas['kecamatan_kk'];?></td>
                        <td><?php echo $jamkesmas['no_kartu_layanan']?>
                        </td>
                        <td><?php echo $jamkesmas['nama_penyakit']?></td>
                        <td><?php echo $jamkesmas['nama_layanan']?></td>
                        <td><?php echo $jamkesmas['harga']?></td>
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
