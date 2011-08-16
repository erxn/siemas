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
        Pembayaran Tambahan Tunjangan Penghasilan (TTP)
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
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/penilaian/rekap_tunjangan/' + $('#bulan').val() + '/' + $('#tahun').val()"/>
            </div>
        </div>


        <div class="module">
            <h2><span>Daftar nilai DP3</span></h2>
            <div class="module-table-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>Nilai TPP</th>
                            <th>Tunjangan</th>
                            <th>PPh 21</th>
                            <th>Jumlah diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($daftar_tunjangan as $data) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php $j = $this->pegawai->get_jabatan_terakhir($data['id_pegawai']); echo $j['jabatan'] ?></td>
                                <td><?php $g = $this->pegawai->get_pangkat_terakhir($data['id_pegawai']); echo $g['golongan'] ?></td>
                                <td>...</td>
                                <td align="right"><?php echo format_rupiah(intval($data['tunjangan'])) ?></td>
                                <td align="right"><?php echo format_rupiah(intval($data['pph21'])) ?></td>
                                <td align="right"><?php echo format_rupiah(intval($data['tunjangan']) - intval($data['pph21'])) ?></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer'); ?>