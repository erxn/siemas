<?php $this->load->view('header'); ?>

<div class="belowribbon">
    <h1>
        Rekap absensi bulanan
        <a href="index.php/absensi/rekap_absensi_xls/<?php echo $bulan ?>/<?php echo $tahun ?>" class="submit-green xls-button" style="margin-left: 10px" title="Simpan sebagai file Excel">
            <img src="template/ms-excel.png" alt=""/>
            Simpan ke Excel
        </a>
    </h1>
</div>

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

$jumlah_harian_pkm = array();
for ($i=1; $i <= $jumlah_hari_bulan_ini; $i++) $jumlah_harian_pkm[] = 0;

$jumlah_harian_bp = array();
for ($i=1; $i <= $jumlah_hari_bulan_ini; $i++) $jumlah_harian_bp[] = 0;

?>

<div id="page">

    <div class="grid_6" style="width: 28%">
        <div class="module">
            <h2><span>Pilih bulan</span></h2>
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
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/absensi/rekap_absensi/' + $('#bulan').val() + '/' + $('#tahun').val()"/>
                    <br/>
                    <div id="grafik1" style="width: 100%; height: 150px;"></div>

            </div>
        </div>
    </div>

    <div class="grid_6" style="width: 68%">
        <div class="module">
            <h2><span>Dalam grafik</span></h2>
            <div class="module-body">

                <div id="grafik2" style="width: 100%; height: 150px;"></div>

            </div>
        </div>
    </div>


    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Daftar absensi</span></h2>
            <div class="module-table-body">

                <table width="100%">
                    <thead>
                        <tr>
                            <th colspan="<?php echo $jumlah_hari_bulan_ini + 3 ?>"><h4>Puskesmas Bogor Tengah</h4></th>
                        </tr>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th style="width: 150px">Nama</th>
                            <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                echo "<th style=\"width: 10px;\">$j</th>\n";

                            } ?>
                            <th style="width: 15px;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; $i = 0; foreach ($absensi_pkm as $a) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $a['nama']; ?></td>
                                <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                    if(in_array($j, $tanggal_libur_pkm)) {

                                        echo "<td style='background-color: #eeeeee !important'>";
                                        echo "</td>\n";

                                    } else {

                                        echo "<td>";
                                        if ($a['hadir_' . $j] == '1')
                                            echo "<img alt='' src='template/tick-on-.gif'/>";
                                        echo "</td>\n";

                                    }
                                    
                                    $jumlah_harian_pkm[$j-1] += $a['hadir_' . $j];
                                    
                                } ?>
                                <td><?php echo $a['jumlah']; $total += $a['jumlah'] ?></td>

                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>

                    <thead>
                        <tr>
                            <th colspan="<?php echo $jumlah_hari_bulan_ini + 3 ?>"><h4>BP Pemda</h4></th>
                        </tr>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th style="width: 150px">Nama</th>
                            <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                echo "<th style=\"width: 10px;\">$j</th>\n";

                            } ?>
                            <th style="width: 15px;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($absensi_bp as $a) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $a['nama']; ?></td>
                                <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                    if(in_array($j, $tanggal_libur_bp)) {

                                        echo "<td style='background-color: #eeeeee !important'>";
                                        echo "</td>\n";

                                    } else {

                                        echo "<td>";
                                        if ($a['hadir_' . $j] == '1')
                                            echo "<img alt='' src='template/tick-on-.gif'/>";
                                        echo "</td>\n";

                                    }
                                    
                                    $jumlah_harian_bp[$j-1] += $a['hadir_' . $j];

                                } ?>
                                <td><?php echo $a['jumlah']; $total += $a['jumlah'] ?></td>

                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>

<?php

$jumlah_ideal_pkm = $this->absensi->get_kehadiran_ideal_pkm($tahun, $bulan) * count($absensi_pkm);
$jumlah_ideal_bp  = $this->absensi->get_kehadiran_ideal_bp($tahun, $bulan) * count($absensi_bp);

$absensi_ideal_total = $jumlah_ideal_pkm + $jumlah_ideal_bp;

$absensi_hadir_total = round($total / $absensi_ideal_total * 100, 1);
$absensi_tidak_hadir_total = 100 - $absensi_hadir_total;

array_unshift($jumlah_harian_pkm, 0);
array_unshift($jumlah_harian_bp, 0);

?>

            </div>
        </div>


    </div>
</div>


<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript">

        var chart;
        $(document).ready(function() {
                chart = new Highcharts.Chart({
                        chart: {
                                renderTo: 'grafik1',
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                marginLeft: 0,
                                spacingLeft: 0
                        },
                        title: {
                                text: 'Persentase kehadiran bulan ini',
                                style: {
                                    fontSize: '11px'
                                }
                        },
                        tooltip: {
                                formatter: function() {
                                        return '<b>'+ this.point.name +'</b>: '+ this.y +' %';
                                }
                        },
                        plotOptions: {
                                pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                                enabled: true,
                                                color: '#000000',
                                                connectorColor: '#000000',
                                                formatter: function() {
                                                        return '<b>'+ this.point.name +'</b>: '+ this.y +' %';
                                                }
					}
                                }
                        },
                        credits: {
                                enabled: false
                        },
                        series: [{
                                type: 'pie',
                                name: 'Kehadiran',
                                data: [
                                        ['Hadir', <?php echo $absensi_hadir_total ?>],
                                        ['Tidak hadir', <?php echo $absensi_tidak_hadir_total ?>]
                                ]
                        }]
                });

                chart2 = new Highcharts.Chart({

                        chart: {
                                renderTo: 'grafik2',
                                defaultSeriesType: 'column'
                        },
                        title: {
                                text: 'Jumlah kehadiran per hari',
                                style: {
                                    fontSize: '11px'
                                }
                        },
                        credits: {
                                enabled: false
                        },
                        yAxis: {
                                title: {
                                    text: null
                                },
                                max: <?php echo count($absensi_pkm) + count($absensi_bp) ?>,
                                tickInterval: <?php echo floor((count($absensi_pkm) + count($absensi_bp)) / 3) ?>
                        },
                        legend: {
                                enabled: false
                        },
                        tooltip: {
                                formatter: function() {
                                        return '<b>Hadir: '+ this.y +' orang</b>';
                                }
                        },
                        xAxis: {
                            min: 0,
                            allowDecimals: false,
                            tickInterval: 1
                        },
                        plotOptions: {
                                column: {
                                        stacking: 'normal'
                                }
                        },
                        colors: [
                            '#DB843D',
                            '#89A54E'
                        ],
                        legend: {
                            align: 'right',
                            verticalAlign: 'top',
                            floating: true,
                            borderColor: '#CCC',
                            borderWidth: 1,
                            shadow: false,
                            itemStyle: {
                                fontSize: '10px'
                            },
                            backgroundColor: '#FFFFFF'
			},
                        series: [{
                                name: 'BP Pemda',
                                data: [<?php echo implode(", ", $jumlah_harian_bp) ?>]
                        },{
                                name: 'Puskesmas',
                                data: [<?php echo implode(", ", $jumlah_harian_pkm) ?>]
                        }]

                });

        });

</script>



<?php $this->load->view('footer'); ?>