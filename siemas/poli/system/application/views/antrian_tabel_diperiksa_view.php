<h3>Sedang diperiksa: <?php  echo count($s); ?> orang</h3>

<table>
    <thead>
        <tr>
            <th style="width:75px">No. Kunj.</th>
            <th colspan="2">Nama Pasien</th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i=0; $i<=count($s)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $s[$i]['no_kunjungan']?></td>
            <td style="border-right: none">
                <a style=" text-decoration:none" href="" class="pop"><?php echo $s[$i]['nama_pasien']; ?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $s[$i]['jk_pasien'] . ', ' . $s[$i]['umur'] . ' th'; ?></small>
            </td>
            <td valign="middle" align="right">
                <a href="index.php/antrian/isi_remed_hari_ini" style="text-decoration: none" onclick="selesai(<?php echo $s[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-blue">Selesai</a>
            </td>

        </tr>
            <?php }?>
    </tbody>
</table>
