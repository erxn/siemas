<?php $this->load->view('header');?>

<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />


<script>
    $(function() {
        $( "#datepicker" ).datepicker({
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


$jumlah_kunjungan_pab = $grafik['kia_pab'];
$jumlah_kunjungan_cib = $grafik['kia_cib'];
$jumlah_kunjungan_LW = $grafik['kia_lw'];
$jumlah_kunjungan_LKot = $grafik['kia_lk'];

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

    });

</script>


<div  class="tabs" style="margin-left: 30px;width:95%">
    <ul>

        <li><a href="#tabs-a">Harian</a></li>
    </ul>

    <div id="tabs-a" style="">
        <form action="" method="post">

            Pilih tanggal:
            <input type="text"  id="datepicker" placeholder="Masukkan tanggal" name="tgl_statistik" class="input-medium" value="<?php echo $tgl ?>"/>
            <input type="submit" value="Tampilkan" class="submit-green" name="submit"/>

        </form>
        <br/>
        <hr/>

        <div style="width: 48%; float: left; height: 300px;" id="grafik1"></div>
        <div style="width: 48%; float: right; height: 300px;" id="grafik2"></div>
         <br/>
        <hr/>
        <a href="#" style="margin-left: 500px" class="btn-gplus gplus-blue" onclick="$('#banding').fadeOut();$('is_banding').val('1');return false;"> Melihat perbandingan</a>
        <input type="hidden" id="is_banding" value="0" name="is_banding" />

        <div style="clear: both"></div>
        <br/>

    </div>
</div>
