<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h2>Laporan Data Pasien Berdasarkan Penyakit</h2>
<h3>Tanggal:20 Mei 2011</h3>
<table border="2">
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


<?php
foreach($hari_tindakan_excell as $hte) {
?>
<tr>
                    <th style="width:2%"><?php echo "no" ?></th>
                    <th style="width:10%"><?php echo $hte['tanggal_pendaftaran'];?></th>
                <th style="width:8%"><?php echo $hte['id_pasien'];?></th>
                <th style="width:10%"><?php echo $hte['nama_KK'];?></th>
                    <th style="width:10%"><?php echo $hte['nama_pasien'];?></th>
                    <th style="width:2%"><?php echo $hte['jk'];?></th>
                    <th style="width:8%"><?php echo $hte['tanggal_lahir'];?></th>
                    <th style="width:20%"><?php echo $hte['Alamat'];?></th>
                    <th style="width:10%"><?php echo $hte['status_pelayanan'];?></th>
                    <th style="width:10%"><?php echo $hte['no_kartu_layanan'];?></th>
                    <th style="width:10%"><?php echo $hte['nama_layanan'];?></th>
                </tr>
<?php } ?>
</table>