<?php $this->load->view('header');?>  

<script type="text/javascript">
    $(function() {
        $('.password').pstrength();
    });
</script>
<!-- SKRIP GRAFIK -->
<script type="text/javascript">

    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                defaultSeriesType: 'column'
            },
            title: {
                text: 'Statistik Bulanan Pasien Berdasarkan Penyakit'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pasien'
                }
            },
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y +' mm';
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Karies Gigi',
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                }, {
                    name: 'Penyakit Pulpa & Jaringan Periapikal',
                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

                }, {
                    name: 'Penyakit Gusi dan Periodontal',
                    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

                }, {
                    name: 'Peny dentofasial & inaloklusi',
                    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
                }, {
                    name: 'Gangguan Gusi dan jaringan Penunjang Lain',
                    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

                }]
        });


    });

</script>
<!-- END SCRIPT GRAFIK -->

<!-- SUBNAV -->
<div id="subnav">
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- END SUBNAV -->
<br/>
<div class="container_12">
    <div>
        <div class="grid_6" style="width: 98%">
            <div class="module">
                <h2><span>LOKET PUSKESMAS BOGOR TENGAH</span></h2>
                <div class="module-body">
                    <div style="width: 800px; height: auto;padding: 2px; text-align: center; margin: 0 auto">
                        <a href="index.php/pembayaran" class="kotak"><img src="images/loket_besar.png" border="0"/><br/>
                            Pembayaran</a>
                        <a href="index.php/registrasi" class="kotak"><img src="images/antrian2.png" border="0"/><br/>
                            Antrian & Registrasi</a>
                        <a href="index.php/pasien" class="kotak"><img src="images/pasien.png" border="0"/><br/>
                            Data Pasien</a>
                    </div>
                    <div>
                        <div id="container" style="width: 98%; height: 10%px; margin: 0 auto">
                            <!-- ini grafiknya -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
