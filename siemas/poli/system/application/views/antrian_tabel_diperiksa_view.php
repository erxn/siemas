<h3>Sedang diperiksa: <?php  echo count($s); ?> orang</h3>

<table>
    <thead>
        <tr>
            <th style="width:5%">No. Kunj.</th>
            <th style="width:21%">Nama Pasien</th>
            <th style="width:13%">Tindakan</th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i=0; $i<=count($s)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $s[$i]['no_kunjungan']?></td>
            <td>
                <a style=" text-decoration:none" href="" class="pop"><?php echo $s[$i]['nama_pasien']; ?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $s[$i]['jk_pasien'] . ', ' . $s[$i]['umur'] . ' th'; ?></small>
            </td>
            <td>
                <a href="#" onclick="selesai(<?php echo $s[$i]['id_antrian'] ?>); return false">Selesai</a>
            </td>

        </tr>
            <?php }?>
    </tbody>
</table>
