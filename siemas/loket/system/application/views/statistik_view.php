<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />



<script>
    $(function() {

        $( "#tabs" ).tabs();
    });
</script>

<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->

<?php

// perhitungannya di sini ajah

$jumlah_kunjungan_lama = @$laporan['lama_pab'] + $laporan['lama_cib'] + $laporan['lama_LW'] + $laporan['lama_LKot'];
$jumlah_kunjungan_baru = $laporan['baru_pab'] + $laporan['baru_cib'] + $laporan['baru_LW'] + $laporan['baru_LKot'];

$jumlah_kunjungan_pab = $laporan['lama_pab'] + $laporan['baru_pab'];
$jumlah_kunjungan_cib = $laporan['lama_cib'] + $laporan['baru_cib'];
$jumlah_kunjungan_LW = $laporan['lama_LW'] + $laporan['baru_LW'];
$jumlah_kunjungan_LKot = $laporan['lama_LKot'] + $laporan['baru_LKot'];

$jumlah_kunjungan_pumum = $laporan['umum_pab'] + $laporan['umum_cib'] + $laporan['umum_LW'] + $laporan['umum_LKot'];
$jumlah_kunjungan_gigi = $laporan['gigi_pab'] + $laporan['gigi_cib'] + $laporan['gigi_LW'] + $laporan['gigi_LKot'];
$jumlah_kunjungan_kia = $laporan['kia_pab'] + $laporan['kia_cib'] + $laporan['kia_LW'] + $laporan['kia_LKot'];

$jumlah_kunjungan_radio = $laporan['radio_pab'] + $laporan['radio_cib'] + $laporan['radio_LW'] + $laporan['radio_LKot'];
$jumlah_kunjungan_anak = $laporan['anak_pab'] + $laporan['anak_cib'] + $laporan['anak_LW'] + $laporan['anak_LKot'];
$jumlah_kunjungan_dalam = $laporan['dalam_pab'] + $laporan['dalam_cib'] + $laporan['dalam_LW'] + $laporan['dalam_LKot'];

$jumlah_kunjungan_rujuk = $laporan['rujuk_pab'] + $laporan['rujuk_cib'] + $laporan['rujuk_LW'] + $laporan['rujuk_LKot'];

$jumlah_kunjungan_askes = $laporan['askes'];
$jumlah_kunjungan_jamkesmas = $laporan['jamkesmas'];
$jumlah_kunjungan_umum = $laporan['umum'];
$jumlah_kunjungan_lain = $laporan['lain'];

?>

<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript">

var chart1, chart2;
$(document).ready(function() {
   chart1 = new Highcharts.Chart({
      chart: {
         renderTo: 'grafik1',
         defaultSeriesType: 'bar'
      },
      title: {
         text: 'Grafik jumlah kunjungan'
      },
      subtitle: {
         text: 'Berdasarkan status pasien'
      },
      xAxis: {
         categories: ['Pasien lama', 'Pasien baru'],
         title: {
            text: null
         }
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Jumlah kunjungan',
            align: 'high'
         }
      },
      tooltip: {
         formatter: function() {
            return ''+
                this.series.name +': '+ this.y +' orang';
         }
      },
      plotOptions: {
         bar: {
            dataLabels: {
               enabled: true
            }
         }
      },
      legend: {
          enabled: false
      },
      credits: {
         enabled: false
      },
           series: [{
         name: 'Jumlah',
         data: [<?php echo $jumlah_kunjungan_lama ?>, <?php echo $jumlah_kunjungan_baru ?>]
      }]
   });

   chart2 = new Highcharts.Chart({
      chart: {
         renderTo: 'grafik2',
         defaultSeriesType: 'bar'
      },
      title: {
         text: 'Grafik jumlah kunjungan'
      },
      subtitle: {
         text: 'Berdasarkan wilayah'
      },
      xAxis: {
         categories: ['Pabaton', 'Cibogor', 'Luar wilayah', 'Luar kota'],
         title: {
            text: null
         }
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Jumlah kunjungan',
            align: 'high'
         }
      },
      tooltip: {
         formatter: function() {
            return ''+
                this.series.name +': '+ this.y +' orang';
         }
      },
      plotOptions: {
         bar: {
            dataLabels: {
               enabled: true
            }
         }
      },
      legend: {
          enabled: false
      },
      credits: {
         enabled: false
      },
           series: [{
         name: 'Jumlah',
         data: [<?php echo $jumlah_kunjungan_pab ?>, <?php echo $jumlah_kunjungan_cib ?>, <?php echo $jumlah_kunjungan_LW ?>, <?php echo $jumlah_kunjungan_LKot ?>]
      }]
   });

   chart3 = new Highcharts.Chart({
      chart: {
         renderTo: 'grafik3',
         defaultSeriesType: 'bar'
      },
      title: {
         text: 'Grafik jumlah kunjungan'
      },
      subtitle: {
         text: 'Berdasarkan poli tujuan'
      },
      xAxis: {
         categories: ['Poli Umum', 'Poli Gigi', 'Poli KIA','Sp. Anak','Sp. Peny. Dalam','Radiologi','Rujukan'],
         title: {
            text: null
         }
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Jumlah kunjungan',
            align: 'high'
         }
      },
      tooltip: {
         formatter: function() {
            return ''+
                this.series.name +': '+ this.y +' orang';
         }
      },
      plotOptions: {
         bar: {
            dataLabels: {
               enabled: true
            }
         }
      },
      legend: {
          enabled: false
      },
      credits: {
         enabled: false
      },
           series: [{
         name: 'Jumlah',
         data: [<?php echo $jumlah_kunjungan_pumum ?>, <?php echo $jumlah_kunjungan_gigi ?>, <?php echo $jumlah_kunjungan_kia ?>,<?php echo $jumlah_kunjungan_anak ?>,<?php echo $jumlah_kunjungan_dalam ?>,<?php echo $jumlah_kunjungan_radio ?>,<?php echo $jumlah_kunjungan_rujuk ?>]
      }]
   });

   chart4 = new Highcharts.Chart({
      chart: {
         renderTo: 'grafik4',
         defaultSeriesType: 'bar'
      },
      title: {
         text: 'Grafik jumlah kunjungan'
      },
      subtitle: {
         text: 'Berdasarkan status Pelayanans'
      },
      xAxis: {
         categories: ['ASKES', 'JAMKESMAS', 'UMUM', 'GR'],
         title: {
            text: null
         }
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Jumlah kunjungan',
            align: 'high'
         }
      },
      tooltip: {
         formatter: function() {
            return ''+
                this.series.name +': '+ this.y +' orang';
         }
      },
      plotOptions: {
         bar: {
            dataLabels: {
               enabled: true
            }
         }
      },
      legend: {
          enabled: false
      },
      credits: {
         enabled: false
      },
           series: [{
         name: 'Jumlah',
         data: [<?php echo $jumlah_kunjungan_askes ?>, <?php echo $jumlah_kunjungan_jamkesmas ?>, <?php echo $jumlah_kunjungan_umum ?>, <?php echo $jumlah_kunjungan_lain ?>]
      }]
   });

});

</script>


<div class="grid_6" style="width: 98%">
    <div class="module">
        <h2><span>STATISTIK HARIAN</span></h2>
        <div class="module-body">
            <form action="" method="post">

                Pilih tanggal:
                <input type="text" id="datepicker" name="tgl_statistik" class="input-medium" value="<?php echo $tgl ?>"/>
                <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>

            </form>
            <br/>
            <hr/>

            <div style="width: 48%; float: left; height: 300px;" id="grafik1"></div>
            <div style="width: 48%; float: left; height: 300px;" id="grafik2"></div>

            <div style="clear: both"></div>
            <br/>

            <div style="width: 48%; float: left; height: 300px;" id="grafik3"></div>
            <div style="width: 48%; float: left; height: 300px;" id="grafik4"></div>
            <pre>
            <?php //print_r($laporan) ?>
            </pre>
        </div>
    </div>
</div>


