<?php $this->load->view('header') ?>

<div class="belowribbon">
    <h1>
        Hari ini
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>&nbsp;</span></h2>
            <div class="module-body">
                <table class="noborder" width="100%">
                    <tr>
                        <td align="left">
                            <h4>
                                <a href="index.php/home/hari_ini/<?php echo date("Y/m/d", strtotime("yesterday", strtotime("$tahun-$bulan-$tanggal"))); ?>" title="Kemarin">
                                    &laquo; <?php echo tampilan_tanggal_indonesia(date("d-m-Y", strtotime("yesterday", strtotime("$tahun-$bulan-$tanggal"))), false, false); ?>
                                </a>
                            </h4>
                        </td>
                        <td align="center">
                            <h3>
                                    <?php echo tampilan_tanggal_indonesia(date("d-m-Y", strtotime("today", strtotime("$tahun-$bulan-$tanggal"))), true, false); ?>
                            </h3>
                        </td>
                        <td align="right">
                            <h4>
                                <a href="index.php/home/hari_ini/<?php echo date("Y/m/d", strtotime("tomorrow", strtotime("$tahun-$bulan-$tanggal"))); ?>" title="Besok">
                                    <?php echo tampilan_tanggal_indonesia(date("d-m-Y", strtotime("tomorrow", strtotime("$tahun-$bulan-$tanggal"))), false, false); ?> &raquo;
                                </a>
                            </h4>
                        </td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Informasi</span></h2>
            <div class="module-body">
                
                <h4>Absensi</h4>
                <?php if(!$this->absensi->sudah_diinput_absensi($tahun, $bulan, $tanggal)) : ?>
                <div class="notification n-information">
                    Absensi hari ini belum diisi
                </div>
                <?php else : ?>
                <p>Pegawai yang tidak hadir pada hari ini:</p>
                <ul class="bullets">
                    <?php if(count($pegawai_absen) > 0) : foreach ($pegawai_absen as $pegawai) : ?>
                    <li><?php echo $pegawai['nama']; ?></li>
                    <?php endforeach; else : ?>
                    <li>Tidak ada</li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>

                <h4>Cuti</h4>
                <p>Pegawai yang cuti pada hari ini:</p>
                <ul class="bullets">
                    <?php if(count($pegawai_cuti) > 0) : foreach ($pegawai_cuti as $pegawai) : ?>
                    <li><?php echo $pegawai['nama']; ?> (<b><?php echo tampilan_tanggal_indonesia($pegawai['tanggal_mulai']) ?> - <?php echo tampilan_tanggal_indonesia($pegawai['tanggal_selesai']) ?></b>)</li>
                    <?php endforeach; else : ?>
                    <li>Tidak ada</li>
                    <?php endif; ?>
                </ul>

                <h4>Kegiatan luar</h4>
                <p>Kegiatan luar Puskesmas pada hari ini:</p>
                <ul class="bullets">
                    <?php if(count($pegawai_kegiatan) > 0) : foreach ($pegawai_kegiatan as $pegawai) : ?>
                    <li><?php echo $pegawai['nama']; ?> (<?php echo $pegawai['kegiatan'] ?> di <?php echo $pegawai['lokasi']; ?>)</li>
                    <?php endforeach; else : ?>
                    <li>Tidak ada</li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </div>


</div>

<?php $this->load->view('footer') ?>