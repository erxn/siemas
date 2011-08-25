<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
             <base href="http://localhost/siemas/poli/" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/modules/exporting.js"></script>
		
		<script type="text/javascript">
		
			var chart;
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						defaultSeriesType: 'column'
					},
					title: {
						text: 'Statistik Tahunan Pasien Berdasarkan Penyakit'
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
								this.x +': '+ this.y +' orang';
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
						data: [<?php echo $data1;?>, <?php echo $data6;?>, <?php echo $data11;?>, <?php echo $data16;?>, <?php echo $data21;?>, <?php echo $data26;?>, <?php echo $data31;?>, <?php echo $data36;?>, <?php echo $data41;?>, <?php echo $data46;?>, <?php echo $data51;?>, <?php echo $data56;?>]
				
					}, {
						name: 'Penyakit Pulpa & Jaringan Periapikal',
						data: [<?php echo $data2;?>, <?php echo $data7;?>, <?php echo $data12;?>, <?php echo $data17;?>, <?php echo $data22;?>, <?php echo $data27;?>, <?php echo $data32;?>, <?php echo $data37;?>, <?php echo $data42;?>, <?php echo $data47;?>, <?php echo $data52;?>, <?php echo $data57;?>]
				
					}, {
						name: 'Penyakit Gusi dan Periodontal',
						data: [<?php echo $data3;?>, <?php echo $data8;?>, <?php echo $data13;?>, <?php echo $data18;?>, <?php echo $data23;?>, <?php echo $data28;?>, <?php echo $data33;?>, <?php echo $data38;?>, <?php echo $data43;?>, <?php echo $data48;?>, <?php echo $data53;?>, <?php echo $data58;?>]
				
					}, {
						name: 'Peny dentofasial & inaloklusi',
						data: [<?php echo $data4;?>, <?php echo $data9;?>, <?php echo $data14;?>, <?php echo $data19;?>, <?php echo $data24;?>, <?php echo $data29;?>, <?php echo $data34;?>, <?php echo $data39;?>, <?php echo $data44;?>, <?php echo $data49;?>, <?php echo $data54;?>, <?php echo $data59;?>]
					}, {
						name: 'Gangguan Gusi dan jaringan Penunjang Lain',
						data: [<?php echo $data5;?>, <?php echo $data10;?>, <?php echo $data15;?>, <?php echo $data20;?>, <?php echo $data25;?>, <?php echo $data30;?>, <?php echo $data35;?>,<?php echo $data40;?>, <?php echo $data45;?>, <?php echo $data50;?>, <?php echo $data55;?>, <?php echo $data60;?>]
				
					}]
				});
				
				
			});
				
		</script>
		
	</head>
	<body>
		
		<!-- 3. Add the container -->
		<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
		
				
            
	</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
