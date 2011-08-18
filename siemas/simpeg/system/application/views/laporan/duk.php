<?php $this->load->view('header'); ?>

<script type="text/javascript">

    $(document).ready(function(){
        $("tr:nth-child(even)").addClass("even");
    })


</script>

<div class="belowribbon">
    <h1>
        Daftar urut kepangkatan (<?php echo date("Y"); ?>)
    </h1>
</div>

<style type="text/css">

label:hover {
    text-decoration: underline;
    color: blue;
    cursor: pointer;
}

</style>

<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">
                <form action="" method="post">
                    <strong>Tampilkan kolom:</strong>
                    <input id="c1" type="checkbox" name="pangkat"           <?php if($kolom[1]) echo 'checked="checked"'; ?>/>
                        <label for="c1" style="display: inline">Pangkat</label>
                    <input id="c2" type="checkbox" name="masa_kerja"        <?php if($kolom[2]) echo 'checked="checked"'; ?>/>
                        <label for="c2" style="display: inline">Masa kerja</label>
                    <input id="c3" type="checkbox" name="pendidikan"        <?php if($kolom[3]) echo 'checked="checked"'; ?>/>
                        <label for="c3" style="display: inline">Pendidikan</label>
                    <input id="c4" type="checkbox" name="ttl"               <?php if($kolom[4]) echo 'checked="checked"'; ?>/>
                        <label for="c4" style="display: inline">TTL</label>
                    <input id="c5" type="checkbox" name="jabatan"           <?php if($kolom[5]) echo 'checked="checked"'; ?>/>
                        <label for="c5" style="display: inline">Jabatan</label>
                    <input id="c6" type="checkbox" name="kenaikan_gaji"     <?php if($kolom[6]) echo 'checked="checked"'; ?>/>
                        <label for="c6" style="display: inline">Kenaikan gaji</label>
                    <input id="c7" type="checkbox" name="unit_kerja"        <?php if($kolom[7]) echo 'checked="checked"'; ?>/>
                        <label for="c7" style="display: inline">Unit kerja</label> |
                    <strong>Urutkan berdasarkan:</strong>
                    <select name="urut">
                        <option value="0">Jabatan (struktural)</option>
                        <option value="1" <?php if($urut == 1) echo "selected='selected'"; ?>>Pangkat (fungsional)</option>
                    </select>
                    <input type="submit" class="submit-green" value="Tampilkan" name="filter"/>
                </form>
            </div>
        </div>


        <div class="module">
            <h2><span>Daftar urut kepangkatan</span></h2>
            <div class="module-table-body">
                <table border="1">
                    <tbody>
                        <tr>
                            <th rowspan="2">NO.</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">NIP</th>
                            <?php if($kolom[1]) : ?>
                                <th colspan="2">Pangkat</th>
                            <?php endif; ?>
                            <?php if($kolom[2]) : ?>
                                <th colspan="2">Masa Kerja</th>
                            <?php endif; ?>
                            <?php if($kolom[3]) : ?>
                                <th colspan="2">Pendidikan</th>
                            <?php endif; ?>
                            <?php if($kolom[4]) : ?>
                                <th rowspan="2">Tempat dan Tanggal Lahir</th>
                            <?php endif; ?>
                            <?php if($kolom[5]) : ?>
                                <th rowspan="2">Jabatan</th>
                            <?php endif; ?>
                            <?php if($kolom[6]) : ?>
                                <th rowspan="2">Kenaikan Gaji YAD</th>
                            <?php endif; ?>
                            <?php if($kolom[7]) : ?>
                                <th rowspan="2">Keterangan</th>
                            <?php endif; ?>
                        </tr>

                        <tr>
                            <?php if($kolom[1]) : ?>
                            <th>Golongan / Ruang</th>
                            <th>TMT</th>
                            <?php endif; ?>
                            <?php if($kolom[2]) : ?>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <?php endif; ?>
                            <?php if($kolom[3]) : ?>
                            <th>Nama</th>
                            <th>Tahun Ijazah</th>
                            <?php endif; ?>
                        </tr>

                        <?php $i=1; foreach ($list as $pegawai) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $pegawai['nama']; ?></td>
                            <td><?php echo format_nip($pegawai['nip']); ?></td>
                            <?php if($kolom[1]) : ?>
                            <td><?php echo $pegawai['pangkat']; ?> - <?php echo $pegawai['golongan']; ?></td>
                            <td><?php echo format_tanggal_tampilan($pegawai['TMT_pangkat']); ?></td>
                            <?php endif; ?>
                            <?php if($kolom[2]) : ?>
                            <td><?php echo $pegawai['masa_kerja_tahun']; ?></td>
                            <td><?php echo $pegawai['masa_kerja_bulan']; ?></td>
                            <?php endif; ?>
                            <?php if($kolom[3]) : ?>
                            <td><?php echo $pegawai['pendidikan']; ?></td>
                            <td><?php echo $pegawai['tahun_ijazah']; ?></td>
                            <?php endif; ?>
                            <?php if($kolom[4]) : ?>
                            <td><?php echo $pegawai['tempat_lahir']; ?>, <?php echo format_tanggal_tampilan($pegawai['tanggal_lahir']); ?></td>
                            <?php endif; ?>
                            <?php if($kolom[5]) : ?>
                            <td><?php echo $pegawai['jabatan']; ?></td>
                            <?php endif; ?>
                            <?php if($kolom[6]) : ?>
                            <td><?php echo format_tanggal_tampilan($pegawai['kenaikan_YAD']); ?></td>
                            <?php endif; ?>
                            <?php if($kolom[7]) : ?>
                            <td><?php if($pegawai['bp_pemda'] == 1) echo "BP Pemda"; ?></td>
                            <?php endif; ?>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>