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


$jumlah_kunjungan_pab = $grafik['gigi_pab'];
$jumlah_kunjungan_cib = $grafik['gigi_cib'];
$jumlah_kunjungan_LW = $grafik['gigi_lw'];
$jumlah_kunjungan_LKot = $grafik['gigi_lk'];

$jumlah_kunjungan_02 = $grafik['penyakit1'];
$jumlah_kunjungan_03 = $grafik['penyakit2'];
$jumlah_kunjungan_04 = $grafik['penyakit3'];
$jumlah_kunjungan_05 = $grafik['penyakit4'];
$jumlah_kunjungan_08 = $grafik['penyakit5'];

$jumlah_kunjungan_pab1 = $grafik['gigi_pab1'];
$jumlah_kunjungan_cib1 = $grafik['gigi_cib1'];
$jumlah_kunjungan_LW1 = $grafik['gigi_lw1'];
$jumlah_kunjungan_LKot1 = $grafik['gigi_lk1'];

$jumlah_kunjungan_021 = $grafik['penyakit11'];
$jumlah_kunjungan_031 = $grafik['penyakit21'];
$jumlah_kunjungan_041 = $grafik['penyakit31'];
$jumlah_kunjungan_051 = $grafik['penyakit41'];
$jumlah_kunjungan_081 = $grafik['penyakit51'];

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
                text: 'Berdasarkan penyakit'
            },
            xAxis: {
                categories: ['02', '03', '04', '05','08'],
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
                    data: [<?php echo $jumlah_kunjungan_02 ?>, <?php echo $jumlah_kunjungan_03 ?>, <?php echo $jumlah_kunjungan_04 ?>, <?php echo $jumlah_kunjungan_05 ?>, <?php echo $jumlah_kunjungan_08 ?>]
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
                text: 'Berdasarkan penyakit'
            },
            xAxis: {
                categories: ['02', '03', '04', '05','08'],
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
                    data: [<?php echo $jumlah_kunjungan_021 ?>, <?php echo $jumlah_kunjungan_031 ?>, <?php echo $jumlah_kunjungan_041 ?>, <?php echo $jumlah_kunjungan_051 ?>, <?php echo $jumlah_kunjungan_081 ?>]
                }]
        });
    });

</script>


<div  class="tabs" style="margin: 0 1%; margin-top: 20px">
    <ul>

        <li><a href="#tabs-a">Harian</a></li>
    </ul>
<form action="" method="post">
    <div id="tabs-a" style="">
        

            Pilih tanggal:
            <input type="text"  class="datepicker" placeholder="Masukkan tanggal" name="tgl_statistik" class="input-medium" value="<?php echo format_tanggal_tampilan($tgl) ?>"/>
            <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>        
        <br/>
        <br/>
        <hr/>

        <div style="width: 48%; float: left; height: 300px;" id="grafik1"></div>
        <div style="width: 48%; float: right; height: 300px;" id="grafik2"></div>
        <hr/>

        <a href="#" style="margin-left: 450px" class="btn-gplus gplus-blue" onclick="$('#banding').fadeIn(); $('#is_banding').val('1'); $('#bandingan').val('1'); return false;"> Melihat perbandingan</a>
        <input type="hidden" id="is_banding" value="0" name="is_banding" />
        <a href="#" class="btn-gplus gplus-red" onclick="$('#banding').fadeOut(); $('#is_banding').val('0'); return false;">x</a>

        <div id="banding" style="<?php if($p==false) echo "display:none"?>">
            <input type="hidden" name="bandingan" id="bandingan" value="<?php if($p==true) echo 1; else echo 0;?>" />

            <p style="float:left" >Pilih tanggal:</p>
                <input type="text"  style="float:left" class="datepicker" placeholder="Masukkan tanggal" name="tgl_statistik1" class="input-medium" value="<?php echo format_tanggal_tampilan($tgl1) ?>"/>
                <input type="submit" style="float:left" value="Tampilkan" class="submit-green" name="submit1"/>

            <br /> <br />
            <div style="width: 48%; float: left; height: 300px;" id="grafik3"></div>
            
            <div style="width: 48%; float: right; height: 300px;" id="grafik4"></div>
       
        <div style="clear: both"></div>
      
        </div>
    </div>
</form>
</div>
