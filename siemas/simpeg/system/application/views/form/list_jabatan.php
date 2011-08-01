<td>Riwayat jabatan</td>
<td>
    <table border="1">
        <thead>
            <tr>
                <th>Jabatan</th>
                <th>TMT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_jabatan) > 0) : foreach($daftar_jabatan as $d) : ?>
            <tr id="t_<?php echo $d['id_jabatan']; ?>">
                <td><?php echo $d['jabatan']; ?></td>
                <td><?php echo format_tanggal_tampilan($d['TMT']); ?></td>
                <td>
                    <a onclick="hapus(<?php echo $d['id_jabatan']; ?>); return false;" href="#">Hapus</a>
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