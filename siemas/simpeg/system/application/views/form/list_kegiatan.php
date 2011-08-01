<h2><span>Data kegiatan pegawai</span></h2>
<div class="module-table-body">
    <table width="100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Kegiatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($daftar_kegiatan) > 0) : foreach($daftar_kegiatan as $k) : ?>
            <tr id="t_<?php echo $k['id_kegiatan']; ?>">
                <td><b><?php echo tampilan_tanggal_indonesia($k['tanggal']) ?></b></td>
                <td><?php echo $k['lokasi']; ?></td>
                <td><?php echo $k['kegiatan']; ?></td>
                <td>
                    <a onclick="hapus(<?php echo $k['id_kegiatan']; ?>); return false;" href="#">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else : ?>
            <tr>
                <td colspan="4"><em>Tidak ada data</em></td>
            </tr>
            <?php endif; ?>
    </table>
</div>