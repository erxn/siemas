<td>Riwayat gaji</td>
<td>
    <table border="1">
        <thead>
            <tr>
                <th>Gaji</th>
                <th>TMT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_gaji) > 0) : foreach($daftar_gaji as $d) : ?>
            <tr id="t_<?php echo $d['id_gaji']; ?>">
                <td align="right">Rp <?php echo format_rupiah($d['gaji']); ?></td>
                <td><?php echo format_tanggal_tampilan($d['TMT']); ?></td>
                <td>
                    <a onclick="hapus(<?php echo $d['id_gaji']; ?>); return false;" href="#">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else : ?>
            <tr>
                <td colspan="3"><em>Tidak ada data</em></td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</td>