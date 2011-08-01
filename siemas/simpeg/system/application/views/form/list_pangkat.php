<td>Riwayat pangkat</td>
<td>
    <table border="1">
        <thead>
            <tr>
                <th>Pangkat</th>
                <th>Golongan/Ruang</th>
                <th>TMT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_pangkat) > 0) : foreach($daftar_pangkat as $d) : ?>
            <tr id="t_<?php echo $d['id_pangkat_golongan']; ?>">
                <td><?php echo $d['pangkat']; ?></td>
                <td><?php echo $d['golongan']; ?></td>
                <td><?php echo format_tanggal_tampilan($d['TMT']); ?></td>
                <td>
                    <a onclick="hapus(<?php echo $d['id_pangkat_golongan']; ?>); return false;" href="#">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else : ?>
            <tr>
                <td colspan="4"><em>Tidak ada data</em></td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</td>