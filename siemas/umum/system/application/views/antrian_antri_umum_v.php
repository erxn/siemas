<h3>Sedang mengantri: <?php  echo count($a); ?> orang</h3>


<table>
    <thead>
        <tr>
            <th style="width:75px">No. Kunj.</th>
            <th colspan="2">Nama Pasien</th>
        </tr>
    </thead>


    <tbody>

        <?php for ($i=0; $i<=count($a)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $a[$i]['no_kunjungan']?></td>
            <td style="border-right: none; color: #0063be; font-weight: bold"><?php echo $a[$i]['nama_pasien']; ?>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $a[$i]['jk_pasien'] . ', ' . $a[$i]['umur'] . ' th'; ?></small>
            </td>
            <td valign="middle" align="right">
                <a href="#" style="text-decoration: none" onclick="periksa(<?php echo $a[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-green">Periksa</a>
                <a href="#" style="text-decoration: none" onclick="lewati(<?php echo $a[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-red">Lewati</a>
            </td>
        </tr>
            <?php }?>
    </tbody>
</table>
