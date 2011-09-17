<?php if(count($t) > 0) : ?>

<h3>Tertunda: <?php  echo count($t); ?> orang</h3>

<table>
    <thead>
        <tr>
            <th style="width:75px">No. Kunj.</th>
            <th colspan="2">Nama Pasien</th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i=0; $i<=count($t)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $t[$i]['no_kunjungan']?></td>
            <td style="color: #0063be; font-weight: bold"><?php echo $t[$i]['nama_pasien']; ?>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $t[$i]['jk_pasien'] . ', ' . $t[$i]['umur'] . ' th'; ?></small>
            </td>
            <td valign="middle" align="right">
                <a href="#" style="text-decoration: none" onclick="periksa(<?php echo $t[$i]['id_antrian'] ?>); return false" class="btn-gplus gplus-green">Periksa</a>
            </td>

        </tr>
            <?php }?>
    </tbody>
</table>

<?php endif; ?>