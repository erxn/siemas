<h3>Jumlah pasien hari ini:<?php echo count($selesai); ?> orang</h3>

<table id="myTable" class="tablesorter" border="8" style="margin-top: 5px; width:100% ">
    <thead>
        <tr>
            <th style="width:10%">No.Kunjungan</th>
             <th style="width:30%">Nama Pasien</th>
              <th style="width:30%">Status</th>
        </tr>
    </thead>

    <tbody>
         <?php for ($i=0; $i<=count($selesai)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $selesai[$i]['no_kunjungan']?></td>
            <td style="border-right: none"><?php echo $selesai[$i]['nama_pasien']; ?>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $selesai[$i]['jk_pasien'] . ', ' . $selesai[$i]['umur'] . ' th'; ?></small>
            </td>
            <td valign="middle" align="center">
                <a href="http://localhost/siemas/umum/index.php/antrian/isi_remed_hari_ini/<?php echo $selesai[$i]['id_pasien'];?>/<?php echo $selesai[$i]['id_kunjungan'];?>/<?php echo $selesai[$i]['id_antrian']?>" style="text-decoration: none" onclick="ter(<?php echo $selesai[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-blue">Isi rekam medik</a>
              </td>

        </tr>
            <?php }?>
    </tbody>

</table>