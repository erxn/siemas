<h3>Selesai diperiksa: <?php  echo count($selesai); ?> orang</h3>
<table id="myTable" class="tablesorter" border="8" style=" margin-top: 5px;width:100%">
                <thead>
                    <tr>
                        <th style="width:75px">No. Kunj.</th>
                        <th colspan="2">Nama Pasien</th>
                    </tr>
                </thead>

                <tbody>
                   <?php for ($i=0; $i<=count($selesai)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td align="center"><?php echo $selesai[$i]['no_kunjungan']?></td>
            <td style="border-right: 1px solid transparent"><?php echo $selesai[$i]['nama_pasien']; ?>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $selesai[$i]['jk_pasien'] . ', ' . $selesai[$i]['umur'] . ' th'; ?></small>
            </td>
            <td valign="middle" align="right">
                <a href="index.php/antrian/isi_remed_hari_ini/<?php echo $selesai[$i]['id_pasien'];?>/<?php echo $selesai[$i]['id_kunjungan'];?>/<?php echo $selesai[$i]['id_antrian'];?>/<?php echo $selesai[$i]['tanggal_kunjungan']?>" style="text-decoration: none" onclick="t(<?php echo $selesai[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-blue">Isi rekam medik</a>
              </td>

        </tr>
            <?php }?>
                </tbody>
            </table>