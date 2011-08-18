<?php $this->load->view('header'); ?>

<div class="belowribbon">
    <h1>
        Rekap jam kerja efektif
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
                    <input type="button" value="Tampilkan" class="submit-green" style="font-size: 11px; height: 23px; overflow: hidden; vertical-align: top" onclick="window.location = 'index.php/absensi/rekap_jam_efek/' + $('#bulan').val() + '/' + $('#tahun').val()"/>
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
            <h2><span>Daftar jam kerja efektif</span></h2>
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
                            <th style="width: 20px">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($jam_efek_pkm as $a) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $a['nama']; ?></td>
                                <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                    if(in_array($j, $tanggal_libur_pkm)) {

                                        echo "<td style='background-color: #eeeeee !important'>";
                                        echo "</td>\n";

                                    } else {

                                        echo "<td>";
                                        echo round($a['jam_efek_' . $j], 1);
                                        echo "</td>\n";

                                    }

                                    $jumlah_harian_pkm[$j-1] += $a['jam_efek_' . $j];

                                } ?>
                                <td><?php echo $a['jumlah']; ?></td>

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
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($jam_efek_bp as $a) : ?>
                            <tr <?php if($i%2 == 0) echo 'class="even"' ?>>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $a['nama']; ?></td>
                                <?php for($j = 1; $j <= $jumlah_hari_bulan_ini; $j++) {

                                    if(in_array($j, $tanggal_libur_bp)) {

                                        echo "<td style='background-color: #eeeeee !important'>";
                                        echo "</td>\n";

                                    } else {

                                        echo "<td>";
                                        echo round($a['jam_efek_' . $j], 1);
                                        echo "</td>\n";

                                    }

                                    $jumlah_harian_bp[$j-1] += $a['jam_efek_' . $j];

                                } ?>
                                <td><?php echo $a['jumlah']; ?></td>

                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>

<?php

array_unshift($jumlah_harian_pkm, 0);
array_unshift($jumlah_harian_bp, 0);

?>
                
            </div>
        </div>


    </div>
</div>

<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript">

        var chart2;
        $(document).ready(function() {
                chart2 = new Highcharts.Chart({

                        chart: {
                                renderTo: 'grafik2',
                                defaultSeriesType: 'column'
                        },
                        title: {
                                text: 'Jumlah jam efektif per hari',
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
                                }
                        },
                        legend: {
                                enabled: false
                        },
                        tooltip: {
                                formatter: function() {
                                        return '<b>Jam efektif: '+ this.y +' jam</b>';
                                }
                        },
                        xAxis: {
                            min: 1,
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