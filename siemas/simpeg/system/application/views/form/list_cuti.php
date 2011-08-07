<h2><span>Data cuti pegawai ini</span></h2>
<div class="module-table-body">
    <table width="100%">
        <thead>
            <tr>
                <th>Tanggal</th>
<!--                <th>Lama cuti</th>-->
                <th>Keperluan</th>
                <th>Keterangan</th>
                <th>Alamat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_cuti) > 0) : foreach($daftar_cuti as $cuti) : ?>
            <tr id="t_<?php echo $cuti['id_cuti']; ?>">
                <td><?php echo tampilan_tanggal_indonesia($cuti['tanggal_mulai']) ?> - <?php echo tampilan_tanggal_indonesia($cuti['tanggal_selesai']) ?></td>
<!--                <td><?php echo date_diff(date_create($cuti['tanggal_selesai']), date_create($cuti['tanggal_mulai']))->format("%a hari"); ?></td>-->
                <td><?php echo $cuti['keperluan']; ?></td>
                <td><?php echo $cuti['keterangan']; ?></td>
                <td><?php echo $cuti['alamat_cuti']; ?></td>
                <td>
                    <a onclick="hapus(<?php echo $cuti['id_cuti']; ?>); return false;" href="#">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else : ?>
            <tr>
                <td colspan="5"><em>Tidak ada data</em></td>
            </tr>
            <?php endif; ?>
    </table>
</div>