<h3>Sedang mengantri: <?php  echo count($a); ?> orang</h3>


<table>
    <thead>
        <tr>
            <th style="width:5%">No. Kunj.</th>
            <th style="width:21%">Nama Pasien</th>
            <th style="width:13%">Tindakan</th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i=0; $i<=count($a)-1; $i++) {?>
        <tr <?php if($i%2!=0) echo 'class="odd"' ?>>
            <td class="align-center"><?php echo $a[$i]['no_kunjungan']?></td>
            <td>
                <a style=" text-decoration:none" href="index.php/pasien/data_pasien_remed/<?php echo $a[$i]['id_kunjungan'];?>"><?php echo $a[$i]['nama_pasien']; ?></a>
                <br/>
                <small style="font-size: 10px; color: #777777; font-weight: normal"><?php echo $a[$i]['jk_pasien'] . ', ' . $a[$i]['umur'] . ' th'; ?></small>
            </td>
            <td>
                <a href="#" onclick="periksa(<?php echo $a[$i]['id_antrian'] ?>); return false">Periksa</a>
                <a href="#" onclick="lewati(<?php echo $a[$i]['id_antrian'] ?>); return false">Lewati</a>
            </td>
        </tr>
            <?php }?>
    </tbody>
</table>
