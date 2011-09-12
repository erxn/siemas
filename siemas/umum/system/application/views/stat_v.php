<?php $this->load->view('header');?>


<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />


<script>
    $(function() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "dd-mm-yy"
        });
    });
</script>
<script>
    $(function() {

        $( ".tabs" ).tabs();
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


$jumlah_kunjungan_pab = $grafik['umum_pab'];
$jumlah_kunjungan_cib = $grafik['umum_cib'];
$jumlah_kunjungan_LW = $grafik['umum_lw'];
$jumlah_kunjungan_LKot = $grafik['umum_lk'];

$jumlah_kunjungan_tbc = $grafik['tbc'];
$jumlah_kunjungan_diare = $grafik['diare'];
$jumlah_kunjungan_ispa = $grafik['ispa'];
$jumlah_kunjungan_umum = $grafik['umum'];

$jumlah_kunjungan_pab1 = $grafik['umum_pab1'];
$jumlah_kunjungan_cib1 = $grafik['umum_cib1'];
$jumlah_kunjungan_LW1 = $grafik['umum_lw1'];
$jumlah_kunjungan_LKot1 = $grafik['umum_lk1'];

$jumlah_kunjungan_tbc1 = $grafik['tbc1'];
$jumlah_kunjungan_diare1 = $grafik['diare1'];
$jumlah_kunjungan_ispa1 = $grafik['ispa1'];
$jumlah_kunjungan_umum1 = $grafik['umum1'];
?>

<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript">

    var chart1;
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

        chart2 = new Highcharts.Chart({
            chart: {
                renderTo: 'grafik2',
                defaultSeriesType: 'bar'
            },
            title: {
                text: 'Grafik jumlah kunjungan'
            },
            subtitle: {
                text: 'Berdasarkan Penyakit'
            },
            xAxis: {
                categories: ['tbc', 'diare', 'ispa','Umum'],
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
                    data: [<?php echo $jumlah_kunjungan_tbc ?>, <?php echo $jumlah_kunjungan_diare ?>, <?php echo $jumlah_kunjungan_ispa ?>,<?php echo $jumlah_kunjungan_umum ?>]
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
                    data: [<?php echo $jumlah_kunjungan_pab1 ?>, <?php echo $jumlah_kunjungan_cib1 ?>, <?php echo $jumlah_kunjungan_LW1 ?>, <?php echo $jumlah_kunjungan_LKot1 ?>]
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
                text: 'Berdasarkan Penyakit'
            },
            xAxis: {
                categories: ['tbc', 'diare', 'ispa','Umum'],
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
                    data: [<?php echo $jumlah_kunjungan_tbc1 ?>, <?php echo $jumlah_kunjungan_diare1 ?>, <?php echo $jumlah_kunjungan_ispa1 ?>, <?php echo $jumlah_kunjungan_umum1 ?>]
                }]
        });
    });

</script>


<div  class="tabs" style="margin-left: 30px;width:95%">
    <ul>

        <li><a href="#tabs-a">Harian</a></li>
    </ul>
<form action="" method="post">
    <div id="tabs-a" style="">
        
<br/>
            Pilih tanggal:
            <input type="text"  class="datepicker" placeholder="Masukkan tanggal" name="tgl_statistik" class="input-medium" value="<?php echo $tgl ?>"/>
            <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>

       
        <br/><br/>

<hr/>

        <div style="width: 48%; float: left; height: 300px;" id="grafik1"></div>
        <div style="width: 48%; float: right; height: 300px;" id="grafik2"></div>
         <br/>
        <hr/>
        
        <div style="clear: both"></div>
       </div>
        <br/></div>

</div>
