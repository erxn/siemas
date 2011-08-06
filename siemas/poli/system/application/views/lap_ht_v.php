<?php $this->load->view('header')?>
 <div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<?php if(count($hari_tindakan)>0){?>


<h2>Laporan Data Pasien Berdasarkan Layanan</h2>
<h3>Tanggal:20 Mei 2011</h3>
<table style="width:100%">

            <thead >
                <tr>
                    <th style="width:2%">No</th>
                    <th style="width:10%">Tgl Pendaftaran</th>
                    <th style="width:8%">Id Pasien</th>
                    <th style="width:10%">Nama KK</th>
                    <th style="width:10%">Nama Pasien</th>
                    <th style="width:2%">JK</th>
                    <th style="width:8%">Tanggal Lahir</th>
                    <th style="width:20%">Alamat</th>
                    <th style="width:10%">Status Pelayan</th>
                    <th style="width:10%">No Kartu</th>
                    <th style="width:10%">Layanan</th>
                </tr>
            </thead>


            <tbody >

        <?php foreach ($hari_tindakan as $ht)
        { ?>
                <tr>
                    <th style="width:2%"><?php echo "no" ?></th>
                    <th style="width:10%"><?php echo $ht['tanggal_pendaftaran'];?></th>
                    <th style="width:8%"><?php echo $ht['id_pasien'];?></th>
                    <th style="width:10%"><?php echo $ht['nama_KK'];?></th>
                    <th style="width:10%"><?php echo $ht['nama_pasien'];?></th>
                    <th style="width:2%"><?php echo $ht['jk'];?></th>
                    <th style="width:8%"><?php echo $ht['tanggal_lahir'];?></th>
                    <th style="width:20%"><?php echo $ht['Alamat'];?></th>
                    <th style="width:10%"><?php echo $ht['status_pelayanan'];?></th>
                    <th style="width:10%"><?php echo $ht['no_kartu_layanan'];?></th>
                    <th style="width:10%"><?php echo $ht['nama_layanan'];?></th>
                </tr>
                    <?php }?>
            </tbody>

        </table>
 <?php }?>

<br />
<a href='index.php/laporan/export_to_excell_tindakan'><span style='color:blue'>export ke excell</span></a>
