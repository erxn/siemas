<?php if(count($t) > 0) : ?>

<h3>Tertunda: <?php  echo count($t); ?> orang</h3>

<table>
    <thead>
        <tr>
            <th style="width:5%">No. Kunj.</th>
            <th style="width:21%">Nama Pasien</th>
            <th style="width:13%">Tindakan</th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i=0; $i<=count($t)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $t[$i]['no_kunjungan']?></td>
            <td>
                <a style=" text-decoration:none" href="" class="pop"><?php echo $t[$i]['nama_pasien']; ?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $t[$i]['jk_pasien'] . ', ' . $t[$i]['umur'] . ' th'; ?></small>
            </td>
            <td>
                <a href="#" onclick="periksa(<?php echo $t[$i]['id_antrian'] ?>); return false">Periksa</a>
            </td>

        </tr>
            <?php }?>
    </tbody>
</table>

<?php endif; ?>