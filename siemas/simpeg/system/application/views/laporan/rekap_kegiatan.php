<?php $this->load->view('header'); ?>

<?php
$nama_bulan = array(
    "",
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);

?>


<div class="belowribbon">
    <h1>
        Kegiatan luar Puskesmas
    </h1>
</div>


<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">

                    Tahun&nbsp;&nbsp;&nbsp;
                    <select name="tahun" id="tahun">
                        <?php foreach($list_tahun as $t) : ?>
                        <option value='<?php echo $t['tahun']; ?>' <?php if($t['tahun'] == $tahun) echo "selected='selected'"; ?>><?php echo $t['tahun']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    Bulan&nbsp;&nbsp;&nbsp;
                    <select name="bulan" id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($i == $bulan) echo 'selected="selected"'; ?>><?php echo $nama_bulan[$i]; ?></option>
                        <?php endfor; ?>
                    </select>
                    Pegawai&nbsp;&nbsp;&nbsp;
                    <select name="sel_pegawai" id="pegawai" class="input-short" style="width: 250px;">
                        <option value="0">-</option>
                        <?php foreach ($daftar_pegawai as $pegawai) { ?>
                        <option value='<?php echo $pegawai['id_pegawai']; ?>' <?php if($pegawai['id_pegawai'] == $id_pegawai) echo 'selected'; ?>><?php echo $pegawai['nama']; ?></option>
                        <?php } ?>
                    </select>
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/kegiatan/laporan_kegiatan/' + $('#bulan').val() + '/' + $('#tahun').val() + '/' + $('#pegawai').val()"/>

            </div>
        </div>

        <?php if($id_pegawai != 0) : ?>

        <div class="module">
            <h2><span>Data kegiatan</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <th width="50">No.</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Kegiatan</th>
                    </thead>
                    <tbody>
                        <?php if(count($daftar_kegiatan) > 0) : $i = 1; foreach($daftar_kegiatan as $k) : ?>
                        <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                            <td><?php echo $i; ?></td>
                            <td><b><?php echo tampilan_tanggal_indonesia($k['tanggal']) ?></b></td>
                            <td><?php echo $k['lokasi']; ?></td>
                            <td><?php echo $k['kegiatan']; ?></td>
                        </tr>
                        <?php $i++; endforeach; else : ?>
                        <tr>
                            <td colspan="4"><em>Tidak ada data</em></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php endif; ?>

    </div>
</div>

<?php $this->load->view('footer'); ?>