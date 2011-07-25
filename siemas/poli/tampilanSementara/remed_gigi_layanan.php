<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
		<title>Puskesmas Bogor Tengah</title>
       
        <!-- CSS Reset -->
		<link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />
       
        <!-- Fluid 960 Grid System - CSS framework -->
		<link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
		
        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
        
        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />
        
        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />
        
        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />
        
        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" />
        
        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />
        <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->
        
		<!-- JQuery engine script-->
		<script type="text/javascript" src="Template_files/jquery-1.js"></script>
        
		<!-- JQuery WYSIWYG plugin script -->
		<script type="text/javascript" src="Template_files/jquery00.js"></script>
        
        <!-- JQuery tablesorter plugin script-->
		<script type="text/javascript" src="Template_files/jquery01.js"></script>
        
		<!-- JQuery pager plugin script for tablesorter tables -->
		<script type="text/javascript" src="Template_files/jquery02.js"></script>
        
		<!-- JQuery password strength plugin script -->
		<script type="text/javascript" src="Template_files/jquery03.js"></script>
        
		<!-- JQuery thickbox plugin script -->
		<script type="text/javascript" src="Template_files/thickbox.js"></script>
        
        <!-- Initiate WYIWYG text area -->
		<script type="text/javascript">
			$(function()
			{
			$('#wysiwyg').wysiwyg(
			{
			controls : {
			separator01 : { visible : true },
			separator03 : { visible : true },
			separator04 : { visible : true },
			separator00 : { visible : true },
			separator07 : { visible : false },
			separator02 : { visible : false },
			separator08 : { visible : false },
			insertOrderedList : { visible : true },
			insertUnorderedList : { visible : true },
			undo: { visible : true },
			redo: { visible : true },
			justifyLeft: { visible : true },
			justifyCenter: { visible : true },
			justifyRight: { visible : true },
			justifyFull: { visible : true },
			subscript: { visible : true },
			superscript: { visible : true },
			underline: { visible : true },
            increaseFontSize : { visible : false },
            decreaseFontSize : { visible : false }
			}
			} );
			});
        </script>
        
        <!-- Initiate tablesorter script -->
        <script type="text/javascript">
			$(document).ready(function() { 
				$("#myTable") 
				.tablesorter({
					// zebra coloring
					widgets: ['zebra'],
					// pass the headers argument and assing a object 
					headers: { 
						// assign the sixth column (we start counting zero) 
						6: { 
							// disable it by setting the property sorter to false 
							sorter: false 
						} 
					}
				}) 
			.tablesorterPager({container: $("#pager")}); 
		}); 
		</script>
        
        <!-- Initiate password strength script -->
		<script type="text/javascript">
			$(function() {
			$('.password').pstrength();
			});
        </script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
                        <span id="text-invitation"></span>
                        <!-- Messages displayed through the thickbox -->
                        
                    </div>
                    <div class="grid_4">
                        <a href="" id="logout">
                        Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
             
			 <img src="Template_files/logo0000.gif" style="position: absolute; top:56px; left:60px">
            <img src="Template_files/puskesmas.gif" style="position: absolute; top:56px; left:120px">
            <img src="Template_files/gigi.png" style="position: absolute; top:40px; right:2px">
			
			<!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                            <ul id="nav">
                                   <li><a href="#">Home</a></li>
                                <li><a href="#">Antrian</a></li>
                                <li id="current"><a href="#">Pasien</a></li>
				<li><a href="#">Statistik</a></li>
				<li><a href="#">Laporan</a></li>
                            </ul>
                        
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                          <li><a href="#">Medical Record</a></li>
                            <li><a href="#">Data Pasien</a></li>
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">
            <!-- To-do list -->
          
           
            
            <!-- Form elements -->    
            <div class="grid_12" style=" margin-top: 10px; ">
            
                   
                
                     <h1><span>Rekam Medik Poli Gigi</span></h1>
                    
					
                             <div class="module" style="float: left; width: 48%">			<!--buat nampilin data pasien-->
                                    <h2><span>Data Pasien Pasien</span></h2>
                        
                                        <div class="module-body">
                                                <form action="">
                           
							<table style="width:100%;" class="noborder">
							<strong> Data Pasien</strong>
							<tr>
								<td>Tanggal Pendaftaran:</td>
								<td style="width: 50%">  20-09-2011 </td>
					
							</tr>
							<tr>
								<td>Id KK:</td>
								<td style="width: 50%">  09879887 </td>
					
							</tr>
							<tr>
								<td>Id Pasien:</td>
								<td style="width: 50%">12347</td>
					
							</tr>
							
							<tr>
								<td>Nama:</td>
								<td style="width: 50%">Meri Marlina</td>
					
							</tr>
							
							<tr>
								<td>Umur</td>
								<td>19</td>
					
							</tr>
							
							
							<tr>
								<td >Status PElayanan:</td>
								<td>Askes</td>
					
							</tr>
							
							
							<tr>
								<td>No. Kartu</td>
								<td>0909089</td>
					
							</tr>
							
							<tr>
								<td>Alamat:</td>
								<td>Jl. Ir H Djuanda Dramaga Timur  RT 09/07 No 98 Kec. Dramaga Kab. Dramaga Bogor</td>
					
							</tr>
							</table>
							
                          
                        </form>
                     </div> <!-- End .module-body -->
</div>
						
						
						
						
						  <ul id="nav" style="margin-top: 10px; margin-right:98%px ; float:right;">
                                   <li id="current"><a href="#">Poli Gigi</a></li>
                                <li style="background:#3cb3db " ><a href="#" style="background: #3cb3db" >Poli KIA</a></li>
								<li style="background:#3cb3db " ><a href="#" style="background: #3cb3db" >Poli Umum</a></li>
                                <li  style="background:#3cb3db "><a href="#"style="background:#3cb3db ">Lab</a></li>
								<li style="background:#3cb3db "><a href="#" style="background: #3cb3db">Rontgen</a></li>
								
                            </ul>
					
               				<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.14.custom.css" media="screen" />
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy'
		});
	});
	</script>					
                <!-- Example table -->
                <div class="module" style=" margin-top: -5px; float: right; width: 48%">
                	<h2><span>Rekam Medik Pasien</span></h2>
							<div style="padding: 10px;">
								
                                <input id="datepicker" placeholder="Masukkan tanggal" type="text" class="input-long" style="vertical-align: top; margin-top: 5px;">
                                
								<img src="Template_files/cari.png">
							</div>
                        
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">No</th>
                                    <th style="width:20%">Tanggal Kunjungan</th>
                                    <th style="width:21%">Anamnesis</th>
                                    <th style="width:13%">Diagnosa</th>
									<th style="width:13%">Layanan</th>
                                    <th style="width:13%">Resep Dokter</th>
									<th style="width:13%">Ket.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">20-08-2009</a></td>
                                    <td>Sariawan</td>
                                    <td>Bolong gigi</td>
                                    <td>Karies, Cabut Gigi</td>
                                    <td>AMoksilin</td>
									<td>Perlu tindakan cepatttttt!!</td>
                                </tr>
                                <tr>
                                   <td class="align-center">2</td>
                                    <td><a href="">20-08-2009</a></td>
                                    <td>Sariawan</td>
                                    <td>Bolong gigi</td>
                                    <td>Karies, Cabut Gigi</td>
                                    <td>AMoksilin</td>
									<td>Perlu tindakan cepatttttt!!</td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td><a href="">20-08-2009</a></td>
                                    <td>Sariawan</td>
                                    <td>Bolong gigi</td>
                                    <td>Karies, Cabut Gigi</td>
                                    <td>AMoksilin</td>
									<td>Perlu tindakan cepatttttt!!</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="Template_files/arrow-st.gif" alt="first"/>
                                <img class="prev" src="Template_files/arrow-18.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="Template_files/arrow000.gif" alt="next"/>
                                <img class="last" src="Template_files/arrow-su.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                       
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
								
								
                 <ul id="nav" style="margin-top: -50px; margin-right:500px ; float:left;">
                                   <li style="background:#3cb3db "><a href="#" style="background:#3cb3db ">Anamnesis</a></li>
                                <li style="background:#3cb3db " ><a href="#" style="background: #3cb3db" >Diagnosa</a></li>
				<li id="current" ><a href="#" >Layanan</a></li>
                               <li style="background:#3cb3db " ><a href="remed_gigi_resep.php" style="background: #3cb3db" >Resep Dokter</a></li>
                               <li style="background:#3cb3db " ><a href="#" style="background: #3cb3db" >Keterangan</a></li>
                               
                            </ul>
					<div class="module" style=" margin-top: -20px;  margin-right:0%; float: left; width: 48%">			<!--buat nampilin yg poliiiii-->
								 <h2><span>Diagnosis Dokter</span></h2>
                        
						<div class="module-body">
							<form action="">
								
								<table class="noborder" style="width:100%">
										
							<tr>
								<td>Penyakit:</td>
								<td><select class="input-long">
									 <option value="0">-</option>
                                    <option value="1">02-Karies Gigi</option>
                                    <option value="2">03-Penyakit Pulpa & Jar. Periapikal</option>
                                    <option value="3">04-Penyakit Gusi & Periodontal</option>
                                    <option value="4">05-Peny dentofasial</option>
									<option value="4">08-Gangguan gigi</option>
                                </select></td>
							</tr>
							
							<tr>
								<td>Tindakan:</td>
								<td><select class="input-long">
									<option value="0">-</option>
                                    <option value="1">Tumpatan Gigi Tetap</option>
                                    <option value="2">Tumpatan Gigi Sulung</option>
                                    <option value="3">OPencabutan Gigi Tetap</option>
                                    <option value="4">Pencabutan Gigi Sulung</option>
                                    <option value="5">Tump Sementara Gigi Tetap</option>
                                    <option value="6">Tump Sementara Gigi Sulung</option>
                                    <option value="7">Pengobatan Pulpa</option>
                                    <option value="8">Pengobatan Periode</option>
                                    <option value="9">Pengobatan Abses</option>
                                    <option value="10">Skelling</option>
                                    <option value="11">Lainnya</option>
                                </select></td>
							</tr>
								</table>
								
							</form>
                  
						</div> <!-- End .module-body -->
					</div>
               

            
    </div>
        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2009. Magic Admin.</p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>
<!-- This document saved from http://www.xooom.pl/work/magicadmin/admin.html? -->
