<h2><span>Data cuti pegawai ini</span></h2>
<div class="module-table-body">
    <table width="100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keperluan</th>
                <th>Keterangan</th>
                <th>Alamat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_cuti) > 0) : foreach($daftar_cuti as $cuti) : ?>
            <tr>
                <td><b><?php echo format_tanggal_tampilan($cuti['tanggal_mulai']) ?></b> sampai <b><?php echo format_tanggal_tampilan($cuti['tanggal_selesai']) ?></b></td>
                <td><?php echo $cuti['keperluan']; ?></td>
                <td><?php echo $cuti['keterangan']; ?></td>
                <td><?php echo $cuti['alamat_cuti']; ?></td>
                <td>
                    <a href="#">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else : ?>
            <tr>
                <td colspan="5"><em>Tidak ada data</em></td>
            </tr>
            <?php endif; ?>
    </table>
</div>