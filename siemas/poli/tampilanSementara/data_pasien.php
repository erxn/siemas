<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8;charset=utf-8" />
		<title>Puskesmas Bogor Tengah</title>
		<link rel="stylesheet" type="text/css" href="Template_files/reset000.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="Template_files/grid0000.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/styles00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/jquery00.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/tablesor.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/thickbox.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Template_files/theme-bl.css" media="screen" />
        
        
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
		 <img src="Template_files/logo0000.gif" style="position: absolute; top:56px; left:60px" />
            <img src="Template_files/puskesmas.png" style="position: absolute; top:45px; left:120px" />
            <img src="Template_files/alamat.png" style="position: absolute; top:95px; left:120px" />
            <img src="Template_files/gigi.png" style="position: absolute; top:40px; right:2px" />
			
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
        
		<div class="container_12"style="margin-left:8px" >
			<h3>Cari data pasien</h3>
			<tr >
				<td>Id KK:</td>
				<td style="width: 50%"><input type="text" class="input-long"></td>
				
				<td>Nama:</td>
				<td style="width: 50%"><input type="text" class="input-long"></td>
				
				<td>Umur:</td>
				<td style="width: 50%"><input type="text" class="input-long"></td>
				
				<td>Alamat:</td>
				<td style="width: 50%"><input type="text" class="input-long"></td>
				
				
				<td ><img style="margin-top:px" src="Template_files/cari.png"></td>
				
			</tr>

           
                <!-- Example table -->
                <div class="module">
                	<h2><span>Data Pasien</span></h2>
                    
                    <div class="module-table-body">	
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:2%">No</th>
                                    <th style="width:10%">Tanggal Pendaftaran</th>
                                    <th style="width:10%">Id KK</th>
                                    <th style="width:10%">Nama  Pasien</th>
                                    <th style="width:5%">Jenis Kelamin</th>
                                    <th style="width:10%">Tanggal Lahir</th>
                                    <th style="width:10%"> Status Pelayan</th>
									<th style="width:10%">No Kartu</th>
									 <th style="width:10%"> Alamat</th>
									<th style="width:10%"></th>
							   </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>1234</td>
                                    <td>Meri Marlina</td>
                                    <td>P</td>
                                    <td>20-05-1991</td>
                                    <td>Askes</td>
									<td>0998889</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">2</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>1454</td>
                                    <td>Annisa Anastasia</td>
                                    <td>P</td>
                                    <td>12-09-1998</td>
                                    <td>Umum</td>
									<td>989898</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">3</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>12334</td>
                                    <td>Muhammad Abrari</td>
                                    <td>L</td>
                                    <td>12-08-1998</td>
                                    <td>Umum</td>
									<td>98766</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">4</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>98767</td>
                                    <td>Trio</td>
                                    <td>P</td>
                                    <td>10-08-1997</td>
                                    <td>Jamkesmas</td>
									<td>9874</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">5</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>97653</td>
                                    <td>Andrio</td>
                                    <td>L</td>
                                    <td>20-09-1998</td>
                                    <td>Askes</td>
									<td>8765</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">6</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>98887</td>
                                    <td>Mutiara Wide</td>
                                    <td>P</td>
                                    <td>10-09-1999</td>
                                    <td>Umum</td>
									<td>98766</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">7</td>
                                    <td><a href="">10-04-2010</a></td>
                                    <td>9898498</td>
                                    <td>Dimas Bagus</td>
                                    <td>L</td>
                                    <td>14-09-1995</td>
                                    <td>Umum</td>
									<td>998878</td>
									<td>Dramaga tengah rt 09/08 no 309</td>
									<td><input type="checkbox" />
                                        <a href=""><img src="Template_files/minus-ci.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="Template_files/pencil00.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="Template_files/balloon0.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="" onclick="return confirm('Apakah anda yakin akan menghapus pasien?')"><img src="Template_files/bin00000.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                               
                               
                            </tbody>
                        </table>
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
                        </div>
                        
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                		<a href="" class="button"><span><img src="Template_files/arrow-sv.gif" height="9" width="12" alt="First" /> First</span></a> 
                        <a href="" class="button"><span><img src="Template_files/arrow-19.gif" height="9" width="12" alt="Previous" /> Prev</span></a>
                        <div class="numbers">
                            <span>Page:</span> 
                            <a href="">1</a> 
                            <span>|</span> 
                            <a href="">2</a> 
                            <span>|</span> 
                            <span class="current">3</span> 
                            <span>|</span> 
                            <a href="">4</a> 
                            <span>|</span> 
                            <a href="">5</a> 
                            <span>|</span> 
                            <a href="">6</a> 
                            <span>|</span> 
                            <a href="">7</a> 
                            <span>|</span> 
                            <span>...</span> 
                            <span>|</span> 
                            <a href="">99</a>
                        </div> 
                        <a href="" class="button"><span>Next <img src="Template_files/arrow-00.gif" height="9" width="12" alt="Next" /></span></a> 
                        <a href="" class="button last"><span>Last <img src="Template_files/arrow-sw.gif" height="9" width="12" alt="Last" /></span></a>
                        <div style="clear: both;"></div> 
                     </div>
                
                

                
			</div> <!-- End .grid_12 -->
           
           
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
